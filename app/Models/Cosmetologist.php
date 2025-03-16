<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cosmetologist extends Model
{
    use HasFactory;
    public function seances():BelongsTo
    {
        return $this->HasMany(Seance::class);
    }

}
