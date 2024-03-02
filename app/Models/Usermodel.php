<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usermodel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; //mendifinisikan table yang digunakan oleh model
    protected $primarykey = 'user_id'; //Mendifiniskan primary key dari table yang digunakan
}
