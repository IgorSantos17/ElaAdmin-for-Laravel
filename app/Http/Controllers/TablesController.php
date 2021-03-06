<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablesController extends Controller
{
    public function basic()
    {
        return view('tables.tables-basic')->with('title', 'Basic Table');
    }

    public function data()
    {
        return view('tables.data-table')->with('title', 'Data Table');
    }
}
