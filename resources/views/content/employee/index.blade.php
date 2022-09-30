@extends('app')

@section('content')
    <br>
    <h5>Employee</h5>
    <br>
    <a href="{{route('employee.create')}}" class="btn btn-success">Create</a>
    <br>
    <br>
    <table class="table table-striped-columns">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $a)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$a->name}}</td>
                <td>
                    <a href="{{route('employee.edit',$a->id)}}" class="btn btn-info">Edit</a>
                    <a href="{{route('employeeDestroy',$a->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $data->links('vendor.pagination.bootstrap-5') }}
@endsection
