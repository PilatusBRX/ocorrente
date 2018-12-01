@include('layouts.header')


<div class="container create-section">
     <a   href="/" class="waves-effect waves-light btn blue"><i class="material-icons left">home</i>Voltar à Home</a>
    <br><br><br><br>
    <div class="row">
       <form class="col s12" method="POST" action="{{ route('update',['id'=>$chamado->id])}}">
         <div class="row">
                     <div class="input-field col s12">

                       <input value="{{$chamado->title}}" name="title" type="text" class="validate">
                       <label>Título</label>
                    </div>

                   <div class="input-field col s12">
                    <input  value="{{$chamado->description}}" name="description" type="text" class="validate">
                         <label>Descrição</label>
                     </div>

                     <div class="input-field col s12">
                           <select name="status" class="col s12">
                               <option value="" disabled selected>Atualizar Chamado para:</option>
                               <option @if(old('status') == 'Fechado') selected @endif >
                                   Fechado
                               </option>
                               <option @if(old('status') == 'Aberto') selected @endif >
                                   Aberto
                               </option>
                               <option @if(old('status') == 'Em Andamento') selected @endif >
                                   Em Andamento
                               </option>
                         </select>
                     </div>

           </div><br>
         <button type="submit" class="waves-effect waves-light btn blue"><i class="material-icons left">edit</i>Atualizar chamado</button>
         @csrf

     </form>
    </div>
</div>
@include('layouts.footer')
