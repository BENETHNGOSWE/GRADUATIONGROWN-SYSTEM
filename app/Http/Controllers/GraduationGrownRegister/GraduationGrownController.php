<?php

namespace App\Http\Controllers\GraduationGrownRegister;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GraduationGrown;
use Illuminate\Support\Facades\DB;

class GraduationGrownController extends Controller
{
    protected $data = [];
    public function __construct(){
        $this->data['grown'] = GraduationGrown::all();
    }

    public function index(){
        return view('frotend.gownlist');
    }

    public function create(){
        return view('frontend.Gowns.register');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'Grown_color' => 'required|string',
    //         'Grown_Size' => 'required|string',
    //         'Grown_price' => 'required',
    //         // 'Grown_image' => 'nullable|image',
    //     ]);
    //     $grown = new GraduationGrown();
    //     $grown->Grown_color = $request->Grown_color;
    //     $grown->Grown_Size = $request->Grown_Size;
    //     $grown->Grown_price = $request->Grown_price;

    //     // if ($request->hasFile('Grown_image')) {
    //     //     $imagePath = $request->file('Grown_image')->store('Grown_image');
    //     //     $grown->Grown_image = $imagePath;
    //     // }

    //     // dd($grown);
    //     $grown->save();
    //     dd($grown);

    //     return redirect()->back()->with('success', 'Grown created successfully.');
    // }




     public function validate_grown(Request $request){
        return $request->validate([
            'Grown_color' => 'required|string',
            'Grown_Size' => 'required|string',
            'Grown_price' => 'required',
            
        ]);
    }

    public function store(Request $request)
    {
      $validate = $this->validate_grown($request);

      try {
         DB::beginTransaction();
         $grown = new GraduationGrown();
         $grown->fill($validate);
         $grown->save();
         dd($grown);
         DB::commit();
            
        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error($th->getMessage(). ''. $th->getTraceAsString());
            return back()->with('error', $th->getMessage());
        }
        return to_route('homepage');
       
    }
}
