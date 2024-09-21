<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LineMaster extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'line_masters';
    protected $primaryKey = 'idLine';
    protected $keyType = 'int';
    protected $timestamps = false;
    protected $fillable = [
        'name',
        'lastUpdate'
    ];

    public function mEmp()
    {
        return $this->hasMany(EmployeeMaster::class, 'idLine', 'idLine');
    }
}
