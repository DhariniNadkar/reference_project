<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function list(){
        $categories = Category::get();
        return view('categories.list',['categories' => $categories]);
    }
    public function create(){
        // $categories = Category::get();
        return view('categories.new');
    }
    public function store(Request $request){
        $request->validate([
            'Images' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $category = new Category;
        $category->Name = $request->Name;
        $category->Type = $request->Type;
        $category->Price = $request->Price;
        $category->Speed = $request->Speed;
        $category->Status = $request->Status;
        // $category->Images = $request->file('image')->getClientOriginalName();
        // $category->Images = $request->Images;
        // $request->Images->move(public_path('Images'), $category->Images);
        $imageName = time().'.'.$request->Images->extension();

        $request->Images->move(public_path('Images'), $imageName);
        $category->save();
        
        return redirect('/')->withSuccess('New Category Created');  //flash message
        
        // $validated = $request->validate([
        //     'Name' => 'required|alpha|max:40',
        //     'Type' => 'required|max:50',
        //     'Price' => 'required|numeric',
        //     'Speed' => 'required|numeric',
        //     'image'=> 'required',
        // ]);
    }
    public function edit($id){
        // dd($id);
        $category = Category::where('id',$id)->first();
        return view('categories.edit',['category'=> $category]);
    }
    public function update(Request $request,$id){
        // $validated = $request->validate([
        //     // 'title' => 'required|max:40',
        //     'Name' => 'required|alpha|max:40',
        //     'Type' => 'required|max:50',
        //     'Price' => 'required|numeric',
        //     'Speed' => 'required|numeric',
        //     'Staus' => 'required',
        //     'Image'=> 'required'
        // ]);
        $request->validate([
            'Images' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        $category = Category::where('id',$id)->first();
        $category->Name = $request->Name;
        $category->Type = $request->Type;                              
        $category->Price = $request->Price;
        $category->Speed = $request->Speed;
        $category->Status = $request->Status;
        // $category->product = $request->file('image')->getClientOriginalName();
        $imageName = time().'.'.$request->Images->extension();

        $request->Images->move(public_path('Images'), $imageName);
        $category->save();
        return redirect('/')->withSuccess('New Category Updated'); 
    }
}
