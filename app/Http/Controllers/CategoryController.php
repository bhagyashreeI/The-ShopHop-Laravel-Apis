<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Resources\CategoryCollection as CategoryCollection;
use App\Http\Resources\CategoryResource as CategoryResource;

class CategoryController extends Controller
{
    //
    public function index()
    {
      return new CategoryCollection(Category::all());
    }
}
