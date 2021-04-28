<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/site.css">
    <title><?php echo $title ?></title>
  </head>
  <body>
<!-- //////////////////BODY/////////////////// -->

<div class="banner2 bayangan"></div>
<div class="p-3 hehe bg-dark">
<div class="container">
  <div class="row">
    <div class="col-xs">
    </div>
    <div class="p-5 col">   
    <div class="p-5 mb-2 putih text-dark gradient bayangan rcorners1">   
        <div class="container">
            <div class="row">
            <div class="col-sm">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link disabled fs-4" href="#" tabindex="-1" aria-disabled="true">New Reservation</a>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="#">Existing Reservation</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <label for="meja" class="form-label">Kapasitas meja</label>
                <select id="meja" class="form-select mb-3" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">2 Tamu</option>
                    <option value="2">4 Tamu</option>
                    <option value="3">6 Tamu</option>
                </select>

                <label for="tanggal" class="form-label">Tanggal reservasi</label>
                <input id="tanggal" class="form-control mb-3" type="date" aria-label="default input example">

                <label for="waktu" class="form-label">Waktu reservasi</label>
                <input id="waktu" class="form-control" type="time" aria-label="default input example">
                (Available: 09.00 AM - 22.00 PM)
                </select>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="tambahan" class="form-label">Pesan Tambahan</label>
                    <textarea class="form-control" id="tambahan" rows="6.5"></textarea>
                </div>
                <div class="mb-1 d-grid gap-2 mx-auto">
                    <button type="submit" class="btn btn btn-dark">Book</button>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-xs">
    </div>
  </div>
</div>
</div>
    <div class="p-3 mb-2 text-center bg-dark text-white">
    <div id="footer">
        <?php echo 'created by kelompok 1';?>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>