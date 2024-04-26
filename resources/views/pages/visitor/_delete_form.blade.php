@php
    use App\Models\Visitor;
@endphp

<form action="{{ route('app.visitor.destroy', ['visitor' => $visitor->id]) }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger" onclick="sureToDelete(event)">Löschen</button>
</form>
<script type="text/javascript">
    function sureToDelete(e){
        if(confirm('Are You sure you want to delete this?')){
            return true;
        }else{
            e.preventDefault();
        }
    }

</script>
