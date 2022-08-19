<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remarks;
use Illuminate\Support\Facades\Auth;


class RemarkController extends Controller
{

    public function index()
    {
    $data['remarks'] = Remarks::orderBy('id','desc')->paginate(20);
    $user['user'] = Auth::user();
    return view('remarks.index', $data, $user);
    }

    public function create()
    {
    $user['user'] = Auth::user();
    return view('remarks.create',$user);
    }

    public function store(Request $request)
    {
    $request->validate([
    'comment' => 'required',
    ]);

    $remark = new Remarks;
    $remark->comment = $request->comment;
    $remark->created_by = Auth::user()->name;
    
    $remark->save();
    return redirect()->route('dashboard')
    ->with('success','Remark has been created successfully.');
    }

    public function show( $remark)
    {
    return view('remarks.show',compact('remarks'));
    } 
    
}
