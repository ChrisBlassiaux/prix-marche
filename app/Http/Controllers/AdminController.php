<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;
use App\User;

class AdminController extends Controller
{
    public function dashboard_admin()
    {
      if (! auth()->user()->is_admin) {
          return view('products.index', [
            'products' => Product::all()
          ]);
      } else {
        return view('admin.dashboard_admin',[
          'products' => Product::all(),
          'categories' => Category::all(),
          'users' => User::all()
          ]);
      }
      
    }
}
