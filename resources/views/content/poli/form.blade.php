@extends('app')

@section('content')
    <br>
    <h5>Form Poli</h5>
    <br>
{{--    <a href="" class="btn btn-success">Create</a>--}}
    <div class="container">


        <form action="{{($data != null) ? route('poli.update',$data->id) : route('poli.store')}}" method="post">
            @csrf
            @if($data !=null)
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name Poli</label>
                <input type="text" class="form-control" name="name" value="{{($data != null) ? $data->name : old('name')}}">
            </div>

            <button type="submit" class="btn btn-success">Save</button>

        </form>
    </div>
@endsection
