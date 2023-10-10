<?php

namespace App\Controllers;


class Toga extends BaseController
{
 

    public function index()
    {
        return redirect()->to('/auth/login')->withCookies();
        //return view('frontend/front');
    }

    public function view($id) {
        // get toga
        $togaModel = new \App\Models\TogaModel();
        $toga = $togaModel->find($id);


        $gambarModel = new \App\Models\GambarModel();
        $gambar = $gambarModel->where('id_toga', $id)->findAll();
 
        $display_output = ["toga"=>$toga,"gambar"=>$gambar];
        return view("togamf/produk-toga",$display_output);
    }

    public function viewQr($id=null) {
        $togaModel = new \App\Models\TogaModel();
        $toga = $togaModel->find($id);

        // if ($row) {
        //     // Row found, you can access its data like this:
        //     //$name = $row['name'];
        //    // $description = $row['description'];
        //     print_r($row);

        //     // Do something with the data
        // } else {
        //     // Row not found
        // }

        return view("togamf/produk-qr",$toga);
    }

}
