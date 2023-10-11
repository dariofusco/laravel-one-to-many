<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $casts = [
        "date" => "date",
    ];

    protected $fillable = [
        'name',
        'type_id',
        'description',
        'date',
        'image',
        'github_link'
    ];

    public function projects() {
        return $this->hasMany(Type::class);
    }
}
