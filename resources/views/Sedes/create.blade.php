<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Sedes</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fa fa-plus"></i> Crear sede
     </button>
</div>
<div class="scrollable">
    <h3  style="color:#4e8e37" class="box-title m-b-20 text-center"> <strong> Sedes registradas </strong> </h3>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog">
   <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Crear sede</h5>

         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body mt-2">

            <form action="{{url('/sedes')}}" method="POST" enctype="multipart/form-data">

            <input id="nomsede" type="text" class="form-control" name="nombres" placeholder="Nombre de la sede" required>
            <br>
            <input id="siglasedes" type="text" class="form-control" name="siglas" placeholder="Siglas" required>
            <br>
            <input id="direcsede" type="text" class="form-control" name="direccion" placeholder="Dirección de la sede" required>
            <br>
            <input id="coorsede" type="text" class="form-control" name="coordinacion" placeholder="Coordinador de la sede" required>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button (click)="crearSede()" type="submit" class="btn btn-primary">Crear</button>
             </div>
         </form>
      </div>

   </div>
</div>
</div>
