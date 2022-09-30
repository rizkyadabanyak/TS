@extends('app')

@section('content')
    <br>
    <h5>Form Employee</h5>
    <br>
    {{--    <a href="" class="btn btn-success">Create</a>--}}
    <div class="container">


        <form action="{{($data != null) ? route('employee.update',$data->id) : route('employee.store')}}" method="post">
            @csrf
            @if($data !=null)
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name Employee</label>
                <input type="text" class="form-control" name="name" value="{{($data != null) ? $data->name : old('name')}}">
            </div>

            <button type="submit" class="btn btn-success">Save</button>

        </form>
    </div>
@endsection
