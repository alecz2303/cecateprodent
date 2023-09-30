<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Estudiante extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function getFullNameAttribute(){
        return "Nombre: {$this->nombre} {$this->ap_paterno} {$this->ap_materno} | Mensualidad: {$this->mensualidad}";
    }

    public function getFullNmeAttribute(){
        return "{$this->nombre} {$this->ap_paterno} {$this->ap_materno}";
    }

    public $additional_attributes = ['full_name', 'full_nme'];
}
