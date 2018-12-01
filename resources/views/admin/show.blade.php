@include('layouts.header')

<div class="container">
    <row>
        <h4 class="title">Detalhes do chamado</h4>
    </row>

<div class="container show-section">
      <div class="row">
            <div class="col s12 ">
                  <div class="card blue-grey lighten-5">
                        <div class="card-content white-text">
                         <h4  class="card-title"><b style="color: #444;">ID:</b> {{$chamado->id}}</h4>
                          <h4 class="card-title">Título: {{$chamado->title}}</h4>
                          <p>Descrição: {{$chamado->description}}</p><br>
                          <p>Status: <b>{{$chamado->status}}</b></p>
                        </div>
                        <div class="card-action">
                          <a title="edit"   href="{{route('edit',$chamado->id)}}"><i class="material-icons">edit</i></a>
                          <a title="delete" onclick=" return confirm('Tem certeza de deletar o chamado ?')" href="{{ route('destroy', $chamado->id)}}"><i class="small material-icons">delete_forever</i></a>
                        </div>
                        <div class="card-action">
                         <a  href="/" class="waves-effect waves-light btn blue"><i class="material-icons left">home</i>Voltar à Home</a>
                        </div>
                  </div>
            </div>
      </div>
</div>
</div>
