<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index() 
    
    {
        $data = Dosen::all();

        return view('dosen/index', compact('data'));
    }

    public function create()
    {
        return view('dosen/add');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'nik' => 'required',
            'nama_dosen' => 'required|min:20',
            'umur' => 'required|number',
        ]);
        Dosen::create($request->all());
        return redirect(url('data-dosen'));
    }

    public function destroy(Dosen $id)
    {
        $id->delete();
        return redirect(url('data-dosen'));
    }

    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, DOsen $dosen)
    {
        $this->validate($request,[
            'nik' => 'required|unique:dosen,nik,' .$dosen->id,
            'nama_dosen' => 'required|min:10',
            'umur' => 'required|numeric',
        ]);
        $dosen->uodate($request->all());
        return redirect(url('data-dosen'));
    }
}
