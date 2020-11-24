<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;

class StaticPagesController extends Controller
{

    public function landing_page()
    {
      return view('static_pages.index');
    }

    public function frequently_questions()
    {
      return view('static_pages.frequently_questions');
    }
    
}
