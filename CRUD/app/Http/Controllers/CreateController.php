<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function actionCreate(){
        dump(request());
    }

    public function myFunc(){
        $tab = DB::table('my_table')->get();
        // $tab = DB::table('my_table')->where('id', '>', 1)->get();більше 1
        // $tab = DB::table('my_table')->where('id', '<', 3)->get();менше 3
        // $tab = DB::table('my_table')->where('id', '<>', 1)->get();не дорівнює 1
        // $tab = DB::table('my_table')->count();кількість записів
        
        dd($tab);
    }
}