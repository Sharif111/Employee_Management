@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
                <h1>Employee Information</h1>
        </div>
     </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            
            <th>Name</th>
            <th>Address</th>
            <th>Phone No</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employeeinfos as $employee)
            <tr id="eid{{$employee->id}}">
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->phone }}</td>
                <td>{{ $employee->email }}</td>
                <td>
                        
                        <button type="button" class="btn btn-success">Select</button>
                        
                </td>
            </tr>
        @endforeach
    </table>

    {!! $employeeinfos->links() !!}


@endsection


