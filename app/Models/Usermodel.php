<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Usermodel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; //mendifinisikan table yang digunakan oleh model
    protected $primaryKey = 'user_id'; //Mendifiniskan primary key dari table yang digunakan

    protected $fillable = ['level_id', 'username', 'nama', 'password'];    

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');    }
}
