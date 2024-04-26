<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $firstname
 * @property string $lastname
 * @property Carbon $arrivalTime
 * @property Carbon $departureTime
 */
class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        self::firstname,
        self::lastname,
        self::arrivalTime,
        self::departureTime,
    ];

    public function __toString()
    {
        return sprintf('%s %s', $this->firstname, $this->lastname);
    }

    // Properties
    const firstname = 'firstname';
    const lastname = 'lastname';
    const arrivalTime = 'arrivalTime';
    const departureTime = 'departureTime';
}
