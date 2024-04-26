@php
    use App\Models\Visitor;
@endphp

<form action="{{ $route }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="firstname" class="form-label">Vorname</label>
        <input type="text" class="form-control @error(Visitor::firstname) is-invalid @enderror" id="firstname" name="{{ Visitor::firstname }}" value="{{ $visitor->firstname }}" required>
        @error(Visitor::firstname)
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="lastname" class="form-label">Vorname</label>
        <input type="text" class="form-control @error(Visitor::lastname) is-invalid @enderror" id="lastname" name="{{ Visitor::lastname }}" value="{{ $visitor->lastname }}" required>
        @error(Visitor::lastname)
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="arrivalTime" class="form-label">Ankunftszeit</label>
        <input type="datetime-local" class="form-control @error(Visitor::arrivalTime) is-invalid @enderror" id="arrivalTime" name="{{ Visitor::arrivalTime }}" value="{{ $visitor->arrivalTime }}">
        @error(Visitor::arrivalTime)
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="departureTime" class="form-label">Abfahrtszeit</label>
        <input type="datetime-local" class="form-control @error(Visitor::departureTime) is-invalid @enderror" id="departureTime" name="{{ Visitor::departureTime }}" value="{{ $visitor->departureTime }}">
        @error(Visitor::departureTime)
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
