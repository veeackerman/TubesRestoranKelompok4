<?php 
  $title = 'Table Reservation';
  require_once 'includes/header.php';
?>
  <br><br>
  <div class="p-3 mb-2 bg-transparent text-white">
    <h1 class="text-center fw-bold">TABLE RESERVATION </h1>
  </div>
  <br>
  <br>

    <div class="container">
  <div class="row">
    <div class="col-sm">
        </div>
      <div class="col-sm">
      <div class="p-3 mb-2 bg-dark text-white">
          <div class="login_form">
          <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Alamat email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-warning">Masuk</button>
        <button type="signup" class="btn btn-outline-warning">Daftar</button>
        </div>
      </form>
      </div>
      </div>
      </div>
    <div class="col-sm">
      </div>
  </div>
</div>

<?php require_once 'includes/footer.php';?>
