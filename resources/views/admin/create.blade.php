@include('layouts.header')

<div class="container">
    <br><br>
    <a  href="/" class="waves-effect waves-light btn blue"><i class="material-icons left">home</i>Voltar à Home</a>
    <br><br>
    <div class="row">
        <h4>Adicionar chamado</h4>
    </div>
</div>

<div class="container create">
    <div class="row">
       <form class="col s12" method="POST" action="{{route('store')}}">
         <div class="row">
           <div class="input-field col s12">
             <input  name="title"  type="text" class="validate" required="required">
             <label>Título</label>
           </div>
           <div class="input-field col s12">
               <input name="description"  type="text" class="validate" required>
               <label>Descrição</label>
          </div>
           <div class="input-field col s12" >
               <select name="status" >
                <option value="">Status do chamado</option>
                 <option value="Aberto">Aberto</option>
                 <option value="Fechado">Fechado</option>
                 <option value="Em Andamento">Em Andamento</option>
               </select>
          </div>

         </div>
         <button  type="submit" class="waves-effect waves-light btn blue"><i class="material-icons left">add</i>Adicionar chamado</button>
         @csrf

     </form>
    </div>
</div>
<br><br><br><br>
@include('layouts.footer')
