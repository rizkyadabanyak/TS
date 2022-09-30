@extends('app')

@section('content')
    <br>
    <h5>Set Poli Employee</h5>
    <br>
    {{--    <a href="" class="btn btn-success">Create</a>--}}
    <div class="container">

        <form action="{{route('actionSet',$id)}}" method="post">
            @csrf
    {{--        @if($data !=null)--}}
    {{--            @method('PUT')--}}
    {{--        @endif--}}
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name Employee</label>
{{--                <input type="text" class="form-control" name="name" value="">--}}
                <select class="form-control" name="employee_id">
                    @foreach($employees as $employee)
                        <option value="{{$employee->id}}">{{$employee->name}}</option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-success">Save</button>

        </form>

        <br>
        <table class="table table-striped-columns">
            <tr>
                <th>name Employee</th>
                <th>Action</th>
            </tr>
            @forelse($data as $a)
            <tr>
                <td>{{$a->employees->name}}</td>
                <td>
                    <a href="{{route('destroySetEmployee',$a->id)}}" class="btn btn-danger">Delete</a>
                    <a href="{{route('SetSchedule',[$a->id])}}" class="btn btn-warning">Set Schedule</a>

                </td>
            </tr>
            @empty
                <tr>
                    <td>Data belum ada</td>
                    <td></td>
                </tr>
            @endforelse
        </table>

    </div>
@endsection
