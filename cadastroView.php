<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <title>Cadastro</title>
</head>

<body>
    <header>
    <div class="row">
            <div class="col-md-6">
                
                <a href="javascript:history.go(-1)" class="btn btn-danger">
                    <i class="bi bi-house-door-fill"></i> 
                    Voltar
                </a>
            </div>
    </div>
    </header>
    <section class="container">
        
            
        </div>
        <div class="row">
            <div class="col-12 md-12">

                <form method="post" action="../projetodozero/bdConexao/cadastroValidacao.php">
                    <h1>Cadastre-se</h1>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control email" id="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Nunca compartilhe seu email com ninguém</div>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control senha" id="senha">
                    </div>
                    
                    <div class="md-3">
                            <label for="confirmPassword" class="form-label">Confirme sua Senha</label>
                            <input id="confirmSenha" class="form-control confirmSenha" type="password" placeholder="Digite sua senha novamente">
                            <input type="checkbox" class="form-check-input" id="checkSenha" onclick="verSenha()">
                            <label class="form-check-label" for="checkSenha">Ver senhas</label>
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="password" class="form-control nome" id="nome">
                    </div>
                    <div class="mb-3">
                            <label for="date-of-birth" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control dataNascimento" id="date-of-birth">
                    </div>
                    <div class="md-3">
                            <label for="gender" class="form-label">Gênero</label>
                            <select id="gender" class="form-control sexo">
                                <option disabled selected>Selecione o Gênero</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                                <option>Outros</option>
                            </select>
                    </div>
                    <br>
                    <div class="md-3">
                            <label for="motherName" class="form-label">Nome Materno</label>
                            <input type="text" id="motherName" class="form-control nomeMaterno">
                    </div>
                    <br>
                    <div class="md-3">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" name="cpfCadastro" id="cpf" class="form-control cpf" placeholder="Digite seu CPF">
                        </div>
                    <br>
                    <div class="md-3">
                            <label for="telCelular" class="form-label">Telefone Celular</label>
                            <input type="tel" id="telCelular" class="form-control telCelular" placeholder="(XX) XXXXX-XXXX">
                    </div>
                    <br>
                    <div class="md-3">
                            <label for="telFixo" class="form-label">Telefone Fixo</label>
                            <input type="tel" id="telFixo" class="form-control telFixo" placeholder="(XX) XXXX-XXXX">
                        </div>
                    <br>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-box-arrow-right"></i> Submit
                    </button>
                    <a type="button" href="../projetodozero/loginView.php" class="btn btn-terciary">
                         Já possui cadastro? Entre
                    </a>
                </form>

            </div>
        </div>
    </section>

    <script>
        function verSenha(){
            var senha = document.getElementById("senha");
            var confirmSenha = document.getElementById("confirmSenha")
            var verSenha = document.getElementById("checkSenha");
            
            if(verSenha.checked){
                senha.type = 'text';
                confirmSenha.type = 'text';
            }else{
                senha.type = 'password';
                confirmSenha.type = 'password';
            }
        }
    </script>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

</body>

</html>