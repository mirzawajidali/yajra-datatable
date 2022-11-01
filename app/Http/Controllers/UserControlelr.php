<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
// use Yajra\Datatables\Facades\Datatables;
use Yajra\Datatables\DataTables;

class UserControlelr extends Controller
{
    public function users(){
        $user = User::get();
        return Datatables::of($user)
        ->addColumn('action', function ($user) {
            return '<a href="javascript:void(0)" onclick="editData()" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a><a href="javascript:void(0)" onclick="deleteData('.$user->id.')" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i> Delete</a>';
        })->make(true);
    }

    public function users_edit(){

    }
    public function user_delete(Request $request){
        User::where('id',$request->id)->delete();

        return response()->json([
            'status' => 200
        ]);
    }
}
