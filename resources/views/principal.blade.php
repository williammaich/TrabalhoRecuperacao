<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shows Maneger</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Show Maneger</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{url('/')}}">Home</a></li>
      <li><a href="{{route('shows.index')}}">Cadastro</a></li>
      <li><a href="#">Pesquisas</a></li>
      <li><a href="#">Relatórios</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
@yield('conteudo')
</div>

</body>
</html>
