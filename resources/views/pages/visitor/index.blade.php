@extends('layout.app')

@section('body')
    Besucher Übersicht
    <ul>
        <li><a href="{{ route('app.visitor.create') }}">Besucher erstellen</a></li>
    </ul>

    <table class="table table-sm">
        <thead>
        <tr>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Ankunftszeit</th>
            <th>Abfahrtszeit</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($visitors as $visitor)
            <tr>
                <td>{{ $visitor->firstname }}</td>
                <td>{{ $visitor->lastname }}</td>
                <td>{{ $visitor->arrivalTime }}</td>
                <td>{{ $visitor->departureTime }}</td>
                <td>
                    <a href="{{ route('app.visitor.show', ['visitor' => $visitor->id]) }}">show</a>
                    <a href="{{ route('app.visitor.edit', ['visitor' => $visitor->id]) }}">edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
