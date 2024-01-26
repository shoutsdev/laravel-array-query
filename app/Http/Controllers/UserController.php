<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $array = ["search" => "hardik", "sort_by" => "asc", "field" => "name"];

        $queryStringURL = route('users.index', $array);

        dd($queryStringURL);
    }
}
