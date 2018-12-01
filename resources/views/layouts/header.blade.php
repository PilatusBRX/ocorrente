
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Ocorrente</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <nav class="light-blue darken-3" role="navigation">
      <div class="container">
              <div class="nav-wrapper">
                      <a href="/" class="brand-logo"><img src="/img/logo-header.png" alt="" style="height: 42px; width: 42px; line-height: 20px;">Ocorrente</a>
                      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                      <ul class="right hide-on-med-and-down">
                          <li><a href="/"><i style="font-size:2.5rem;" class="material-icons">home</i></a></li>
                          <li><a href="/adicionar-chamado"><i style="font-size:2.5rem;" class="material-icons ">playlist_add</i></a></li>

                          <li style="margin-left: 10px;"><a href="/"><i style="font-size:2.5rem;" class="material-icons ">person</i></a>
                          <li style="margin-right: 10px;" class="logged-user">
                         Logado como <b style="color: #e9e9e9;font-size:; margin-left:8px;"> {{Auth::user()->name}}</b></li>
                        <li>
                           <form action="{{route('logout')}}" method="POST" id="logout-form">
                               @csrf
                               <button style="margin-left: 30px;" type="submit" class="btn-logout tooltipped" data-position="bottom"><i style="font-size:2.5rem;" class="material-icons " >input</i></button>
                           </form>
                    </li>

                </ul>
                <ul class="sidenav light-blue darken-3" id="mobile-demo">
                      <li><a href="/">Home</a></li>
                      <li><a href="/adicionar-chamado">Adicionar chamado</a></li>
                      <li style="margin-left: 30px;" ><b style="color: #e9e9e9;"> {{Auth::user()->name}}</b></li>
                      <li>

                     <li>
                         <form action="{{route('logout')}}" method="POST" id="logout-form">
                             @csrf
                             <button class="btn btn-logout-mobile" style="margin-left: 30px;" type="submit">Sair</button>
                         </form>
                   </li>
                </ul>
          </div>
    </nav>
