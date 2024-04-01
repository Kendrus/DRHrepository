@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Employee Information
                </div>
                <div class="float-end">
                    <a href="{{ route('employee.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="first_name" class="col-md-4 col-form-label text-md-end text-start"><strong>First Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->first_name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="last_name" class="col-md-4 col-form-label text-md-end text-start"><strong>Last Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->last_name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->email }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="phone" class="col-md-4 col-form-label text-md-end text-start"><strong>Phone:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->phone }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="marital_status" class="col-md-4 col-form-label text-md-end text-start"><strong>Marital Status:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->marital_status }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="sex" class="col-md-4 col-form-label text-md-end text-start"><strong>Sex:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->sex }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="department" class="col-md-4 col-form-label text-md-end text-start"><strong>Department:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->department }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="position" class="col-md-4 col-form-label text-md-end text-start"><strong>Position:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->position }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="salary" class="col-md-4 col-form-label text-md-end text-start"><strong>Salary:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->salary }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="language" class="col-md-4 col-form-label text-md-end text-start"><strong>Language:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->language }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="language" class="col-md-4 col-form-label text-md-end text-start"><strong>leave_days:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->leave_days}}
                        </div>
                    </div>

                    <div class="row">
                        <label for="skills" class="col-md-4 col-form-label text-md-end text-start"><strong>Skills:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->skills }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="qualifications" class="col-md-4 col-form-label text-md-end text-start"><strong>Qualifications:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->qualifications }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection
