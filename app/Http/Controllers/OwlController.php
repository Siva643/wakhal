<?php

namespace App\Http\Controllers;

use App\Models\Owl;
use Illuminate\Http\Request;

class OwlController extends Controller
{
    //
    public function index()
    {
        return view('owlcarousel.create');
    }
    public function create(Request $request)
    {
        $file=time() . '.' .request()->image->getClientOriginalExtension();
        request()->image->move(public_path('imagesowl'), $file);
        $product=new Owl;
   
        $product->image=$file;
        $product->save();
        return redirect('readowl');

    }
    public function read()
    {
        $reads=Owl::all();
        return view('owlcarousel.read',compact('reads'));
    }
    public function edit(Request $request,$id)
    {
          $edits=Owl::find($id);
          return view('owlcarousel.edit',compact('edits'));
    }
    public function update(Request $request,$id)
    {
        $file=time() . '.' .request()->image->getClientOriginalExtension();
        request()->image->move(public_path('imagesowl'), $file);
        $product=Owl::find($id);
     
        $product->image=$file;
        $product->save();
        return redirect('readowl');
    }
    public function delete($id)
    {
        $delete=Owl::find($id);
        $delete->delete();
        return redirect('readowl');
    }
}
