<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <title>TIDC DATA MANAGEMENT</title>
    <title>TiDC Loan Management</title>
  </head>
  <body class="bg-body-secondary">
    <a class="go-to-home px-2" href="home.php">Click To Go Home</a>
    <h2 class="px-2">TIDC Loan Management</h2>
    <p class="px-2">Here you can manage all data and add new loan</p>
    <div class="container-fluid d-flex justify-content-between">
        <div class="input-group w-25">
          <div class="input-group">
            <input class="form-control border-end-0 border rounded-pill" type="search" id="example-search-input" placeholder="Search Here">
            <span class="input-group-append">
                <button class="btn btn-outline-secondary border-bottom-0 border rounded-pill ms-n5" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
        </div>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addLoanModal" style="height: fit-content;">Add Loan</button>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#installmentModal" style="height: fit-content;">Installment</button>
    </div>
    <?php include  './utilities/addloan.php'?>
    <?php include  './utilities/installment.php'?>
    <?php include  './utilities/loantable.php'?>
    <?php include  './utilities/profile.php'?>
    <?php include  './utilities/update.php'?>
    <?php include  './utilities/paymenthistory.php'?>
    <div class="container-fluid d-flex justify-content-between">
      <button type="button" class="btn btn-dark" style="height: fit-content;">Print</button>
      <nav aria-label="..." id="pagination">
        <!-- <ul class="pagination pagination-sm" id="pagination">
          <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul> -->
      </nav>
      <input type="hidden" value="1" name="currentPage" id="currentPage">
      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#interestCalModal" style="height: fit-content;">Interest Calculator</button>
      <?php include  './utilities/interestCal.php'?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/scriptajax.js"></script>
  </body>
</html>
