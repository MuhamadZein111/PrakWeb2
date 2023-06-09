<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function hasil(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'lokasi' => $request->input('lokasi'),
            'gender' => $request->input('gender'),
            'skill' => $request->input('skill'),
        ];
        return view('form', compact('data'));
    }
}
