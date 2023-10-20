<?php

namespace App\Http\Controllers;

use App\Exports\ExportInventory;
use App\Models\Inventories_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class Inventories_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inv = Inventories_model::all();
        return view('backend.inventories.inventories', compact('inv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.inventories.insert_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // perintah untuk validasi data
        $validator = Validator::make($request->all(),[
            'code' => 'required',
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        // mengembalikan pesan error
        if($validator -> fails()){
            return back() -> withErrors($validator -> messages());
        }

        $data = [
            'code' => $request -> code,
            'name' => $request -> name,
            'price' => $request -> price,
            'stock' => $request -> stock,
        ] ;


        $inv = Inventories_model::create($data);

        if($inv){
            // jika tidak eror akan menambahkan data ke database
            return Redirect()->to('/inv')->withSuccess('Data berhasil ditambahkan');
        }else{

            // jika gagal akan dipindahkan  ke form lagi
            return back()->withErrors('Data gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventories_model  $inventories_model
     * @return \Illuminate\Http\Response
     */
    // public function show(Inventories_model $inventories_model)
    // {
    //     // dd($inventories_model);
    //     $inv = Inventories_model::all($inventories_model);
    //     return view('backend.inventories.detil', compact('inv'));
    // }

    public function show($id)
    {
        // dd($id);
        $inv = Inventories_model::findOrFail($id);
        return view('backend.inventories.detil', ['inv' => $inv]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventories_model  $inventories_model
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventories_model $inventories_model)
    {
        return view('backend.inventories.edit_form', compact('inventories_model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventories_model  $inventories_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventories_model $inventories_model)
    {
        // validasi data
        $validator = Validator::make($request->all(),[
            
            'id' => 'required',
            'code' => 'required',
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        // menampilkan pesan eror
        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'id' => request()->id,
            'code' => request()->code,
            'name' => request()->name,
            'price' => request()->price,
            'stock' => request()->stock,
        ];

        // jika data tidak eror maka yang ada di database diganti data form
        $inventories_model = $inventories_model->update($data);

        if($inventories_model){

            // jika berhasil update tambahkan ke tampilan index
            return Redirect()->to('/inv')->withSuccess('data berhasil diubah');
        }else{

            // jika gagal update maka akan dikembalikan ke form dengan pesan eror
            return back()->withErrors('data gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventories_model  $inventories_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventories_model $inventories_model)
    {
        $inventories_model = $inventories_model -> delete();

        // dd($product_model->$gambar_product);

            if($inventories_model){
                return back()->withSuccess('Data berhasil dihapus');
            }else{
                return back()->withErrors('Data gagal dihapus');
            }
    }

    function export_excel(){
        return Excel::download(new ExportInventory, "inventory.xlsx");
    }

}
