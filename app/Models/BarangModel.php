<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Html\Editor\Fields\BelongsTo;

class BarangModel extends Model
{
    protected $table = 'm_barang';
    protected $primaryKey = 'barang_id';

    protected $fillable = ['barang_id', 'kategori_id', 'kategori_kode', 'kategori_nama', 'barang_nama', 'harga_beli', 'harga_jual', 'created_at', 'update_at'];

    public function kategori(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }
}