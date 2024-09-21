<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DivisionMaster extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'division_masters';
    protected $primaryKey = 'idDiv';
    protected $keyType = 'int';
    protected $timestamps = false;

    protected $fillable = [
        'name',
        'lastUpdate'
    ];

    public function mEmp()
    {
        return $this->hasMany(EmployeeMaster::class, 'idDiv', 'idDiv');
    }
}
