@if($errors -> any())
<div class="text-danger">
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</div>
@endif