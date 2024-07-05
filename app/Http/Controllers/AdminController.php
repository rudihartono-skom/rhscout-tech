<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = Admin::all();
        return view('admins.admin', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_admin' => 'required',
                'jk_admin' => 'required',
                'email_admin' => 'required|unique:admins',
                'password_admin' => 'required|min:6',
                'nohp_admin' => 'required|numeric',
                'jabatan_admin' => 'required',
                'alamat_admin' => 'required',
                'foto_admin' => 'required|mimes:jpg,jpeg,png,gif,jfif|image|max:2048',
            ],
            [
                'nama_admin.required' => 'wajib diisi',
                'jk_admin.required' => 'wajib diisi',
                'email_admin.required' => 'wajib diisi',
                'email_admin.unique' => 'email sudah terdaftar',
                'password_admin.required' => 'wajib diisi',
                'password_admin.min' => 'password minimum 6 karekter',
                'nohp_admin.required' => 'wajib diisi',
                'nohp_admin.numeric' => 'no hp hanya bisa diisi dengan angka',
                'jabatan_admin.required' => 'wajib diisi',
                'alamat_admin.required' => 'wajib diisi',
                'foto_admin.required' => 'wajib diisi',
                'foto_admin.mimes' => 'extension hanya boleh jpg,jpeg,png,gif,jfif',
                'foto_admin.max' => 'maximal 2 Megabyte',
            ]
        );

        $path = $request->file('foto_admin')->store('public/uploads');

        $admin = new Admin();
        $admin->nama_admin = $request['nama_admin'];
        $admin->jk_admin = $request['jk_admin'];
        $admin->email_admin = $request['email_admin'];
        $admin->password_admin = Hash::make($request->password_admin);
        $admin->nohp_admin = $request['nohp_admin'];
        $admin->jabatan_admin = $request['jabatan_admin'];
        $admin->alamat_admin = $request['alamat_admin'];
        $admin->foto_admin = basename($path);
        $admin->save();

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = Admin::find($id);
        return view('admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama_admin' => 'required',
                'jk_admin' => 'required',
                'email_admin' => 'required',
                'nohp_admin' => 'required|numeric',
                'jabatan_admin' => 'required',
                'alamat_admin' => 'required',
                'foto_admin' => 'mimes:jpg,jpeg,png,gif,jfif|image|max:2048',
            ],
            [
                'nama_admin.required' => 'wajib diisi',
                'jk_admin.required' => 'wajib diisi',
                'email_admin.required' => 'wajib diisi',
                'nohp_admin.required' => 'wajib diisi',
                'nohp_admin.numeric' => 'no hp hanya bisa diisi dengan angka',
                'jabatan_admin.required' => 'wajib diisi',
                'alamat_admin.required' => 'wajib diisi',
                'foto_admin.mimes' => 'extension hanya boleh jpg,jpeg,png,gif,jfif',
                'foto_admin.max' => 'maximal 2 Megabyte',
            ]
        );

        if ($request->foto_admin) {
            if ($request->foto_lama) {
                Storage::delete($request->foto_lama);
            }
            $path = $request->file('foto_admin')->store('public/uploads');
        } else {
            $path = $request->foto_lama;
        }

        $admin = Admin::find($id);
        $admin->nama_admin = $request['nama_admin'];
        $admin->jk_admin = $request['jk_admin'];
        $admin->email_admin = $request['email_admin'];
        $admin->nohp_admin = $request['nohp_admin'];
        $admin->jabatan_admin = $request['jabatan_admin'];
        $admin->alamat_admin = $request['alamat_admin'];
        $admin->foto_admin = basename($path);
        $admin->save();

        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
