<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use App\Product;
use App\Category;

class StaticPagesController extends Controller
{

    public function landing_page()
    {
      return view('static_pages.index', [
        'products' => Product::all(),
        'categories' => Category::all()
    ]);
    }

    public function frequently_questions()
    {
      return view('static_pages.frequently_questions');
    }
    
}
