<table id="" class="table table-striped table-hover">
      <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Tipo Documento</th>
        <th>Documento</th>
        <th>Email</th>
        <th>Telefono</th>
        <th align="center" colspan="2"> Accion</th>
      </thead>
      <tbody>

        @foreach($lista as $listado)
          <tr>
            <th>{{ $listado->id }}</th>            
            <th>{{ $listado->nombre }}</th>
            <th>{{ $listado->t_documento }}</th>
            <th>{{ $listado->documento }}</th>
            <th>{{ $listado->email }}</th>
            <th>{{ $listado->telefono }}</th>
            <th>
            <a href="{{ route('ficha.registrar',['id'=>$listado->id,'ficha'=>$ficha->id]) }}" class="btn  btn-success btn-xs" title="Matricular aprendices"><i class="fa fa-fw fa-eye"></i>Matricular</a>
            </th>
          </tr>
        @endforeach
      </tbody>
    </table>
  {!! str_replace('/?','?',$lista->render()) !!}