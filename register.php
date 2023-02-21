<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
 error_reporting (E_ALL ^ E_NOTICE);
function generateRandomString($length = 10)
{
  $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[random_int(0, $charactersLength - 1)];
  }
  return $randomString;
}

$noreg =  "NOREG".generateRandomString($length = 10);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Perpustakaan | Register
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="css/login/nucleo-icons.css" rel="stylesheet" />
  <link href="css/login/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="css/login/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="css/login/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Daftar</h4>
                  <p class="mb-0">Isi data diri anda !</p>
                </div>
                <div class="card-body">
                  <form role="form" method="post" action="register.php">
                    <div class="form-group mb-3">
                        <label for="example-text-input" class="form-control-label">No. Reg Perpustakaan</label>
                        <input class="form-control" type="text" name="noreg" id="noreg" value="<?php echo $noreg ;?>" disabled>
                    </div>
                     <input type="hidden" id="req_perpus" name="req_perpus" value="<?php echo $noreg ;?>">

                    <div class="form-group mb-3">
                        <label for="jurusan">Pilih Kategori</label>
                        <select class="form-control" id="level" name="level">
                        <option value="" disabled selected>Pilih Kategori</option>
                        <option value="1">Admin</option>
                        <option value="2">Dosen</option>
                        <option value="3">KA Perpus / Tata Usaha</option>
                        <option value="4">Mahasiswa</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="example-text-input" class="form-control-label">Nama</label>
                        <input class="form-control" type="text" name="nama" id="nama">
                    </div>
                    <div class="form-group mb-3">
                        <label for="example-text-input" class="form-control-label">STB</label>
                        <input class="form-control" type="text" name="stb" id="stb">
                    </div>
                    <div class="form-group mb-3">
                        <label for="fakultas">Fakultas</label>
                        <select class="form-control" id="fakultas" name="fakultas">
                        <option value="1">1</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                        <option value="1">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="example-text-input" class="form-control-label">Username</label>
                        <input class="form-control" type="text" name="username" id="username">
                    </div>
                    <div class="form-group mb-3">
                        <label for="example-text-input" class="form-control-label">Email</label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="example-text-input" class="form-control-label">Password</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Daftar</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Sudah Punya Akun?
                    <a href="index.php" class="text-primary text-gradient font-weight-bold">Masuk</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="css/login/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>

<?php

include "config/koneksi.php";

if (!empty($_POST)) {
  $req_perpus = $_POST['req_perpus'];
  $nama = $_POST['nama'];
  $STB = $_POST['stb'];
  $fklts = $_POST['fakultas'];
  $jrsn = $_POST['jurusan'];
  $almt = $_POST['alamat'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];
$sql = "INSERT INTO `anggota` (`id`, `req_perpus`, `nama`, `STB`, `fklts`, `jrsn`, `almt`, `email`, `username`, `password`, `status`, `level`, `created`) VALUES (NULL, '$req_perpus', '$nama', '$STB', '$fklts', '$jrsn', '$almt', '$email', '$username', '$password', '0', '$level', current_timestamp())";

if ($conn->query($sql) === TRUE) {

} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>