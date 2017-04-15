@extends('principal')
@section('conteudo')

<div class="col-sm-11">
    <h2>Listagem de Shows</h2>
</div>

<div class="col-sm-1">
    <a href="{{route('shows.create')}}" class="btn btn-primary" role="button">Novo</a>
</div>

<div class="col-sm-12">
 <table class="table table-hover">
    <thead>
      <tr>
        <th>Código</th>
        <th>Show</th>
        <th>Genero</th>
        <th>Local</th>
        <th>Artista/Banda</th>
        <th>Valor R$</th>
        <th>Publico</th>
        <th>Renda R$</th>
        <th>Ação</th>
        
      </tr>
    </thead>
    
    <tbody>
        @foreach($show as $shows)
        <tr>
            
            <td>{{$shows->id}}</td>
            <td>{{$shows->nome}}</td>
            <td>{{$shows->genero}}</td>
            <td>{{$shows->local}}</td>
            <td>{{$shows->artista}}</td>
            <td>{{number_format($shows->valor, '2', ',' , '.')}}</td>
            <td>{{$shows->publico}}</td>
            <td>{{number_format((number_format($shows->valor, '2', ',', '.'))*($shows->publico),'2',',','.')}}</td>
            
           <td>
                <a href="{{route('shows.show' , $shows->id)}}" class="btn btn-info" role="button">Ver</a></div>
                <a href="{{route('shows.edit' , $shows->id)}}" class="btn btn-warning" role="button">Alterar</a></div>
<form style="display: inline-block;" method="POST" action="{{route('shows.destroy', $shows->id)}}"
            onsubmit="return confim('Confirma a exclusão?')">
                {{method_field('DELETE')}}
                {{csrf_field()}} 
<button type="submit" class="btn btn-danger">Excluir</button>
            </form>

                          


            </td>
            
            
        </tr>
     
    </tbody>
    @endforeach
  </table>
</div>

@endsection

