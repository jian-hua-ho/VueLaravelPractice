<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VueController extends Controller
{
    public function simpleExample()
    {
    	return view('vue.simple_example');
    }

    public function renderList()
    {
    	return view('vue.render_list');
    }
}
