<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DepartmentMaster extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'department_masters';
    protected $primaryKey = 'idDept';
    protected $keyType = 'int';
    protected $timestamps = false;

    protected $fillable = [
        'name',
        'lastUpdate'
    ];

    public function tClinic()
    {
        return $this->hasMany(ClinicTransaction::class, 'idDept', 'idDept');
    }
    public function mEmp()
    {
        return $this->hasMany(EmployeeMaster::class, 'idDept', 'idDept');
    }
}
