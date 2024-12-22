@props(['type'])

<div class="alert alert-{{$type}} m-3" role="alert">
    {{$slot}}
</div>
