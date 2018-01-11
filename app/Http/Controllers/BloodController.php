<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blood;
use App\Category;
use Validator;

class BloodController extends Controller
{
  public function index()
  {
   $halaman = 'blood';
   $blood_list= Blood::orderBy('name', 'ASC')->Paginate(5);
    return view('blood.index', compact('blood_list','halaman'));
   }

  public function create()
  {

   $category_list = Category::pluck('name','id');
   return view('blood.create', compact('category_list'));

  }

  public function store(Request $request)
  {
    $input = $request->all();
    $validator = Validator::make($input,[
      'name' => 'required|string|unique:blood,name',
      'category_id' => 'required',
      'alamat' => 'required|string',
      'keterangan' => 'required|string',
    ]);

    if ($validator->fails()){
      return redirect('blood/create')->withInput();
    }

    Blood::create($input);

    return redirect('blood');
  }


  public function edit($id)
  {
   $blood = Blood::findOrFail($id);
   $category_list = Category::pluck('name','id');
   return view('blood.edit', compact('blood','category_list'));
  }


  public function update($id, Request $request)
  {

   $blood = Blood::findOrFail($id);
   $blood->update($request->all());
   return redirect('blood');
  }

  public function destroy($id)
  {
   $blood = Blood::findOrFail($id);
   $blood->delete();
   return redirect('blood');
  }
}
