<?php

namespace My\Portfolio\Controllers\Frontend;

use My\Portfolio\Models\User;
use My\Portfolio\Controllers\Controller;

class HomeController extends Controller
{
      public function index()
      {
            // retrun some data to the view

            $user = new User();

            $users = $user->get();

            return view('index', $users);
      }

      public function create()
      {
            return view('crud/create');
      }

      public function store()
      {
            echo 'create store';
      }
}
