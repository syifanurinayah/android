<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\Controller;
use App\Transformers\CategoryTransformer;
use Auth;

class CategoryController extends Controller
{
    public function category(Category $category)
    {
    	$category = $category->all();

    	return fractal()
    		->collection($category)
    		->transformWith(new CategoryTransformer)
    		->toArray();
    }

     public function categoryById(Category $category,$id)
    {
        $category = $category->find($id);

        return fractal()
            ->item($category)
            ->transformWith(new CategoryTransformer)
            ->includeBlood()
            ->toArray();
    }
}
