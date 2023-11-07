<?php

namespace App\Controllers;
use App\Libraries\GroceryCrud;
use App\Libraries\Guid;


class Management extends AuthController
{


	public function __construct() {
		// init ion-auth
		$this->ionAuth    = new \IonAuth\Libraries\IonAuth();
		$this->validation = \Config\Services::validation();
		helper(['form', 'url']);
		$this->configIonAuth = config('IonAuth');
		$this->session       = \Config\Services::session();

		if (! empty($this->configIonAuth->templates['errors']['list']))
		{
			$this->validationListTemplate = $this->configIonAuth->templates['errors']['list'];
		}

		// check if logged in and admin
		if (! $this->ionAuth->loggedIn())
		{
			return redirect()->to('/auth/login');
		}
		else if (! $this->ionAuth->isAdmin()) // remove this elseif if you want to enable this for non-admins
		{
			return redirect()->to('/auth/logout');
			//throw new \Exception('You must be an administrator to view this page.');
		}

	}

  
    public function index()
    {
		//$ionAuth = new IonAuth();
		if (! $this->ionAuth->loggedIn())
		{
			// redirect them to the login page
			return redirect()->to('/auth/login');
		}
		else if (! $this->ionAuth->isAdmin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			//show_error('You must be an administrator to view this page.');
			//throw new \Exception('You must be an administrator to view this page.');
			return redirect()->to('/auth/logout');
		}
		
		return redirect()->to('/management/toga');
		// $user  = $this->ionAuth->user()->row();
		// $display_output = ["user"=>$user];
        // return view('togamf/main',$display_output);

    }

	public function toga()
	{
	    $crud = new GroceryCrud();

	    $crud->setTable('toga');
        $crud->setTheme('tablestrap4');
		$crud->setSubject('Toga');
        //$crud->unsetJquery();
		$crud->unsetFields(['uid']);
		$crud->unsetColumns(['uid','bahan_berkhasiat','bahan_berkhasiat_en','khasiat','khasiat_en']);
        $crud->unsetBootstrap();
		$crud->displayAs('name_latin','Nama Latin');
		$crud->displayAs('name','Nama');
		$crud->displayAs('deskripsi_lainnya','Deskripsi Lainnya');
		$crud->displayAs('name_en','Nama (Inggris)');
		$crud->displayAs('khasiat_en','Khasiat (Inggris)');
		$crud->displayAs('bahan_berkhasiat_en','Bahan Berkhasiat (Inggris)');
		$crud->displayAs('deskripsi_lainnya_en','Deskripsi Lainnya (Inggris)');
		$crud->setActionButton('Toga', 'fa fa-user', function ($row) {
		 	return '/toga/view/'.$row;
		}, true);

		$crud->setActionButton('QRcode', 'fa fa-user', function ($row) {
			return '/toga/viewqr/'.$row;
		}, true);

		$crud->setActionButton('Images', 'fa fa-user', function ($row) {
			return '/management/images/'.$row;
	   }, true);

		$output = $crud->render();
		$grocery_crud = array("output"=>$output);
		$user  = $this->ionAuth->user()->row();
		$display_output = ["grocery_crud"=>$grocery_crud,"user"=>$user];

		return view('togamf/main-grocery', $display_output);
	}



	

    public function users()
	{
		$IonAuth = $this->ionAuth;
	    $crud = new GroceryCrud();

	    $crud->setTable('users');
        $crud->setTheme('tablestrap4');
		$crud->fields(['username','email','password','first_name', 'last_name']);
		$crud->unsetDelete();
		//$crud->unsetJquery();
        $crud->unsetBootstrap();
		$crud->columns(['username','email','first_name', 'last_name']);
		$crud->fieldType('password','password');
        //$crud->unsetJquery();
        //$crud->unsetBootstrap();
		//$crud->setTextEditor(['keterangan']);
		$crud->callbackInsert(function ($stateParameters) use ($IonAuth) {
			$username = $stateParameters->data['username'];
			$password = $stateParameters->data['password'];
			$email = $stateParameters->data['email'];
			$additional_data = array(
				'first_name' => $stateParameters->data['first_name'],
				'last_name' => $stateParameters->data['first_name'],
			);
			$group = array('1'); // Sets user to admin.

			$result = $IonAuth->register($username, $password, $email, $additional_data, $group);
			// As we are skipping the actual insert we will need to insert by our own
			//$insertId = $callbackInsertModel->insertOrder($stateParameters->data);
		
			// Required
			$stateParameters->insertId = $result;
		
			return $stateParameters;
		});


		$crud->callbackUpdate(function ($stateParameters) use ($IonAuth) {
			$id = $stateParameters->primaryKeyValue;
			$data = array(
				  'first_name' => $stateParameters->data['first_name'],
				  'last_name' => $stateParameters->data['last_name'],
				  'password' => $stateParameters->data['password'],
				  'email' => $stateParameters->data['email']
				   );
			$IonAuth->update($id, $data);
		
			return $stateParameters;
		});

	    $output = $crud->render();
		$grocery_crud = array("output"=>$output);
		$user  = $this->ionAuth->user()->row();
		$display_output = ["grocery_crud"=>$grocery_crud,"user"=>$user];

		//echo "<pre>";
		//print_r($display_output);
		//echo "<pre>";

		
		return view('togamf/main-grocery', $display_output);
	}

	public function upload($id=null) { 
        $ds          = DIRECTORY_SEPARATOR;  //1
		$storeFolder = 'uploads';   //2
		if (!empty($_FILES)) {
			$guid = new Guid();

            //generate unique name 
            $uniqueName = substr($guid->GUIDv4(), 0, 5);

			$tempFile = $_FILES['file']['tmp_name'];          //3             
			
			$targetPath = dirname( __FILE__ ) . $ds.'../../public/'. $storeFolder . $ds;  //4
			
			$fileNameTarget = $uniqueName.'-'.$_FILES['file']['name'];

			$targetFile =  $targetPath.$fileNameTarget;  //5
		
			move_uploaded_file($tempFile,$targetFile); //6

			$database = \Config\Database::connect();
        	$db = $database->table('gambar');
			// insert into gambar table
			$data = [
				// 'id' => 0,
				'url'    => $fileNameTarget,
				'id_toga' => $id,
				'is_head' => 0,
			];
			$db->insert($data);
	
			// $gambarModel = new \App\Models\GambarModel();

			// return $gambarModel->insert($data, false);
			
		}
    }

	public function softDeleteFile($id=null) { 

		$fileUrl = $_POST['name']; 
       
			$database = \Config\Database::connect();
        	$db = $database->table('gambar');
			$db->where('url', $fileUrl );
			$db->delete();
    }

	public function images($id) { 
        // $user  = $this->ionAuth->user()->row();
		// $display_output = ["user"=>$user,"id"=>$id];

		$gambarModel = new \App\Models\GambarModel();
        $gambar = $gambarModel->where('id_toga', $id)->findAll();
		$display_output = ["id"=>$id,"gambar"=>$gambar];
        return view('togamf/produk-gambar',$display_output);
    }

	
	

}
