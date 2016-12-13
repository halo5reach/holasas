<table id="" class="table table-striped table-hover">
      <thead>
        <th>ID Programa</th>
        <th>denominacion</th>
        <th>Ficha</th>
        <th>nivel</th>
        <th align="center" colspan="2"> Accion</th>
      </thead>
      <tbody>

        @foreach($listar as $listado)
          <tr>
            <th>{{ $listado->codigo }}</th>
            <th>{{ $listado->denominacion }}</th>
            <th>{{ $listado->ficha }}</th>
            <th>{{ $listado->nvl_form }}</th>
            <th>
              <button class="btn  btn-success btn-xs" title="Ver lista de aprendiz"onclick="ficha_listar({{ $listado->ficha }});" ><i class="fa fa-fw fa-eye" ></i>Aprendiz</button>
              <a href="{{ route('programa.show', $listado->id) }}" class="btn  btn-success btn-xs" title="Ver informacion de programa"><i class="fa fa-fw fa-eye"></i>Programa</a>
            </th>
          </tr>
        @endforeach
      </tbody>
    </table>
{!! str_replace('/?','?',$listar->render()) !!}
