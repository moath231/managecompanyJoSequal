<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequstRules;
use App\Models\company;

class adminCompanyController extends Controller
{
    public function index()
    {
        return view('admin.company.index', [
            'company' => company::latest()->paginate(5),
        ]);
    }

    public function create()
    {
        return view('admin.company.createCompany');
    }

    public function store(CompanyRequstRules $request)
    {
        $validatedData = $request;
        if ($request->logo) {
            $path = $request->logo->store('app/logos', 'public');
            $validatedData['logo'] = $path;
        }

        company::create($validatedData);

        return redirect('/adminCompany')->with('success', 'Company store successfully!');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $comapny = company::findOrFail($id);
        return view('admin.company.edit', compact('comapny'));
    }

    public function update(CompanyRequstRules $request, $id)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('logo')) {
            $path = $request->logo->store('app/logos', 'public');
            $validatedData['logo'] = $path;
        }

        $company = Company::findOrFail($id);
        $company->update($validatedData);

        return redirect('/adminCompany')->with('success', 'Company updated successfully!');
    }

    public function destroy($id)
    {
        $company = company::find($id);

        if (!$company) {
            return redirect('/adminCompany')->with('error', 'Company not found.');
        }

        $company->delete();

        return redirect('/adminCompany')->with('error', 'delete is done.');
    }
}
