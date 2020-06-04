<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function export(Request $request)
    {
        if($request->input('exportexcel') != null)
        {
          return Excel::download(new UsersExport, 'users.xlsx');
        }

        if($request->input('exportcsv') != null)
        {
          return Excel::download(new UsersExport, 'users.csv');
        }

        return redirect()->action('PagesController@index');

    }
}
