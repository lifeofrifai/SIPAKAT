<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Apply;
use App\Http\Controllers\Auth;

class ApplysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form-ajukan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $user_id = Auth::user()->id;
      
        // Apply::create([
        //   'user_id' => $request-> $user_id,
        //   'nama' => $request-> nama,
        //   'pekerjaan' => $request-> pekerjaan,
        //   'kecamatan' => $request-> kecamatan,
        //   'alamat_lengkap' => $request-> alamat_lengkap,
        //   'alasan' => $request-> alasan,
        //   'foto_rumah' => $request-> foto_rumah 
        // ]);

        $request->validate([
            'nama'=>'required',
            'pekerjaan'=>'required',
            'kecamatan'=>'required',
            'alamat_lengkap'=>'required',
            'alasan'=>'required',
            'foto_rumah'=>'required',

        ]);
        Apply::create($request->all());
        return redirect('/home')->with('status', 'Pengajuan Berhasil Dilakukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
