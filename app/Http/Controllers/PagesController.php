<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function myProducts()
    {
        $data['products'] = Product::all();
        return view('pages.products', $data);
    }



    public function insertProduct(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'shortDescription' => 'required',
        ]);
        $data = [
            'name' => $request->name,
            'image_full' => 'product_large_02.jpg',
            'image_thumb' => 'product_thumb_02.jpg',
            'price' => $request->price,
            'description' => $request->description,
            'short_description' => $request->shortDescription,
        ];
        Product::create($data);
        return redirect()->back();
    }

    public function viewProduct($id)
    {
        $data['product'] = Product::find($id);
        return view('pages.products_detail')->with($data);
    }

    public function contactUs()
    {
        return view('pages.contact_us');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function aboutUs()
    {
        return view('pages.about_us');
    }
}
