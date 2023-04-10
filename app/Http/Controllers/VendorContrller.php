<?php

namespace App\Http\Controllers;

use App\DataTables\VendorDataTable;
use App\Http\Requests\VendorCreateRequest;
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

    public function edit(){

    }
    public function update(){}

    public function delete(){}
}
