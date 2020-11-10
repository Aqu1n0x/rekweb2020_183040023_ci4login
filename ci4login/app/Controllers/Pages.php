<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Home | WEBPROGRAMMINGUNPAS'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [

                    'tipe' => 'rumah',
                    'alamat' => 'jl. elang no. 56',
                    'kota' => 'jakarta'
                ],
                [

                    'tipe' => 'kantor',
                    'alamat' => 'jl. jalak no.226',
                    'kota' => 'jakarta'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
    //--------------------------------------------------------------------

}
