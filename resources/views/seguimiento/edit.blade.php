
<form action="{{url('/seguimiento/'.$seguimiento->id)}}" method="post">
    @csrf
    @method('PATCH')
    @include('seguimiento.form')
</form>

