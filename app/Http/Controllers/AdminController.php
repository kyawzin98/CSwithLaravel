<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //AdminController control is here
    public function viewProducts(){
        $data['products']=Product::all();
        return view('admin.view_products',$data);
    }
    public function productForm()
    {

        return view('admin.product_input_form');
    }
}
