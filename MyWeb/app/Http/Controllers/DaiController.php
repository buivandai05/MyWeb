<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaiController extends Controller
{
    public function index()
    {

        $name = 'dai..................';
        echo $name;

        $age =0;
        echo $age;


        if ($age >= 18) {
            echo "Người lớn";
        } else {
            echo "Trẻ con";
        }

        return view('DaiView');
    }

}
