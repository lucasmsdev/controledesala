

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Senai</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>

        .senai{
            text-align: center;
            width: 50%;
        }

    </style>
</head>

<body>
@if(isset($alert))
<div class="alert alert-danger" role="alert">
{{ $alert }}
</div>

@endif
<form method="POST">
    {{csrf_field()}}
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-light text-dark" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <img class="senai" src="img/senai.png" alt="Logo Senai" title="Imagem Logo Senai" />

                                <h5 class="text-d mb-5">Realize seu login</h5>

                                <div class="form-outline form-white mb-4">
                                    <input id="typeEmailX" class="form-control form-control-lg" name="nif" id="email "  placeholder="Digite seu NIF ou Email" />
                                    <label class="form-label" for="typeEmailX">NIF/ Email</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="typePasswordX" name="senha" class="form-control form-control-lg" id="password" placeholder="Digite sua senha" />
                                    <label class="form-label" for="typePasswordX">Senha</label>
                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-dark-50" href="#!">Esqueceu senha?</a></p>

                                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <button class="btn btn-danger btn-lg px-5" type="submit">Entrar</button>
                                    </li>
                                </ul>
                                <p class="mb-0">Não possui conta? <a href="cadastro" class="text-dark-50 fw-bold">Cadastrar</a></p>

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