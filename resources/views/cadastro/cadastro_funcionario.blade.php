<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Empresas</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
     <div class="cadastro-form">
        <form method="POST">
        @csrf
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="nome" name="nome" placeholder="Nome"  value = "{{ old('nome') }}" autocomplete="off">
                @if($errors -> has('nome'))
                  <font color="red">  {{ $errors-> first('nome') }} </font>
                @endif
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="sobrenome" name="sobrenome" placeholder="sobrenome" value = "{{ old('sobrenome') }}" autocomplete="off">
                @if($errors -> has('sobrenome'))
                   <font color="red"> {{ $errors-> first('sobrenome') }} </font>
                @endif
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="email" name="email" placeholder="Email" value = "{{ old('email') }}" autocomplete="off">
                @if($errors -> has('email'))
                  <font color="red">  {{ $errors-> first('email') }} </font>
                @endif
            </div>
            <div class="form-group">
                <input type="tel" class="form-control item" id="telefone" name="telefone" placeholder="Telefone" value = "{{ old('telefone') }}" autocomplete="off">
                @if($errors -> has('telefone'))
                  <font color="red">  {{ $errors-> first('telefone') }} </font>
                @endif
            </div>
             
             <div class="form-group">
            <label for="empresa" class="form-label">Selecione uma Empresa: </label>
            <select class="form-group item" id="empresa" name="cd_emp">
                <option> </option>

             @foreach ($empresas as $empresa)
                <option value="{{ $empresa->cd_emp }}">{{ $empresa->nome }}</option>
             @endforeach
             
              </select>
            </div>
             @if($errors -> has('cd_emp'))
                  <font color="red">  {{ $errors-> first('cd_emp') }} </font>
             @endif

            <div class="form-group">
                <button type="submit" class="btn btn-block criar-conta">Cadastrar Funcion??rio</button>
            </div>

              <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('ListaFuncionario') }}"> Voltar</a>
             </div>

        </form>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
