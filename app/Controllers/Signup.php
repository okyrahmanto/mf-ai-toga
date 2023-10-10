<?php

namespace App\Controllers;

use App\Libraries\Guid;

class Signup extends BaseController
{
    public function index()
    {
        return view('frontend/signup');
    }

    public function postAcceptor() {

        

        /***************************************************
         * Only these origins are allowed to upload images *
         ***************************************************/
        $accepted_origins = array("http://localhost", "http://192.168.1.1", "http://example.com","http://dev.cat-psikotest.dev-code.site","http://cat-psikotest.dev-code.site");

        /*********************************************
         * Change this line to set the upload folder *
         *********************************************/
        $imageFolder = __DIR__ ."../../../public/uploads/images/";

        if (isset($_SERVER['HTTP_ORIGIN'])) {
            // same-origin requests won't set an origin. If the origin is set, it must be valid.
            if (in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)) {
            header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
            } else {
            header("HTTP/1.1 403 Origin Denied");
            return;
            }
        }

        // Don't attempt to process the upload on an OPTIONS request
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            header("Access-Control-Allow-Methods: POST, OPTIONS");
            return;
        }

        reset ($_FILES);
        $temp = current($_FILES);
        if (is_uploaded_file($temp['tmp_name'])){
            /*
            If your script needs to receive cookies, set images_upload_credentials : true in
            the configuration and enable the following two headers.
            */
            // header('Access-Control-Allow-Credentials: true');
            // header('P3P: CP="There is no P3P policy."');

            // Sanitize input
            if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
                header("HTTP/1.1 400 Invalid file name.");
                return;
            }
            $fileExtension = strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION));
            // Verify extension
            if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png","jpeg"))) {
                header("HTTP/1.1 400 Invalid extension.");
                return;
            }

            $guid = new Guid();

            //generate unique name 
            $uniqueName = $guid->GUIDv4() .'.'. $fileExtension;

            // Accept upload if there was no origin, or if it is an accepted origin
            $filetowrite = $imageFolder . $uniqueName;
            move_uploaded_file($temp['tmp_name'], $filetowrite);

            // Determine the base URL
            $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? "https://" : "http://";
            $baseurl = $protocol . $_SERVER["HTTP_HOST"] . rtrim(dirname($_SERVER['REQUEST_URI']), "/") . "/";

            // Respond to the successful upload with JSON.
            // Use a location key to specify the path to the saved image resource.
            // { location : '/your/uploaded/image/file'}
            //echo json_encode(array('location' => $baseurl . $filetowrite));
            // Return JSON response with the uploaded file path.
            echo json_encode(array(
                'file_path' => $_SERVER['HTTP_ORIGIN'] .'/uploads/images/'. $uniqueName
            ));
        } else {
            // Notify editor that the upload failed
            header("HTTP/1.1 500 Server Error");
        }

    }

    public function uploadfile() {

        $guid = new Guid();

        $imageFolder = __DIR__ ."../../../writable/uploads/images/";
        $url = array(
            "http://localhost"
        );
        
        reset($_FILES);
        $temp = current($_FILES);
        
        if (is_uploaded_file($temp['tmp_name'])) {
            if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
                header("HTTP/1.1 400 Invalid file name,Bad request");
                return;
            }
            
            // Validating File extensions
            $fileExtension = strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION));

            if (! in_array($fileExtension, array(
                "gif",
                "jpg",
                "png"
            ))) {
                header("HTTP/1.1 400 Not an Image");
                return;
            }
            
            //generate unique name 
            $uniqueName = $guid->GUIDv4() . $fileExtension;

            $fileName = $imageFolder . $uniqueName;
            move_uploaded_file($temp['tmp_name'], $fileName);
            
            // Return JSON response with the uploaded file path.
            echo json_encode(array(
                'file_path' => $fileName
            ));
        }
    }
   

}
