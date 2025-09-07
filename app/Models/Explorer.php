<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Explorer extends Model
{
    protected $fillable = ['name', 'skill', 'bio', 'institution_id'];

    /** @use HasFactory<\Database\Factories\ExplorerFactory> */
    use HasFactory;

    public function institution() {
        return $this->belongsTo(Institution::class);
    }
}
