<div class="">

@foreach ($tasksByStatus as $stutus)
    <li 
    @style([$stutus->stutus->color() => $stutus->stutus,])
    > {{$stutus->count }} </li>

    {{ Str::of($stutus->stutus->value)->headline() }}
@endforeach

</div>