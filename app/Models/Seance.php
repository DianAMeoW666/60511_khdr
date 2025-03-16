<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Seance extends Model
{
    use HasFactory;

    public function clients(): BelongsTo
    {
        return $this->belongsTo(Seance::class);
    }

    public function cosmetologists(): BelongsTo
    {
        return $this->belongsTo(Seance::class);
    }
    public function services():BelongsToMany
    {
        return $this->BelongstoMany(Service::class, 'the_specified_service');

    }

}
