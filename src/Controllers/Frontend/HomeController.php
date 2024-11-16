<?php

namespace My\Portfolio\Controllers\Frontend;

use My\Portfolio\Models\User;
use My\Portfolio\Controllers\Controller;

class HomeController extends Controller
{
      public function index()
      {

            return view('Frontend/master');
      }

      public function about()
      {
            return view('Frontend/pages/about');
      }
}
