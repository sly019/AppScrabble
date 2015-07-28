@extends('/layouts/layout')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="estilo.css" rel="stylesheet" media="screen">

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-9"> 
      <div class="panel panel-default">
        <div class="panel-heading">Inicio</div>
        <div class="panel-body">
            <div class="col-md-10"> 
                <img id =""src="http://pad2.whstatic.com/images/thumb/9/99/Improve-Your-Scrabble-Score-Step-4.jpg/670px-Improve-Your-Scrabble-Score-Step-4.jpg">      
            </div>            
            <div class="col-md-2 center">
                
            {!!Form::open(array('url' => '/home'))!!}
                  <button type="submit" class="btn btn-primary gamebutton" value= "Crear" onclick="NuevoJuego()" style="margin-right: 15px;">Nueva Partida</button> 
            {!!Form::close()!!}  

            {!!Form::open(array('url' => "/home/unirse", 'method' => 'post'))!!}
                  <div class="form-group">
                    {!! Form::Label('Partidas', 'Partidas abiertas:') !!}
                    <select class="form-control" name="partida_id">
                      @foreach($partidas as $item)
                        <option value="{{$item->partida_id}}">{{$item->id}}</option>
                      @endforeach
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary gamebutton" value= "Crear" style="margin-right: 15px;">Unirse a Partida</button>
            {!!Form::close()!!}

            </div>
        </div>
      </div>
    </div>   
    </div>
  </div>
<script type="text/javascript" src="/js/funcionesPartidas.js"></script>

@endsection


     