@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Employee CRUD Operation </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employees.create') }}" title="Create a employee"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
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
            <th>Designation</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employees as $employee)
            <tr id="eid{{$employee->id}}">
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->designation }}</td>
                <td>

                        <a href="{{ route('employees.show', $employee->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('employees.edit', $employee->id) }}" title="edit">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        <a href="javascript:void(0)" onclick="deleteemp({{$employee->id }})" class="btn btn-danger">Delete</a>

                        

               <!--       <button type="submit" title="delete" style="border: none;   background-color:transparent;"id="deleteemployee" data-id="{{ $employee->id}}">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>-->
                   
                    
                </td>
            </tr>
        @endforeach
    </table>

    {!! $employees->links() !!}

    <script type="text/javascript">
        function deleteemp(id){
            if(confirm("Do you really want to delete this record?"))
            {
                $.ajax({
                    url:'/employees/'+id,
                    type: 'DELETE',
                    data: {
                        _token: $("input[name=_token]".val())
                    },
                    success:function(response)
                    {
                        $("#ei"+id).remove();
                    }
                });
            }
        }
   
    </script>

    

@endsection

