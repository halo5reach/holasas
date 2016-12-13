<table id="" class="table table-striped table-hover">
      <thead>
        <th>ID</th>
        <th>Programa</th>
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
            <th>{{ $listado->id }}</th>
            <th>{{ $listado->denominacion }}</th>
            <th>{{ $listado->codigo }}</th>
            <th>{{ $listado->documento }}</th>
            <th>{{ $listado->nombre }}</th>
            <th>{{ $listado->email }}</th>
            <th>{{ $listado->estado_matricula }}</th>
            <th>
            <a href="{{ route('aprendiz.edit',$listado->id) }}" class="btn  btn-success btn-xs" title="Editar Informacion del aprendiz"><i class="fa fa-pencil-square-o"></i> Editar</a>
            @if($listado->estado_matricula == "formacion")
              <a class="btn  btn-success btn-xs" title="Certificar Aprendiz" onclick="certificar({{ $listado->id }},'{{ $listado->nombre }}',{{ $listado->id_ficha }});"><i class="fa fa-check-square-o"></i> Certificar</a>
            @elseif($listado->estado_matricula == "certificado")
              <a class="btn  btn-success btn-xs" href="{{ route('pdf',$listado->id) }}" target="_blank" title="Certificar Aprendiz"><i class="fa fa-download"></i> Descargar</a>
            @endif
            </th>
          </tr>
        @endforeach
      </tbody>
    </table>
    {!! str_replace('/?','?',$listar->render()) !!}
