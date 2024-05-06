<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <title>Login</title>
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
                <form method="post" action="../projetodozero/bdConexao/loginValidacao.php">
                    <h1>Login</h1>
                    <br>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control email" id="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Nunca compartilhe seu email com ninguém</div>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control senha" name="senha" id="senha">
                        <input type="checkbox" class="form-check-input" id="checkSenha" onclick="verSenha()">
                            <label class="form-check-label" for="checkSenha">Ver senhas</label>
                    </div>
                    <br>
                    <button type="submit" value="Enviar" name="submit" class="btn btn-primary">
                        <i class="bi bi-box-arrow-right"></i> Entrar
                    </button>
                    <a href="../projetodozero/cadastroView.php" type="button" class="btn btn-terciary">
                         <u>Não possui cadastro? Clique aqui!</u>
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