<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    use Uuids;

    protected $table = 'arquivos';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
