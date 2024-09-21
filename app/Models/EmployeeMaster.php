<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeMaster extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'employee_masters';
    protected $primaryKey = 'idEmp';
    protected $keyType = 'int';
    protected $timestamps = false;

    protected $fillable = [
        'idDept',
        'idDiv',
        'idLevel',
        'idLine',
        'idCompany',
        'nik',
        'name',
        'dateOb',
        'empSts',
        'createdAt',
        'updatedAt'
    ];

    public function tClinic()
    {
        return $this->hasMany(ClinicTransaction::class, 'idEmp', 'idEmp');
    }
    public function mDept()
    {
        return $this->belongsTo(DepartmentMaster::class, 'idDept', 'idDept');
    }
    public function mDiv()
    {
        return $this->belongsTo(DivisionMaster::class, 'idDiv', 'idDiv');
    }
    public function mLev()
    {
        return $this->belongsTo(LevelMaster::class, 'idLevel', 'idLevel');
    }
    public function mLin()
    {
        return $this->belongsTo(LineMaster::class, 'idLine', 'idLine');
    }
    public function mComp()
    {
        return $this->belongsTo(CompanyMaster::class, 'idCompany', 'idCompany');
    }
}
