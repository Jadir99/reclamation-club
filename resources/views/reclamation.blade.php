test hello evry one we i hope u doing good stuff



what is ur reclamation <br>

<br>
<form method="POST" action="{{ route('createNewReclamation') }}">
    @csrf
    <textarea name="reclamation" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="effectuer" name="reclamation" id="">
</form>

@if (session('status'))
<script>
    alert("{{session('status')}}")
</script>
@endif

