@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Employee
                </div>
                <div class="float-end">
                    <a href="{{ route('employee.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('employee.update', $employee->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="first_name" class="col-md-4 col-form-label text-md-end text-start">First Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ $employee->first_name }}">
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="last_name" class="col-md-4 col-form-label text-md-end text-start">Last Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ $employee->last_name }}">
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $employee->email }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="phone" class="col-md-4 col-form-label text-md-end text-start">Phone</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $employee->phone }}">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="marital_status" class="col-md-4 col-form-label text-md-end text-start">Marital Status</label>
                        <div class="col-md-6">
                            <select class="form-select @error('marital_status') is-invalid @enderror" id="marital_status" name="marital_status">
                                <option value="" disabled selected>Select Marital Status</option>
                                <option value="Single" {{ $employee->marital_status == 'Single' ? 'selected' : '' }}>Single</option>
                                <option value="Married" {{ $employee->marital_status == 'Married' ? 'selected' : '' }}>Married</option>
                                <option value="Divorced" {{ $employee->marital_status == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                <option value="Widowed" {{ $employee->marital_status == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                            </select>
                            @error('marital_status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="sex" class="col-md-4 col-form-label text-md-end text-start">Sex</label>
                        <div class="col-md-6">
                            <select class="form-select @error('sex') is-invalid @enderror" id="sex" name="sex">
                                <option value="" disabled selected>Select Sex</option>
                                <option value="Male" {{ $employee->sex == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ $employee->sex == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ $employee->sex == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('sex')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="department" class="col-md-4 col-form-label text-md-end text-start">Department</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('department') is-invalid @enderror" id="department" name="department" value="{{ $employee->department }}">
                            @error('department')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="position" class="col-md-4 col-form-label text-md-end text-start">Position</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position" value="{{ $employee->position }}">
                            @error('position')
                                <span class="text-danger">{{ $message }}</span>
