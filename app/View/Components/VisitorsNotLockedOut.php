<?php

namespace App\View\Components;

use App\Models\Visitor;
use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class VisitorsNotLockedOut extends Component
{
    /**
     * @var Collection
     */
    public Collection $visitors;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->visitors = Visitor::query()
            ->whereNull(Visitor::departureTime)
            ->whereDate(Visitor::arrivalTime, '!=', Carbon::today())
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.visitors-not-locked-out');
    }
}
