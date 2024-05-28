@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
                <div style="margin-top:-30px;">
                <p class="breadcrumb-item active" style="padding-left:1010px;">Employee Management</p>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Add Employee Form -->
    
                <div class="card">
                    <div class="card-header">{{ __('Add New Employee') }}</div>

                    <div class="card-body" style="background-color: #f2f2f2;">
                        <form>
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" placeholder="Enter first name">
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" placeholder="Enter last name">
                            </div>

                            <div class="form-group">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" class="form-control" id="middle_name" placeholder="Enter middle name">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Enter address">
                            </div>

                            <div class="form-group">
                                <label for="country">Country</label>
                                <select class="form-control" id="country">
                                    <option value="">Select Country</option>
                                    <!-- Add options for countries -->
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="state">State</label>
                                <select class="form-control" id="state">
                                    <option value="">Select State</option>
                                    <!-- Add options for states -->
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="city">City</label>
                                <select class="form-control" id="city">
                                    <option value="">Select City</option>
                                    <!-- Add options for cities -->
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="zip">ZIP</label>
                                <input type="text" class="form-control" id="zip" placeholder="Enter ZIP">
                            </div>

                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" class="form-control" id="age" placeholder="Enter age">
                            </div>

                            <div class="form-group">
                                <label for="birthday">Birthday</label>
                                <input type="date" class="form-control" id="birthday">
                            </div>

                            <div class="form-group">
                                <label for="hired_date">Hired Date</label>
                                <input type="date" class="form-control" id="hired_date">
                            </div>

                            <div class="form-group">
                                <label for="department">Department</label>
                                <select class="form-control" id="department">
                                    <option value="general_management">General Management</option>
                                    <!-- Add other department options -->
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- /.content -->
@endsection