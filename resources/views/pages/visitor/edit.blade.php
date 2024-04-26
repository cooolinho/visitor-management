@extends('layout.app')

@section('body')
    Besucher bearbeiten

    <ul>
        <li><a href="{{ route('app.visitor.show', ['visitor' => $visitor->id]) }}">zurück</a></li>
    </ul>

    @include('pages.visitor._form', ['route' => route('app.visitor.update', ['visitor' => $visitor->id])])
    @include('pages.visitor._delete_form')
@endsection
