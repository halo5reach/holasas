<table id="" class="table table-striped table-hover">
      <thead>
        <th>ID Programa</th>
        <th>Programa</th>
        <th>Ficha</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
        <th> Accion</th>
      </thead>
      <tbody>

        @foreach($listar as $listado)
          <tr>
            <th>{{ $listado->programa }}</th>
            <th>{{ $listado->denominacion }}</th>
            <th>{{ $listado->codigo }}</th>
            <th>{{ $listado->fecha_inicio }}</th>
            <th>{{ $listado->fecha_fin }}</th>
            <th>
            <button class="btn  btn-success btn-xs" title="Ver lista de aprendiz" onclick="ficha_listar({{ $listado->codigo }}) ;" ><i class="fa fa-fw fa-eye"></i>Aprendiz</button>
            <a href="{{ route('ficha.matricula',$listado->id) }}" class="btn  btn-success btn-xs" title="Matricular aprendices"><i class="fa fa-fw fa-eye"></i>Matricular</a>
            </th>
          </tr>
        @endforeach
      </tbody>
    </table>
    {!! str_replace('/?','?',$listar->render()) !!}
  
