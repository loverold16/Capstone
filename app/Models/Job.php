<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'details',
        'price',
        'is_featured',
        'job_code',
        'description',
        'image',
    ];

    /**
     * The roles that belong to the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
