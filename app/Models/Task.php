<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Enums\PriorityType;
use App\Enums\StutusType;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'stutus',
        'priority',
        'deadline'
    ];

    protected $casts = [
        'priority' => PriorityType::class,
        'stutus' => StutusType::class,
        'deadline'=> 'date'
    ];

    public  function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
