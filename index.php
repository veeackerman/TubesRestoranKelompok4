<?php 
  $title = 'Table Reservation';
  require_once 'includes/header.php';
?>


    <h1 class=text-center >Table Reservation </h1>
  <br>
  <br>
  <br>
  <br>
    <div class="container">
  <div class="row">
    <div class="col-sm">
      </div>
    <div class="col-sm">
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
      <button type="submit" class="btn btn-dark align-middle">Masuk</button>
    </form>
    </div>
    </div>
    <div class="col-sm">
      </div>
  </div>
</div>

<?php require_once 'includes/footer.php';?>
