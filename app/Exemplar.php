<?php

namespace App;

use App\Collection;
use Illuminate\Database\Eloquent\Model;

class Exemplar extends Model{
    public function collection()
    {
        return $this->hasMany(Collection::class);
    }

}
