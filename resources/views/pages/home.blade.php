@extends('layout.app')

@section('body')
    HOME
    <ul>
        <li><a href="{{ route('app.visitor.index') }}">Besucher Übersicht</a></li>
    </ul>
@endsection
