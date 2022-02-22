<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
       $customer= Customer::all();
       return view('customer.index',compact('customer'));
    }


    public function create()
    {
        return view('customer.create');
    }


    public function store(Request $request)
    {
       $request -> validate([
           'name'=>'required',
           'phone'=>'required',
       ]);
       Customer:: create($request->all());
       return redirect()->route('customer.index')->withsuccess("created successfully");


    }


    public function show($id)
    {
    //    $edit= Customer::find($id);
    //    return view('customer.edit',compact('edit'));
    }


    public function edit($id)
    {
        $edit= Customer::find($id);
       return view('customer.edit',compact('edit'));
    }


    public function update(Request $request, $id)
    {
        // $request -> validate([
        //     'name'=>'required',
        //     'phone'=>'required|unique:customers',
        // ]);
        // Customer:: whereId($id)->update($request->all());
        // return redirect(route('customer.index'));


        $update=Customer::find($id);
        $update->name=$request->name;
        $update->phone=$request->phone;
        $update->save();


        return redirect()->route('customer.index')->withsuccess("updated successfully");

    }


    public function destroy($id)
    {
        Customer:: destroy($id);

        return redirect()->route('customer.index')->withsuccess("destroy successfully");

    }
}
