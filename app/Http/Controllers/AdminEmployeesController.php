<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequstRules;
use App\Models\employee;

class AdminEmployeesController extends Controller
{
    public function index()
    {
        return view('admin.employee.index', [
            'emp' => employee::latest()->paginate(5),
        ]);
    }

    public function create()
    {
        return view('admin.employee.create');
    }

    public function store(EmployeeRequstRules $request)
{
    $validatedData = $request->validated();

    Employee::create([
        'Fname' => $validatedData['Fname'],
        'Lname' => $validatedData['Lname'],
        'company_id' => $validatedData['company_id'],
        'email' => $validatedData['email'],
        'phone' => $validatedData['phone'],
    ]);

    return redirect('/adminEmployee')->with('success', 'Employee stored successfully!');
}


    public function show($id)
    {
    }

    public function edit($id)
    {
        $e = employee::find($id);
        return view('admin.employee.edit',compact('e'));
    }

    public function update(EmployeeRequstRules $request, $id)
    {
        $employee = employee::find($id);
        $employee->update($request);
        return redirect('/adminEmployee')->with('success', 'employee updated successfully!');
    }

    public function destroy($id)
    {
        $e = employee::find($id);

        if (!$e) {
            return redirect('/adminEmployee')->with('error', 'employee not found.');
        }

        $e->delete();

        return redirect('/adminEmployee')->with('error', 'delete is done.');
    }
}
