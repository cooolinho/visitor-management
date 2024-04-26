@extends('layout.app')

@section('body')
    HOME
    <ul>
        <li><a href="{{ route('app.visitor.index') }}">Besucher Übersicht</a></li>
    </ul>

    <div class="row">
        <div class="col">
            <x-visitor-in-house></x-visitor-in-house>
        </div>
        <div class="col">
            <x-visitors-not-locked-out></x-visitors-not-locked-out>
        </div>
    </div>
@endsection
