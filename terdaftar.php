<?php 
  $title = 'terdaftar';
  require_once 'includes/header.php';
  require_once 'db/conn.php';
  if(isset($_POST['daftar'])){
      $namadepan=$_POST['namadepan'];
      $namabelakang=$_POST['namabelakang'];
      $email=$_POST['email'];
      $telepon=$_POST['telepon'];
      $password=$_POST['password'];
      //Memanggil fungsi//
      $isterdaftar=$crud->insertdaftar($namadepan, $namabelakang, $email, $telepon, $password);
      if($isterdaftar){
          echo '<h2>Berhasil!</h2>';
      }
      else{
          echo '<h2>Gagal memuat</h2>';
      }
  }

?>

<form method="get" action="index.php">
<button type="signup" class="btn btn-link mb-5 p-3">Masuk</button>
</form>

<?php require_once 'includes/footer.php';?>
