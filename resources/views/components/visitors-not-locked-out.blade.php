<div>
    <h3>Besucher nicht ausgeloggt ({{ count($visitors) }})</h3>

    <table class="table table-sm">
        <thead>
        <tr>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Ankunftszeit</th>
            <th>Dauer</th>
            <th class="text-center">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($visitors as $visitor)
            <tr>
                <td>{{ $visitor->firstname }}</td>
                <td>{{ $visitor->lastname }}</td>
                <td>{{ $visitor->getArrivalTime() }}</td>
                <td>{{ $visitor->getStayTime() }}</td>
                <td class="text-center">
                    <form action="{{ route('app.visitor.logout', ['visitor' => $visitor->id]) }}" method="POST">
                        @csrf
                        <div class="btn-group" role="group">
                            <a class="btn btn-link" href="{{ route('app.visitor.show', ['visitor' => $visitor->id]) }}">show</a>
                            <a class="btn btn-link" href="{{ route('app.visitor.edit', ['visitor' => $visitor->id]) }}">edit</a>
                            <button type="submit" class="btn btn-link">Ausloggen</button>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
