
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <table class="table table-striped-columns">
        <thead>
        <tr style="background-color: #073763;color: white">
            <td colspan="9" >
                <center>
                Data Daftar Dokter RS Trushmedika Surabaya
                </center>
            </td>
        </tr>
        <tr style="background-color: #0B5394" >
            <th scope="col" class="text-white">No</th>
            <th scope="col" class="text-white">Klinik</th>
            @foreach($days as $day)
                <th scope="col" class="text-white">{{$day->day}}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($data as $a)
            <?php
            $tmpDay = [];
            $s =1;

            foreach ($days as $day){
                $tmpDay[$s++] = '';
            }
            $tmp = [];
            $i = 0;
            ?>

            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$a->name}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @foreach($a->employeePoli as $e)
                <?php
                    foreach ($e->schedules as $schedule){
                        $tmpDay[$schedule->day_id] = $schedule;
                    }
                ?>
                <tr>
                    <td></td>
                    <td>{{$e->employees->name}}</td>

                    @foreach($tmpDay as $day)
                        @if($day != '')

                            <td>{{$day->first}} - {{$day->last}}</td>
                        @else

                            <td></td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
</div>
<!-- Bootstrap core JS-->
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>--}}
<script>
    window.addEventListener("load", window.print());

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>

