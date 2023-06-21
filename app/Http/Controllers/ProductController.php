<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;

class ProductController extends Controller
{

    function show(){
        $data['product'] = Product::all();
        return view('product',$data);
   }

   function add(){
    $data =[
        'action'=> url('product/create'),
        'tombol'=> 'simpan',
        'product'=> (object)[
            'foto'=>'',
            'nama_barang'=>'',
            'harga'=>'',
            'deskripsi'=>'',
        ]
        ];
        return view('form_product',$data);
   }
    function create(Request $request){
        Product::create([
            'foto'=> $request->file('foto')->store('foto'),
            'nama_barang'=> $request->nama_barang,
            'harga'=> $request->harga,
            'deskripsi'=> $request->deskripsi,
        ]);

        return redirect('product');
    }

    function hapus($id){
        Product::where('id',$id)->delete();
        return redirect('product');
    }
    function edit($id){
        $data['product'] = Product::find($id);
        $data['action'] = url('product/update')."/".$data['product']->id;
        $data['tombol'] = "Update";

        return view('form_product',$data);
    }
    function update(Request $request){
        // $data = Product::where('id',$request->id)->first();
        // if($request->foto == ''){
        //     $foto = $data->foto;
        // }else{
        //     $foto = $request->file('foto')->store('foto');
        // }
        Product::where('id',$request->id)->update([
            // 'foto'=> 'foto',
            'nama_barang'=> $request->nama_barang,
            'harga'=> $request->harga,
            'deskripsi'=>  $request->deskripsi,
        ]);
        return redirect('product');
    }
    //
}

