<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vak extends Model
{
    use HasFactory;

    protected $table = 'vakken'; // expliciet de naam van de tabel aangeven

    protected $fillable = ['naam', 'beschrijving', 'docent_id'];

    public function docent()
    {
        return $this->belongsTo(Docent::class, 'docent_id'); // Zorg ervoor dat 'docent_id' de kolom is in de vakken tabel
    }
}
