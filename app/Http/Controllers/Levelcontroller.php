<?php

namespace App\Http\Controllers;

use App\DataTables\LevelDataTable;
use App\Http\Requests\CreateLevelRequest;
use App\Http\Requests\UpdateLevelRequest;
use App\Models\LevelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    function index(LevelDataTable $dataTable)
    {
        return $dataTable->render('level.index');
    }

    function create()
    {
        return view('level.create');
    }

    function store(CreateLevelRequest $request)
    {
        $validated = $request->safe()->only(['level_kode', 'level_nama']);

        LevelModel::create($validated);
        return redirect('/level');
    }

    function update($id)
    {
        return view('level.update', ['data' => LevelModel::find($id)]);
    }

    function update_simpan(UpdateLevelRequest $request, $id)
    {
        $validated = $request->safe()->only(['level_kode', 'level_nama']);
        LevelModel::find($id)->update($validated);

        return redirect('/level');
    }

    function hapus($id)
    {
        LevelModel::find($id)->delete();

        return redirect('/level');
    }
}