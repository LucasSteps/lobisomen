<?php

namespace App\Http\Controllers;

use App\Models\Develop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {

    /**
     * Page of develop
     */
    public function developersIndex() {

        $develops = Develop::all()->sortBy('name');

        $data = [
            'develops' => $develops
        ];

        return view('pages.home.developers', $data);
    }

}
