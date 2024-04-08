<form action="{{url('/caracterizados/'.$ficha)}}" method="post">
    @csrf

    {{method_field('PATCH')}}

</form>


@include('caracterizados.form')
