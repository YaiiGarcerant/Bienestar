<form action="{{url('/p04/'.$p04->id)}}" method="post">
    {{method_field('PATCH')}}
    @csrf
</form>
    @include('p04.form')
