<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $fillable = ['name', 'location', 'description'];

    /** @use HasFactory<\Database\Factories\InstitutionFactory> */
    use HasFactory;

    public function explorers() {
        return $this->hasMany(Explorer::class);
    }
}
