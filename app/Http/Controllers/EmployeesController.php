<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;
class EmployeesController extends Controller
{
    
    public function index(){
        $employees = employees::all();
       // return view('employ.index');
        
        // Pass employees data to the view
        return view('employees.index', compact('employees'));
    }

    public function store(Request $request)
    {
        // Validate the input
        $this->validateInput($request);

        // Extract necessary input
        $keys = ['first_name', 'last_name', 'dob', 'phone'];
        $input = $this->createQueryInput($keys, $request);

        // Save the data to the database
        employees::create($input);

        // Redirect to the intended route
        return redirect()->route('home');
    }
    public function edit($id)
    {
        // Find the employee by ID
        $employee = employees::findOrFail($id);

        // Return the edit view with the employee data
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        // Validate the input
        $this->validateInput($request);

        // Find the employee by ID
        $employee = employees::findOrFail($id);

        // Extract necessary input
        $keys = ['first_name', 'last_name', 'dob', 'phone'];
        $input = $this->createQueryInput($keys, $request);

        // Update the employee in the database
        $employee->update($input);

        // Redirect back to the index page with a success message
        return redirect()->route('home')->with('success', 'Employee updated successfully!');
    }

    public function destroy($id)
    {
        // Find the employee by ID
        $employee = employees::findOrFail($id);

        // Delete the employee
        $employee->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully!');
    }
    // Method to validate the input
    protected function validateInput(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'phone' => 'required|string|max:15',
        ]);
    }

    // Method to filter and sanitize the input
    protected function createQueryInput(array $keys, Request $request)
    {
        return $request->only($keys);
    }
}