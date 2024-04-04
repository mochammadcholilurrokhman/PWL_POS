<?php

namespace App\Http\Controllers;

use App\DataTables\LevelDataTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Levelcontroller extends Controller
{
        public function index(LevelDataTable $dataTable)
    {
        return $dataTable->render('level.index');
    }
    
}
