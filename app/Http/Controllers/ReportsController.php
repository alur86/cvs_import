<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ReportsImport;
use App\Models\Report;
use Auth;
use DataTables;

class ReportsController extends Controller
{


    public function __construct(){

    $this->middleware('auth');

    }


  public function index() {

  return view('reports.index');

  }



   public function getReports(Request $request)
    {
        if ($request->ajax()) {

            $data = Report::orderBy('profile_id')->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }





    public function import() {
 

    return view('reports.import');

   }



    public function import_csv() {

    Excel::import(new ReportsImport,request()->file('file'));
 
    return redirect()->back()->with('success', 'Data saved successfully!');

    }


}
