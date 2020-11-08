<h4>{{$e->getMessage()}}</h4>
{{$e->getFile()}}:{{$e->getLine()}}

<p>{{$e->getTraceAsString()}}</p>

@if ($e->getPrevious())
    <p>{{$e->getPrevious()->getTraceAsString()}}</p>
@endif