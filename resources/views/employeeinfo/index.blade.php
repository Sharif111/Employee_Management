@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
                <h3>Employee Information</h3>
        </div>
        <div class="col-md-2">
            <form action="{{ route('employeeinfo.search') }}" method="get">
                @csrf
                <div class="input-group ">
                    <input type="text" name="search" class="form-control">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">Search</button>   
                    </span>                       
                </div>
            </form>
        </div>
        <div class="col-md-2 text-right">
            <a href="{{ route('employeeinfo.create') }}" class="btn btn-primary">Add
            </a>
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
                        <a href="{{ route('employeeinfo.create1') }}">
                        <button type="button" class="btn btn-success">Select</button>
                        </a>
                        
                </td>
            </tr>
        @endforeach
    </table>

    {!! $employeeinfos->links() !!}


@endsection

