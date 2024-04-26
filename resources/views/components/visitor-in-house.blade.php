<div>
    <h3>Besucher im Haus ({{ count($visitors) }})</h3>

    <table class="table table-sm">
        <thead>
        <tr>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Ankunftszeit</th>
            <th>Dauer</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($visitors as $visitor)
            <tr>
                <td>{{ $visitor->firstname }}</td>
                <td>{{ $visitor->lastname }}</td>
                <td>{{ $visitor->getArrivalTime() }}</td>
                <td>{{ $visitor->getStayTime() }}</td>
                <td>
                    <a href="{{ route('app.visitor.show', ['visitor' => $visitor->id]) }}">show</a>
                    <a href="{{ route('app.visitor.edit', ['visitor' => $visitor->id]) }}">edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
