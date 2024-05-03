<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css" />
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
                        <a href="./includes/contract.php" target="_blank" class="nav-item nav-link">Contract</a>
                    </div>
                    <div class="navbar-nav">
                        <button class="action_btn btn btn-outline-success waves-effect rounded-pill" type="button" data-bs-toggle="modal" data-bs-target="#modalLoginForm">Login</button>
                    </div>
                </div>
            </div>
        </nav>

<!-- Login Modal  -->
<div class="modal fade" id="modalLoginForm" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-7">
              <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
          </div>
          <br>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="login">Submit</button>
      </div>
    </div>
  </div>
</div>
<!-- Login Modal  -->


        <main class="main-hero-section d-flex align-items-center justify-content-center">
            <section class="left">
              <img src="./assets/images/hero-logo.png" alt="Hero Illustration">
            </section>
            <section class="right mx-4">
              <h2 class="main-header">Tripura Industrial Development Corporation Ltd.</h2>
              <p class="main-paragrah h5 font-weight-bold">Department of Industries & Commerce
                <br>
                Government of Tripura Undertaking, ISO 9001 : 2015 Certified Company
              </p>
            </section>
          </main>  

    <script type="module">
      import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js";
      import {
        getDatabase,
        ref,
        update,
      } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-database.js";
      import {
        getAuth,
        signInWithEmailAndPassword,
      } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-auth.js";
      const firebaseConfig = {
        apiKey: "AIzaSyCktbcXwf3qcHMyiQ2scAoTtq_Bt8jQDCo",
        authDomain: "final-tidc.firebaseapp.com",
        projectId: "final-tidc",
        storageBucket: "final-tidc.appspot.com",
        messagingSenderId: "541925667645",
        appId: "1:541925667645:web:31760bca8c486efb7b4b54",
        measurementId: "G-H0SKD2V1SX",
      };
      // Initialize Firebase
      const app = initializeApp(firebaseConfig);
      const database = getDatabase(app);
      const auth = getAuth(app);
      login.addEventListener("click", (e) => {
        var email = document.getElementById("email").value;
        var password = document.getElementById("inputPassword").value;
        signInWithEmailAndPassword(auth, email, password)
          .then((userCredential) => {
            const user = userCredential.user;
            const dt = new Date();
            update(ref(database, "users/" + user.uid), {
              last_Login: dt,
            });
            alert("You are Successfully Loged in (Click Ok)");
            window.location.assign("./includes/home.php");

          })
          .catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;
            alert(errorMessage);
          });
      });
    </script>
    <script src="./bootstrap/js/bootstrap.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
