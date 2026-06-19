<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
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

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s %s', $this->firstname, $this->lastname);
    }

    /**
     * @return string
     */
    public function getArrivalTime(): string
    {
        return (new Carbon($this->arrivalTime))->format(config('app.format.datetime'));
    }

    /**
     * @return string
     */
    public function getDepartureTime(): string
    {
        return (new Carbon($this->departureTime))->format(config('app.format.datetime'));
    }

    /**
     * @return string
     */
    public function getStayTime(): string
    {
        $arrivalTime = Carbon::parse($this->arrivalTime);
        $currentTime = Carbon::parse($this->departureTime ? $this->departureTime : now());

        $difference = $arrivalTime->diff($currentTime);

        $hours = $difference->h + ($difference->d * 24);
        $minutes = $difference->i;

        return "$hours Stunden und $minutes Minuten";
    }

    /**
     * @return void
     */
    public function logout(): void
    {
        self::update([
            self::departureTime => Carbon::now(),
        ]);
    }

    // Properties
    const firstname = 'firstname';
    const lastname = 'lastname';
    const arrivalTime = 'arrivalTime';
    const departureTime = 'departureTime';
}
