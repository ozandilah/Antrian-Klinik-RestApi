<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClinicTransaction extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'clinic_transactions';
    protected $primaryKey = 'QueId';
    protected $keyType = 'int';
    protected $timestamps = false;
    protected $fillable = [
        'idEmp',
        'idDept',
        'idClinic',
        'idCompany',
        'IPaddr',
        'UsrPhone',
        'QueNum',
        'QueDT',
        'QueBgn',
        'QueSTS',
        'QueSkip',
        'createdAt',
        'updatedAt'
    ];

    public function mClinic()
    {
        return $this->belongsTo(ClinicMaster::class, 'idClinic', 'idClinic');
    }
    public function mDept()
    {
        return $this->belongsTo(DepartmentMaster::class, 'idDept', 'idDept');
    }
    public function mEmp()
    {
        return $this->belongsTo(EmployeeMaster::class, 'idEmp', 'idEmp');
    }
    public function mComp()
    {
        return $this->belongsTo(CompanyMaster::class, 'idCompany', 'idCompany');
    }
}
