@extends('layout.app')

@section('body')
    Besucher erstellen

    <ul>
        <li><a href="{{ route('app.visitor.index') }}">zurück</a></li>
    </ul>

    @include('pages.visitor._form', ['route' => route('app.visitor.store')])
@endsection
