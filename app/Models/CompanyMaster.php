<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompanyMaster extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'company_masters';
    protected $primaryKey = 'idCompany';
    protected $keyType = 'int';
    protected $timestamps = false;
    protected $fillable = [
        'name',
        'code',
        'initial',
        'npwp',
        'city',
        'address',
        'createdBy',
        'lastUpdatedBy',
        'createdBy',
        'lastUpdatedBy'
    ];

    public function tClinic()
    {
        return $this->hasMany(ClinicTransaction::class, 'idCompany', 'idCompany');
    }
    public function mEmp()
    {
        return $this->hasMany(EmployeeMaster::class, 'idCompany', 'idCompany');
    }
}
