<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index() {
    $halaman = 'category';
    $category_list= Category::orderBy('name', 'ASC')->Paginate(10);
    return view('category.index', compact('category_list','halaman'));
    }

    public function create()
    {
    	return view('category.create');
    }

     public function store(Request $request)
     {
      $input = $request->all();

     $validator = Validator::make($input,[
        'name' => 'required|string',
      ]);

      if ($validator->fails())
      {
        return redirect('category.create')->withInput();
      }

      Category::create($input);

      return redirect('category');
     }


    public function edit($id){
      $category = Category::findOrFail($id);
      return view('category.edit', compact('category'));
   }


   public function update($id, Request $request){
      $category = Category::findOrFail($id);
      $category->update($request->all());
      return redirect('category');
   }

     public function destroy($id){
      $category = Category::findOrFail($id);
      $category->delete();
      return redirect('category');
   }

}
