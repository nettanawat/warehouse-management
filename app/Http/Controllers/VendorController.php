<?php

namespace App\Http\Controllers;


use App\Src\entity\Supplier;
use App\Src\entity\SupplierAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor = Supplier::all();
        return view('vendor.vendorList', ['vendors' => $vendor]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('vendor.addVendor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|between:3,50',
                'email' => 'required|email|between:4,50|unique:suppliers',
                'phone' => 'between:8,15',
                'cell_phone' => 'between:8,15',
                'line1' => 'required|max:100',
                'city' => 'required|max:45',
                'province' => 'required|max:45',
                'zip_code' => 'required|digits:5',
            ]
//            ,
//            [
//                'name.required' => 'กรุณาใส่ชื่อผู้ขาย',
//                'name.between' => 'ชื่อผู้ขายต้องอยู่ในช่วง 3 ถึง 50 ตัวอักษร',
//                'email.required' => 'กรุณาใส่อีเมล',
//                'email.between' => 'อีเมลต้องอยู่ในช่วง 3 ถึง 50 ตัวอักษร',
//                'email.email' => 'รูปแบบอีเมลไม่ถูกต้อง',
//                'email.unique' => 'มีเมลนี้ได้ถูกใช้งานแล้ว',
//                'phone.between' => 'โทรศัพท์ต้องอยู่ในช่วง 8 ถึง 15 ตัวอักษร้องอยู่ในช่วง',
//                'cell_phone.between' => 'มือถือต้องอยู่ในช่วง 8 ถึง 15 ตัวอักษร้องอยู่ในช่วง',
//                'line1.required' => 'กรุณาใส่ทีอยู่',
//                'line1.max' => 'ที่อยู่สามารถใส่ได้มากสุด 100 ตัวอักษร',
//                'city.required' => 'กรุณาใส่อำเภอ',
//                'city.max' => 'อำเภอสามารถใส่ได้มากสุด 100 ตัวอักษร',
//                'province.required' => 'กรุณาเลือกจังหวัด',
//                'post_code.required' => 'กรุณาใส่รหัสไปรษณี',
//                'post_code.digits' => 'รหัสไปรษณีต้องเป็นตัวเลขเท่านั้น',
//            ]
        );
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        } else {

            $vendor = new Supplier();
            $vendor->name = $request->get('name');
            $vendor->email = $request->get('email');
            $vendor->phone = $request->get('phone');
            $vendor->cell_phone = $request->get('cell_phone');
            $vendor->save();

            $vendorAddress = new SupplierAddress();
            $vendorAddress->line1 = $request->get('line1');
            $vendorAddress->city = $request->get('city');
            $vendorAddress->province = $request->get('province');
            $vendorAddress->zip_code = $request->get('zip_code');
            $vendorAddress->suppliers_id = $vendor->id;
            $vendorAddress->address_types_id = 3;
            $vendorAddress->save();
            Session::flash('flash_message', 'เพิ่มทะเบียนผู้ขายเสร็จสมบูรณ์!');
            return redirect('/vendor');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendor = Supplier::findOrNew($id);
        if($vendor->name == null){
            return redirect('/pagenotfound');
        }

        return view('vendor.vendorDetail', ['vendor' => Supplier::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
