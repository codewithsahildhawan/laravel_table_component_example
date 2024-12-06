<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index() {

        $users = [
            ['1', 'Alice', 'alice@example.com'],
            ['2', 'Bob', 'bob@example.com'],
        ];

        $products = [
            ['1', 'Laptop', '$1000'],
            ['2', 'Phone', '$500'],
        ];

        return view('users.view', compact('users', 'products'));
    }
}
