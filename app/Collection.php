<?php

namespace App;

use App\Exemplar;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    public function exemplar()
    {
        return $this->belongsTo(Exemplar::class);
    }

}
