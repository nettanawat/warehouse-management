<?php

namespace App\Http\Controllers;


use App\Src\entity\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;

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
        $provinceList = array("กระบี่", "กรุงเทพมหานคร", "กาญจนบุรี", "กาฬสินธุ์", "กำแพงเพชร", "ขอนแก่น", "จันทบุรี", "ฉะเชิงเทรา", "ชลบุรี", "ชัยนาท", "ชัยภูมิ", "ชุมพร", "เชียงราย", "เชียงใหม่", "ตรัง", "ตราด", "ตาก", "นครนายก", "นครปฐม", "นครพนม", "นครราชสีมา", "นครศรีธรรมราช", "นครสวรรค์", "นนทบุรี", "นราธิวาส", "น่าน", "บุรีรัมย์", "ปทุมธานี", "ประจวบคีรีขันธ์", "ปราจีนบุรี", "ปัตตานี", "พะเยา", "พังงา", "พัทลุง", "พิจิตร", "พิษณุโลก", "เพชรบุรี", "เพชรบูรณ์", "แพร่", "ภูเก็ต", "มหาสารคาม", "มุกดาหาร", "แม่ฮ่องสอน", "ยโสธร", "ยะลา", "ร้อยเอ็ด", "ระนอง", "ระยอง", "ราชบุรี", "ลพบุรี", "ลำปาง", "ลำพูน", "เลย", "ศรีสะเกษ", "สกลนคร", "สงขลา", "สตูล", "สมุทรปราการ", "สมุทรสงคราม", "สมุทรสาคร", "สระแก้ว", "สระบุรี", "สิงห์บุรี", "สุโขทัย", "สุพรรณบุรี", "สุราษฎร์ธานี", "สุรินทร์", "หนองคาย", "หนองบัวลำภู", "อยุธยา", "อ่างทอง", "อำนาจเจริญ", "อุดรธานี", "อุตรดิตถ์", "อุทัยธานี", "อุบลราชธานี");
        return view('vendor.addVendor', ['provinces' => $provinceList]);
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
                'post_code' => 'required|digits:5',
            ],
            [
                'name.required' => 'กรุณาใส่ชื่อผู้ขาย',
                'name.between' => 'ชื่อผู้ขายต้องอยู่ในช่วง 3 ถึง 50 ตัวอักษร',
                'email.required' => 'กรุณาใส่อีเมล',
                'email.between' => 'อีเมลต้องอยู่ในช่วง 3 ถึง 50 ตัวอักษร',
                'email.email' => 'รูปแบบอีเมลไม่ถูกต้อง',
                'email.unique' => 'มีเมลนี้ได้ถูกใช้งานแล้ว',
                'phone.between' => 'โทรศัพท์ต้องอยู่ในช่วง 8 ถึง 15 ตัวอักษร้องอยู่ในช่วง',
                'cell_phone.between' => 'มือถือต้องอยู่ในช่วง 8 ถึง 15 ตัวอักษร้องอยู่ในช่วง',
                'line1.required' => 'กรุณาใส่ทีอยู่',
                'line1.max' => 'ที่อยู่สามารถใส่ได้มากสุด 100 ตัวอักษร',
                'city.required' => 'กรุณาใส่อำเภอ',
                'city.max' => 'อำเภอสามารถใส่ได้มากสุด 100 ตัวอักษร',
                'province.required' => 'กรุณาเลือกจังหวัด',
                'post_code.required' => 'กรุณาใส่รหัสไปรษณี',
                'post_code.digits' => 'รหัสไปรษณีต้องเป็นตัวเลขเท่านั้น',
            ]
        );
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        return redirect('/vendor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
