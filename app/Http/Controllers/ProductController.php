<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $name = 'Kaiser Vo';
        //return view('products.index', compact('name'));
        $myInfor= [
            'name' => 'Kaiser Vo',
            'email' => 'kaiser@gmail.com',
            'phone' => '0123456789',
            'age' => '20'
        ];
        print_r(route('products'));
        return view('products.index');
    }

    // public function detail($abt,$name)
    // {
    //     // $food = [
    //     //     'name' => 'Banh mi',
    //     //     'price' => '20000',
    //     //     'quantity' => '10'
    //     // ];

    //     // return view('products.index',['food' => $food[$abt] ?? 'Not found atrribute']);
    //     return "This is $abt $name";



    // }
}
