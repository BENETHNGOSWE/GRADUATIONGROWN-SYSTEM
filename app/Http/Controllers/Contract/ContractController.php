<?php

namespace App\Http\Controllers\Contract;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GraduationgownContract;
use Illuminate\Support\Facades\DB;

class ContractController extends Controller
{
    protected $data = [];
    public function __construct()
    {
        $this->data['contracts'] = GraduationgownContract::all();
        $this->data['contract'] = GraduationgownContract::first();

        
    }

    public function index()
    {
        return view('frontend.contract.list', $this->data);
    }

    public function create()
    {
        return view('frontend.contract.create', $this->data);
    }

    public function validate_contract(Request $request)
    {
        return $request->validate([
            'heading' => 'required',
            'contract' => 'required',
        ]);
    }

    public function store(Request $request)
    {
        $validate = $this->validate_contract($request);

        // Handle the file upload
        if ($request->hasFile('contract')) {
            $file = $request->file('contract');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('contracts', $filename, 'public');
            $validate['contract'] = '/storage/' . $filePath;
        }

        try {
            DB::beginTransaction();
            $contracts = new GraduationgownContract();
            $contracts->fill($validate);
            $contracts->save();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error($th->getMessage() . '' . $th->getTraceAsString());
            return back()->with('error', $th->getMessage());
        }
        return to_route('/');
    }


    public function show(GraduationgownContract $contract)
    {
        return view('frontend.contract.show', compact('contract'));
    }

    public function edit(GraduationgownContract $contract){
        $this->data['contracts'] = $contract;
        return view('frontend.contract.edit', $this->data);
    }

    public function update(Request $request, GraduationgownContract $contract){
        $validated = $this->validate_contract($request);

        try {
            DB::beginTransaction();
            $contract->getFillable();
            $contract->fill($validated);
            $contract->save();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            return to_route('/');
        }
    }


}
