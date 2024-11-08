<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'full_name',
        'birth_date',
        'type',
        'education_level',
        'medical_history'
    ];

    protected $casts = [
        'birth_date' => 'date'
    ];

    // Relación con el usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con las citas
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    // Método para obtener la edad
    public function getAgeAttribute()
    {
        return $this->birth_date->age;
    }

    // Scope para filtrar por tipo
    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }
}
