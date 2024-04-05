@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Employee List</div>
    <div class="card-body">
        @can('create-employee')
            <a href="{{ route('employee.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Employee</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">S#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Marital Status</th>
                    <th scope="col">Sex</th>
                    <th scope="col">Department</th>
                    <th scope="col">Position</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Language</th>
                    <th scope="col">leave_days</th>
                    <th scope="col">Skills</th>
                    <th scope="col">Qualifications</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($employees as $employee)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->marital_status }}</td>
                        <td>{{ $employee->sex }}</td>
                        <td>{{ $employee->department }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>{{ $employee->salary }}</td>
                        <td>{{ $employee->language }}</td>
                        <td>{{ $employee->leave_days }}</td>
                        <td>{{ $employee->skills }}</td>
                        <td>{{ $employee->qualifications }}</td>
                        
                        <td>
                            <form action="{{ route('employee.destroy', $employee->id) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <a href="{{ route('employee.show', $employee->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                @can('edit-employee')
                                    <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                @endcan

                                @can('delete-employee')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this employee?');"><i class="bi bi-trash"></i> Delete</button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="15">
                            <span class="text-danger">
                                <strong>No Employee Found!</strong>
                            </span>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $employees->links('pagination::bootstrap-4') }}

    </div>
</div>
@endsection
