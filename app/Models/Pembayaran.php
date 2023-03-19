<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = "pembayarans";
    // protected $fillable = ['id_petugas', 'nisn', 'tgl_bayar', 'bulan_dibayar', 'tahun_dibayar', 'id_spp', 'jumlah_bayar'];
    protected $guarded = ['id'];

    public function tunggakan(): BelongsTo
    {
        return $this->belongsTo(Tunggakan::class);
    }
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }
}
