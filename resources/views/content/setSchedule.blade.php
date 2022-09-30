@extends('app')

@section('content')
    <br>
    <h5>Set Poli Employee</h5>
    <br>
    {{--    <a href="" class="btn btn-success">Create</a>--}}
    <div class="container">

        <form action="{{($data!=null) ? route('actionUpdateSetSchedule',[$id,$schedule_id]) :route('actionSetSchedule',$id)}}" method="post">
            @csrf
    {{--        @if($data !=null)--}}
    {{--            @method('PUT')--}}
    {{--        @endif--}}
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Day</label>
                <select class="form-control" name="day_id">
                    @foreach($days as $day)
                        <option value="{{$day->id}}">{{$day->day}}</option>
                    @endforeach
                </select>


            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">waktu mulai</label>
                <input type="time" class="form-control" name="first" value="{{($data != null) ? $data->first : old('first')}}">

            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">waktu akhir</label>
                <input type="time" class="form-control" name="last" value="{{($data != null) ? $data->last : old('last')}}">

            </div>



            <button type="submit" class="btn btn-success">Save</button>

        </form>

        <br>
        <table class="table table-striped-columns">
            <tr>
                <th>name Employee</th>
                <th>Jam Mulai</th>
                <th>Jam Berkhir</th>
                <th>Action</th>
            </tr>
            @foreach($schedules as $a)
            <tr>
                <td>{{$a->day->day}}</td>
                <td>{{$a->first}}</td>
                <td>{{$a->last}}</td>
                <td>
                    <a href="{{route('editSetSchedule',[$id,$a->id])}}" class="btn btn-info">Edit</a>
                    <a href="{{route('destroySetSchedule',$a->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
@endsection
