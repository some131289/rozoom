<?php

namespace App\Models\Simulator;

use Illuminate\Database\Eloquent\Model;

class SimulatorDiscipline extends Model
{
    protected $fillable =['id', 'title', 'active', 'created_at'];

    public function categories() {
        return $this->hasMany( SimulatorCategory::class, 'simulator_discipline_id', 'id' );
    }
}
