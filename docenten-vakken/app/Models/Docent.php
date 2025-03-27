<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docent extends Model
{
    use HasFactory;

    protected $table = 'docenten'; // expliciet de naam van de tabel aangeven


    protected $fillable = ['naam', 'hobby'];

    public function vakken()
    {
        return $this->hasMany(Vak::class, 'docent_id'); // 'docent_id' is de foreign key in de vakken tabel
    }
}
