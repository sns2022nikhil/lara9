<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    public function show(){
        return view('layout.admin.user');
    }
    public function store(Request $b){
        $file =$b->file('image');
        $filename = 'image'. time().'.'.$b->image->extension();
        $file->move("upload/",$filename);
        $data=new Employee();
        $data->name=$b->name;
        $data->email=$b->email;
        $data->image=$filename;
        $data->save();
        return redirect()->back();

    }
    public function showdata(){
        // $id=Auth::user()->id;
        // $data=Employee::where('id','1')->get();

        $data = Employee::all();
       return view('layout.admin.display',compact('data'));
    }
    public function viewdata($id){
        $data = Employee::find($id);
       return view('layout.admin.view',compact('data'));
    }
    public function update(Request $a){

        $file =$a->file('image');
        $filename = 'image'. time().'.'.$a->image->extension();
        $file->move("upload/",$filename);
        $data = Employee::find($a->id);

        $data->name=$a->name;
        $data->email=$a->email;
        $data->image=$filename;
       $data->save();
       return redirect()->back();
    }
    public function editshow($id){
        $data= Employee::find($id);
        return view('layout.admin.edit',compact('data'));
    }
    public function erase($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->back();
    }
}
