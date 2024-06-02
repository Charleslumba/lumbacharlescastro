@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">Edit Employee</h3>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-area">
                    <form method="POST" action="{{ route('employees.update', $employee->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-6">
                                <label>Employee First Name</label>
                                <input type="text" class="form-control" name="first_name" value="{{ $employee->first_name }}" required>
                            </div>
                            <div class="col-md-6">
                                <label>Employee Last Name</label>
                                <input type="text" class="form-control" name="last_name" value="{{ $employee->last_name }}" required>
                            </div>
                            <div class="col-md-6">
                                <label>Employee DOB</label>
                                <input type="date" class="form-control" name="dob" value="{{ $employee->dob }}" required>
                            </div>
                            <div class="col-md-6">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{ $employee->phone }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="submit" class="btn btn-secondary bg-red" value="Update">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .form-area {
            padding: 20px;
            margin-top: 20px;
            background-color: #b3e5fc;
        }
        .bi-trash-fill {
            color: red;
            font-size: 18px;
        }
        .bi-pencil {
            color: green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush