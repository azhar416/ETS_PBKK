<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
 
class FormController extends Controller
{
    public function input()
    {
        // return view('input');
        return view('input', [
            "doctors" => Doctor::latest()->get(),
            "patients" => Patient::latest()->get(),
            "selectedID"
        ]);
    }

    public function indexpatient()
    {
        $patients = Patient::all();
        $selectedRoleP = Patient::first();

        return view('input', ['patients' => $patients]);
    }

    public function indexdoctor()
    {
        $doctors = Doctor::all();
        $selectedRoleD = Doctor::first();

        return view('input', ['doctors' => $doctors]);
    }
 
    public function proses(Request $request)
    {
        $messagesError = [
            'required' => 'Field cannot be empty',
            // 'min' => 'Field harus diisi minimal :min karakter',
            // 'max' => 'Field harus diisi maksimal :max karakter',
        ];

        $this->validate($request,[
           'nama' => 'required|min:5',
           'nrp' => 'required|min:10',
           'usia' => 'required|numeric',
           'departemen' => 'required',
           'ipk' => 'required|numeric|between:2.50,99.99',
           'file' => 'required|mimes:jpeg,jpg,png|max:2048',
        ], $messagesError);
        
        // date('Y-m-d_H:i:s');
        
        $imgname = date('Y-m-d_H-i-s'). '.' .$request->file->extension();
        $request->file->move(public_path('images'), $imgname);

        $request->file = $imgname;

        session()->flash('success', 'SUKSES! DATA BERHASIL DIPROSES!');
 		
        return view('proses',['data' => $request]);
    }
}