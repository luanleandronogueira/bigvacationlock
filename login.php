<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<script>
  // Verifique se a página foi recarregada (atualizada)
  if (performance.navigation.type === 1) {
    // Redirecione para a URL desejada
    window.location.href = 'login.php';
  }
</script>


<style>

    body {
        background-color: #004854;
        font-family: "Raleway", sans-serif !important; 
    }


</style>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <center><img src="assets/images/logo.png" width="75px" alt=""></center>
                    <h3 class="text-center mt-3">BIG Vacation Lock</h3>
                  </div>

                  <?php if (isset($_GET['status']) == 'password_invalid') { ?>

                    <div class="alert alert-danger text-center alert-dismissible fade show mt-4" role="alert">
                      <i class="bi bi-check-circle me-1"></i>
                        Password Invalid
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                  <?php } ?>

                  <?php if (isset($_GET['status1']) && isset($_GET['status1']) == 'blocked') { ?>

                    <div class="alert alert-warning text-center alert-dismissible fade show mt-4" role="alert">
                      <i class="bi bi-check-circle me-1"></i>
                      <strong>User blocked</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                  <?php } ?>

                  <form method="post" action="providers/authentic_user.php" class="row g-3 needs-validation" novalidate>

                    <div class="col-12 text-center">
                      <label for="email_user" class="form-label "><strong>Nickname/Login:</strong></label>
                      <div class="input-group has-validation">
                        <input type="email" id="email_user" name="email_user" class="form-control text-center" required>
                        <div class="invalid-feedback">Insira o eu usuário</div>
                      </div>
                    </div>

                    <div class="col-12 text-center">
                      <label for="password_user" class="form-label "><strong>Password:</strong></label>
                      <input type="password" id="password_user" name="password_user" class="form-control text-center" required>
                      <div class="invalid-feedback">Insira a Senha.</div>
                    </div>


                    <div class="col-12 mt-5">
                      <button class="btn btn-outline-secondary w-100 " name="enviar_requisicao" type="submit">Log</button>
                    </div>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

</body>

</html>