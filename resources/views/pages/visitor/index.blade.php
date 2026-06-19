@extends('layout.dashboard')

@section('body')
    Besucher Übersicht
    <ul>
        <li><a href="{{ route('app.home') }}">zurück</a></li>
        <li><a href="{{ route('app.visitor.create') }}">Besucher erstellen</a></li>
    </ul>

    <table class="table table-sm">
        <thead>
        <tr>
            <th>Vorname</th>
            <th>Nachname</th>
            <th class="text-center">Ankunftszeit</th>
            <th class="text-center">Dauer</th>
            <th class="text-center">Abfahrtszeit</th>
            <th class="text-end">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($visitors as $visitor)
            <tr>
                <td>{{ $visitor->firstname }}</td>
                <td>{{ $visitor->lastname }}</td>
                <td class="text-center">{{ $visitor->getArrivalTime() }}</td>
                <td class="text-center">{{ $visitor->getStayTime() }}</td>
                <td class="text-center">{{ $visitor->getDepartureTime() }}</td>
                <td class="text-end">
                    <a href="{{ route('app.visitor.show', ['visitor' => $visitor->id]) }}">show</a>
                    <a href="{{ route('app.visitor.edit', ['visitor' => $visitor->id]) }}">edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
