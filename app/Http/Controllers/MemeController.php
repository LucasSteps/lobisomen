<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemeController extends Controller {

    public function index() {

        return view('pages.meme');

    }

}
