<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Admission extends Model
{
    protected $fillable = ['image', 'description', 'deadline'];

    // Scope for valid admissions (not expired)
    public function scopeActive($query)
    {
        return $query->where('deadline', '>=', Carbon::today());
    }
}

