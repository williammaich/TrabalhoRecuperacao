
@extends('principal')
@section('conteudo')

 <div class="row">
  <div class="col-sm-11">
      <h2>
     @if($acao == 1)
     Inclusão 
     @elseif($acao == 2)
     Alteração 
     @elseif($acao == 3)
     Vizualização
     @endif
       de Shows
      </h2>
  </div>
  <div class="col-sm-1"><a href="{{route('shows.index')}}" class="btn btn-primary" role="button">Voltar</a></div>  
</div>

@if($acao == 1)
<form method="post" action='{{route('shows.store')}}'>
    
   @elseif($acao == 2)
   <form method="post" action='{{route('shows.update',$reg->id)}}'>
 {!! method_field('PUT') !!}
@endif
{{csrf_field()}}
       
       
       <div class="form-group">
    <label for="nome">Nome do Show:</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do show" value="{{$reg->nome or old('nome')}}">
  </div>

<div class="form-group">
    <label for="genero">Genero:</label>
    <input type="text" class="form-control" id="genero" name="genero" placeholder="genero" value="{{$reg->genero or old('genero')}}">
  </div>    
    
    <div class="form-group">
    <label for="local">Local:</label>
    <input type="text" class="form-control" id="local" name="local" placeholder="local" value="{{$reg->local or old('local')}}">
  </div>
    
    <div class="form-group">
    <label for="artista">Artista:</label>
    <input type="text" class="form-control" id="artista" name="artista" placeholder="artista" value="{{$reg->artista or old('artista')}}">
  </div>
    
<div class="form-group">
    <label for="valor">Valor:</label>
    <input type="text" class="form-control" id="valor" name="valor" placeholder="valor" value="{{$reg->valor or old('valor')}}">
  </div>


<div class="form-group">
    <label for="publico">Publico:</label>
    <input type="text" class="form-control" id="publico" name="publico" placeholder="publico" value="{{$reg->publico or old('publico')}}">
  </div>

@if($acao == 1 || $acao == 2)

    <button type="submit" class="btn btn-primary">Enviar</button>
    <button type="reset" class="btn btn-warning">Limpar</button>
    
    @endif
</form>
        
@endsection
