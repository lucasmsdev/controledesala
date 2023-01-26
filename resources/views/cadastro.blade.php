
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
@if(isset($alert))
@if($alert == 'success')
<div class="alert alert-success" role="alert">
 Conta Criada! <a href="login">Logue</a>
</div>
@endif
@endif
<form method="POST">
    {{csrf_field()}}
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-light text-dark" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <img class="senai" src="{{asset('img/senai.png')}}" alt="Logo Senai" title="Imagem Logo Senai" />
                            <h5 class="text-dark mb-5">Realize o seu cadastro!</h5>
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example1" name="nome" class="form-control" />
                                        <label class="form-label" for="form3Example1">Nome</label>
                                    </div>
                                </div>
                              
                            </div>

                            <div class="form-outline mb-4">
                            <select class="form-control" name="tipo_funcionario">
 
 @foreach($tipo_funcionario as $tipo)
   <option value={{ $tipo->pk_tipo_funcionario }} > {{ $tipo->tipo_funcionario }}</option>
 @endforeach
 </select>

                                <label class="form-label" for="form3Example2">Selecione o seu tipo de funcionário:</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input name="nif" type="text  " id="form3Example3" class="form-control" placeholder="Digite seu NIF"/>
                                <label class="form-label" for="form3Example3">NIF</label>
                            </div>

                            <div class="form-outline mb-4">
                                <div class="col-auto">
           
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">@</div>
                                        </div>
                                        <input type="text" name="email" class="form-control" id="inlineFormInputGroup" placeholder="Digite seu Email">
                                    </div>
                                    <label class="sr-only" for="inlineFormInputGroup">Email</label>
                                </div>
                            </div>



                            <div class="form-outline mb-4">
                                <input name="senha" type="password" id="form3Example4" class="form-control" placeholder="Digite uma Senha"/>
                                <label class="form-label" for="form3Example4" >Senha</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input name="cod_rfid" type="password" id="form3Example4" class="form-control" placeholder="Digite seu Código RFID"/>
                                <label class="form-label" for="form3Example4" >Código RFID</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input name="cod_barra" type="password" id="form3Example4" class="form-control" placeholder="Digite seu Código de barras"/>
                                <label class="form-label" for="form3Example4" >Código de barras</label>
                            </div>

                            <button type="submit" class="btn btn-danger btn-block mb-4">
                                Cadastre-se
                            </button>

                            <div>
                                <p class="mb-0">Já possui uma conta? <a href="cadastro" class="text-secundary fw-bold">Entrar</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
</body>
</html>
