<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis'   => 3103120222,
            'Name'  => 'Tiwi Arum Setyaningsih',
            'Phone' => '081229349313',
            'Class' => 'XII RPL 7'
        ];
    }
}
