<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'icon',
        'is_active',
        'duration_minutes'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'duration_minutes' => 'integer'
    ];

    // Relación con las citas
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    // Scope para servicios activos
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Método para obtener duración formateada
    public function getDurationFormattedAttribute()
    {
        $hours = floor($this->duration_minutes / 60);
        $minutes = $this->duration_minutes % 60;
        
        return ($hours > 0 ? "{$hours}h " : '') . ($minutes > 0 ? "{$minutes}m" : '');
    }
}
