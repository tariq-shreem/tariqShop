<?php

namespace App\Http\Controllers;

use App\DataTables\VendorDataTable;
use App\Http\Requests\VendorCreateRequest;
use App\Http\Requests\Vendors\VendorUpdateRequest;
use App\Models\Vendor;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VendorContrller extends Controller
{
    public function index(VendorDataTable $dataTable){

        return $dataTable->render('Vendors.index');

    }

    public function create(){

        return view('Vendors.create');

    }

    public function store(VendorCreateRequest $request ){

        Vendor::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        Alert::toast('vendor added', 'success');

        return redirect(route('admin.vendor.create'));

    }

    public function edit($id){

        $vendor = Vendor::find($id);
        return ($vendor) ? view('Vendors.edit',compact('vendor')):back();

    }

    public function update(VendorUpdateRequest $request){

        $vendor = Vendor::findOrFail($request->id);
        $vendor->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone
        ]);
        Alert::toast('vendor updated', 'success');

        return redirect()->route('admin.vendor.index');


    }

    public function delete(Request $request){

       $vendor = Vendor::findOrFail($request->id)->delete();

       if($vendor){

           return response()->json([
               'message'=>"success",
               'id'=>$request->id,
            ],200);
        }
        return response()->json([
            'message'=>"fail",
            'id'=>$request->id,
        ],404);
    }

}
