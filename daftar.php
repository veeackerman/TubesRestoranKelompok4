<?php 
  $title = 'Table Reservation';
  require_once 'includes/header.php';
?>

<br><br>
<h1 class="text-center fw-bold bayanganteks">SIGN UP</h1>

<div class="container p-5">
  <div class="row">
    <div class="col-sm"></div>
    <div class="p-2 col">   
    <div class="bg-dark text-white gradient bayangan rcorners1">   
        <div class="container">
            <div class="row">
            <div class="col">
                <label for="namadepan" class="form-label">Nama depan</label>
                <input id="namadepan" class="form-control mb-3" type="text" aria-label="default input example">

                <label for="namabelakang" class="form-label">Nama belakang</label>
                <input id="namabelakang" class="form-control mb-3" type="text" aria-label="default input example">

                <label for="email" class="form-label">Email</label>
                <input id="email" class="form-control mb-3" type="email" placeholder="example@example.com" aria-label="default input example">

                <label for="telepon" class="form-label">Nomor hp</label>
                <input id="telepon" class="form-control mb-3" type="tel"placeholder="08XX XXXX XXXX" aria-label="default input example">
            
                <label for="email" class="form-label">Password</label>
                <input id="email" class="form-control mb-4" type="password" aria-label="default input example"> 
                
                <form method="get" action="terdaftar.php">
                <div class="mb-1 d-grid gap-2 mx-auto">
                    <button type="submit" class="btn btn btn-warning">Daftar</button>
                </div>
                </form>

            </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-sm"></div>
  </div>
</div>

<?php require_once 'includes/footer.php';?>
