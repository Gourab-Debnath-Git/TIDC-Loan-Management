<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <title>TIDC DATA MANAGEMENT</title>

    <title>TiDC Loan Management</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">TiDC Loan Management</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="#" class="nav-item nav-link active">Home</a>
                        <a href="../includes/contract.php" target="_blank" class="nav-item nav-link">Contract</a>
                    </div>
                    <div class="navbar-nav">
                        <button class="action_btn btn btn-outline-success waves-effect rounded-pill" type="button" data-bs-toggle="modal" data-bs-target="#modalLoginForm" onclick="window.location.assign('../index.php');">LogOut</button>
                    </div>
                </div>
            </div>
        </nav>

        <main class="main-hero-section d-flex align-items-center justify-content-center">
            <section class="left">
              <img src="../assets/images/hero-logo.png" alt="Hero Illustration">
            </section>
            <section class="right mx-4">
              <h2 class="main-header">Tripura Industrial Development Corporation Ltd.</h2>
              <p class="main-paragrah h5 font-weight-bold">Department of Industries & Commerce
                <br>
                Government of Tripura Undertaking, ISO 9001 : 2015 Certified Company
              </p>
              <button type="button" class="btn btn-info btn-lg rounded-pill" onclick="window.location.assign('./dashboard.php');">Dashboard</button>
            </section>
          </main>  
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>
