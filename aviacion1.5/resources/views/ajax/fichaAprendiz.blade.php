<table id="" class="table table-striped table-hover">
      <thead>
        <th>ID</th>     
        <th>Ficha</th>
        <th>Documento</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Estado</th>
        <th align="center" colspan="2"> Accion</th>
      </thead>
      <tbody>

        @foreach($listar as $listado)
          <tr>
            <th>{{ $listado->matricula }}</th>        
            <th>{{ $listado->codigo }}</th>
            <th>{{ $listado->documento }}</th>
            <th>{{ $listado->nombre }}</th>
            <th>{{ $listado->email }}</th>
            <th>{{ $listado->e_certificado }}</th>
            <th>
            <button class="btn  btn-success btn-xs" title="Editar Informacion del aprendiz"><i class="fa fa-pencil-square-o"></i> Editar</button>
            <a class="btn  btn-success btn-xs" title="Certificar Aprendiz"><i class="fa fa-check-square-o"></i> Certificar</a>
            </th>
          </tr>
        @endforeach
      </tbody>
    </table>
    {!! str_replace('/?','?',$listar->render()) !!}