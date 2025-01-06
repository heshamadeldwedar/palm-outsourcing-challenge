<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    function index() {
        return [
            [
                'id' => 1,
                'title' => 'this is a title',
                'description' => 'this is a description'
            ],
        ];
    }
}
