<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClinicMaster extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'clinic_masters';
    protected $primaryKey = 'idClinic';
    protected $keyType = 'int';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'lastSeq',
        'lastDT',
        'leadTime',
        'cBgnTime'
    ];

    public function tClinic()
    {
        return $this->hasMany(ClinicTransaction::class, 'idClinic', 'idClinic');
    }
}
