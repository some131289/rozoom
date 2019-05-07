<?php

namespace App\Models\Simulator;

use Illuminate\Database\Eloquent\Model;

class SimulatorCategory extends Model
{
    protected $fillable =['id', 'title', 'class', 'active'];

    public function discipline() {
        return $this->belongsTo( SimulatorDiscipline::class, 'id', 'simulator_discipline_id' );
    }
}

