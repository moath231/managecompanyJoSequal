<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;

class companyController extends Controller
{
    public function index()
    {
        return view('Companies', [
            'company' => company::latest()->paginate(5),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
