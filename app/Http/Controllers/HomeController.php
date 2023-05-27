<?php

namespace App\Http\Controllers;

use App\Models\Owl;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data=Product::paginate(4);
        $data2=Owl::all();

        return view ('index',['products'=>$data,'owls'=>$data2]);

    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function feature()
    {
        return view('feature');
    }
    public function testimonial()
    {
        return view('testimonial');
    }
    public function product()
    {
        return view('product');
    }
    public function blog()
    {
        return view('blog');
    }
}
