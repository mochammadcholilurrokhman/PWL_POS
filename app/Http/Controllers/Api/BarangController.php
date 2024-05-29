<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BarangModel;

class BarangController extends Controller
{
     public function index()
    {
        return BarangModel::all();
    }

      public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kategori_id' => 'required|integer|exists:m_kategori,kategori_id',
            'barang_kode' => 'required|string|unique:m_barang,barang_kode',
            'barang_nama' => 'required|string',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $barang = new BarangModel;
        $barang->kategori_id = $validatedData['kategori_id'];
        $barang->barang_kode = $validatedData['barang_kode'];
        $barang->barang_nama = $validatedData['barang_nama'];
        $barang->harga_beli = $validatedData['harga_beli'];
        $barang->harga_jual = $validatedData['harga_jual'];

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->getClientOriginalExtension();
            $filePath = 'barang_images/' . $fileName; // Define file path

            if ($request->image->move($filePath)) { // Move uploaded file
                $barang->image = $fileName;
            }
        }

        $barang->save();

        return response()->json($barang, 201);
    }

    public function show(BarangModel $barang)
    {
        return $barang;
    }

    public function update(Request $request, BarangModel $barang)
    {
        $barang->update($request->all());
        return response()->json($barang, 200);
    }

    public function destroy(BarangModel $barang)
    {
        $barang->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Terhapus',
        ]);
    }
}
