<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Employee;
use App\Models\EmployeePoli;
use App\Models\Poli;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function actionUpdateSetSchedule($employee_poli_id,$schedule_id,Request $request){
//        $cek = Schedule::where('employee_poli_id',$employee_poli_id)->where('day_id',$request->day_id)->count();
//
//        if ($cek > 0){
//            return redirect()->back();
//
//        }
        $data = Schedule::find($schedule_id);

        $data->day_id = $request->day_id;
        $data->employee_poli_id = $employee_poli_id;
        $data->first = $request->first;
        $data->last = $request->last;

        $data->save();

        return redirect()->route('SetSchedule',$employee_poli_id);

    }
    public function editSetSchedule($id,$schedule_id){

        $data = Schedule::find($schedule_id);
        $days = Day::all();

        $schedules = Schedule::with(['day'])->where('employee_poli_id',$id)->get();
//        dd($schedules);
        view()->share([
            'id' => $id,
            'days' => $days,
            'data' => $data,
            'schedules' => $schedules,
            'schedule_id' => $schedule_id
        ]);
        return view('content.setSchedule');

    }

    public function destroySetSchedule ($id){
        $data = Schedule::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function destroySetEmployee($id){
        $data = EmployeePoli::find($id);
        $data->delete();

        return redirect()->back();
    }
    public function actionSet(Request $request,$id){
//        dd('dqw');

        $cek = EmployeePoli::wherePoliId($id)->whereEmployeeId($request->employee_id)->count();

        if ($cek >0){
            return redirect()->back();

        }
        try {
            $data = new EmployeePoli();
            $data->poli_id	= $id;
            $data->employee_id	= $request->employee_id;
            $data->save();

            return redirect()->back();
        }catch (\Exception  $e){
            dd($e);
        }

    }
    public function actionSetSchedule($id,Request $request){
//        dd($request);

            $cek = Schedule::where('employee_poli_id',$id)->where('day_id',$request->day_id)->count();

        if ($cek > 0){
            return redirect()->back();

        }

        $data = new Schedule();
        $data->day_id = $request->day_id;
        $data->employee_poli_id = $id;
        $data->first = $request->first;
        $data->last = $request->last;

        $data->save();

        return redirect()->back();
    }

    public function SetSchedule ($id){
        $data = null;
        $days = Day::all();

        $schedules = Schedule::with(['day'])->where('employee_poli_id',$id)->get();
//        dd($schedules);
        view()->share([
            'id' => $id,
            'days' => $days,
            'data' => $data,
            'schedules' => $schedules
        ]);
        return view('content.setSchedule');

    }
    public function setEmployee($id){
        $employees = Employee::all();

//        $polis = Poli::all();

        $data = EmployeePoli::with(['employees'])->where('poli_id',$id)->get();

//        dd($data);
        view()->share([
           'employees' => $employees,
            'data' => $data,
            'id' => $id
        ]);
        return view('content.set');

    }
    public function index(){

        return view('content.poli.index');

    }
    public function print(){
        $data = Poli::with(['employeePoli'])->get();
//        dd($data);
        $days = Day::orderBy('id','ASC')->get();



//        dd($data);
        view()->share([
           'data' => $data,
            'days' => $days
        ]);
        return view('content.print');
    }
}
