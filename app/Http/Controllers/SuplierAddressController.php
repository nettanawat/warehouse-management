<?php

namespace App\Http\Controllers;

use App\Src\entity\AddressTypes;
use App\Src\entity\Supplier;
use App\Src\entity\SupplierAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class SuplierAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinceList = array("กระบี่", "กรุงเทพมหานคร", "กาญจนบุรี", "กาฬสินธุ์", "กำแพงเพชร", "ขอนแก่น", "จันทบุรี", "ฉะเชิงเทรา", "ชลบุรี", "ชัยนาท", "ชัยภูมิ", "ชุมพร", "เชียงราย", "เชียงใหม่", "ตรัง", "ตราด", "ตาก", "นครนายก", "นครปฐม", "นครพนม", "นครราชสีมา", "นครศรีธรรมราช", "นครสวรรค์", "นนทบุรี", "นราธิวาส", "น่าน", "บุรีรัมย์", "ปทุมธานี", "ประจวบคีรีขันธ์", "ปราจีนบุรี", "ปัตตานี", "พะเยา", "พังงา", "พัทลุง", "พิจิตร", "พิษณุโลก", "เพชรบุรี", "เพชรบูรณ์", "แพร่", "ภูเก็ต", "มหาสารคาม", "มุกดาหาร", "แม่ฮ่องสอน", "ยโสธร", "ยะลา", "ร้อยเอ็ด", "ระนอง", "ระยอง", "ราชบุรี", "ลพบุรี", "ลำปาง", "ลำพูน", "เลย", "ศรีสะเกษ", "สกลนคร", "สงขลา", "สตูล", "สมุทรปราการ", "สมุทรสงคราม", "สมุทรสาคร", "สระแก้ว", "สระบุรี", "สิงห์บุรี", "สุโขทัย", "สุพรรณบุรี", "สุราษฎร์ธานี", "สุรินทร์", "หนองคาย", "หนองบัวลำภู", "อยุธยา", "อ่างทอง", "อำนาจเจริญ", "อุดรธานี", "อุตรดิตถ์", "อุทัยธานี", "อุบลราชธานี");
        return view('vendor.addAddress',
            [
                'addressTypes' => AddressTypes::all(),
                'provinces' => $provinceList,
                'vendors' => Supplier::all()
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate
        $validator = Validator::make(
            $request->all(),
            [
                'address_type' => 'required',
                'vendor_id' => 'required',
                'line1' => 'required|max:100',
                'city' => 'required|max:45',
                'province' => 'required|max:45',
                'zip_code' => 'required|digits:5',
            ]);

        $existVendorAddress = DB::table('supplier_addresses')->where('suppliers_id',$request->get('vendor_id'))
            ->where('address_types_id',$request->get('address_type'))->first();

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        } elseif ($existVendorAddress != null){
//            return redirect('/');
            return back()->withErrors('ผู้ขายรายนี้มีที่อยู่ประเภทนี้อยู่แล้ว')->withInput();// withErrors($validator)->withInput();
        } else {

            $vendorAddress = new SupplierAddress();
            $vendorAddress->line1 = $request->get('line1');
            $vendorAddress->city = $request->get('city');
            $vendorAddress->province = $request->get('province');
            $vendorAddress->zip_code = $request->get('zip_code');
            $vendorAddress->suppliers_id = $request->get('vendor_id');
            $vendorAddress->address_types_id = $request->get('address_type');
            $vendorAddress->save();
            Session::flash('flash_message', 'เพิ่มที่อยู่ผู้ขายเสร็จสมบูรณ์!');
            return redirect('/vendor');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
