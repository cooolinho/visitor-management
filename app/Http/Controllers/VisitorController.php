<?php

namespace App\Http\Controllers;

use App\Http\Requests\VisitorRequest;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.visitor.index', [
            'visitors' => Visitor::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $visitor = new Visitor();
        $visitor->firstname = $request->old(Visitor::firstname);
        $visitor->lastname = $request->old(Visitor::lastname);
        $visitor->arrivalTime = $request->old(Visitor::arrivalTime);
        $visitor->departureTime = $request->old(Visitor::departureTime);

        return view('pages.visitor.create', [
            'visitor' => $visitor,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VisitorRequest $request)
    {
        $visitor = Visitor::create($request->all());

        return redirect(route('app.visitor.show', [
            'visitor' => $visitor->id
        ]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Visitor $visitor)
    {
        return view('pages.visitor.show', [
            'visitor' => $visitor,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visitor $visitor)
    {
        return view('pages.visitor.edit', [
            'visitor' => $visitor,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VisitorRequest $request, Visitor $visitor)
    {
        $visitor->update($request->all());

        return redirect(route('app.visitor.edit', [
            'visitor' => $visitor->id
        ]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visitor $visitor)
    {
        $visitor->delete();

        return redirect(route('app.visitor.index'));
    }
}
