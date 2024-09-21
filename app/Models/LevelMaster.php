<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LevelMaster extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'level_masters';
    protected $primaryKey = 'idLevel';
    protected $keyType = 'int';
    protected $timestamps = false;

    protected $fillable = [
        'name',
        'lastUpdate'
    ];

    public function mEmp()
    {
        return $this->hasMany(EmployeeMaster::class, 'idLevel', 'idLevel');
    }
}
