@extends('layout.app')

@section('body')
    Besucher Detail
    <ul>
        <li><a href="{{ route('app.visitor.index') }}">zur Übersicht</a></li>
        <li><a href="{{ route('app.visitor.edit', ['visitor' => $visitor->id]) }}">bearbeiten</a></li>
    </ul>

    {{ $visitor->firstname }}
@endsection
