<div class="container">
    <row>
        <h4 class="title">Lista de chamados</h4>
    </row><br><br><br>

    <table class="highlight centered responsive-table">
            <thead>
              <tr>

                  <th>ID do chamado</th>
                  <th>Título</th>
                  <th>Status</th>
                   <th>Data</th>
                   <th>Visualizar</th>
                  <th>Editar</th>
                  <th>Excluir</th>
              </tr>
            </thead>

            <tbody>

                @foreach($chamados as $chamado)
              <tr>
                <td>{{$chamado->id}}</td>
                <td>{{$chamado->title}}</td>
                <td>{{$chamado->status}}</td>
                <td>{{(new DateTime($chamado->created_at))->format(' d/m/Y') }}</td>


                 <td><a title="visualizar"   href="{{route('show',$chamado->id)}}"><i class="material-icons">remove_red_eye</i></a></td>
                 <td><a title="editar"   href="{{route('edit',$chamado->id)}}"><i class="material-icons">edit</i></a></td>
                <td><a title="deletar" onclick=" return confirm('Tem certeza de deletar o chamado ?')" href="{{ route('destroy', $chamado->id)}}"><i class="small material-icons">delete_forever</i></a></td>
              </tr>

              @endforeach
            </tbody>
    </table>
    <br><br>


<div class="pages">
     {{ $chamados->links('vendor.pagination.materialize')}}
</div>
<!--Pagination-->



</div>
<br><br><br>
<br><br><br>
