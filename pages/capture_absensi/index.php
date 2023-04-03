<?php 
session_start();
if($_SESSION['level'] == '1'){
    $jabatan = "Admin" ;
}elseif($_SESSION['level'] == '2'){
    $jabatan = "Anggota" ;
}elseif($_SESSION['level'] == '3'){
    $jabatan = "Dosen" ;
}else{
    $jabatan = "TU" ;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>
        Perpustakaan | Login
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            background-color: #f1f1f1;
            margin:20px;
        }
		.col-sm-6 {
			background-color: #ffffff;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
		}
    </style>
</head>

<body>
    <div class="container justify-content-center align-items-center">
        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="../../images/logo_yayasan.png" alt="Image" width="100">
            </div>
            <div class="col-sm-4 text-center d-flex justify-content-center align-items-center flex-column">
                <h3>Absensi Perpustakaan UKIP Makassar</h3>
            </div>
            <div class="col-sm-4 text-center">
                <img src="../../images/logo.png" alt="Image" width="100">
            </div>
        </div>
    </div>
    <br>
    <div class="container justify-content-center align-items-center">
        <form action="../../config/capture.php" method="post">
            <input type="hidden" id="username" name="username" value="<?= $_SESSION['username'] ?>">
            <input type="hidden" name="jabatan" value="<?= $jabatan ?>">
            <input type="hidden" name="nama" value="<?= $_SESSION['username'] ?>">
            <input type="hidden" name="image" class="image-tag">
            <div class="row">
                <div class="col-sm-6 text-center p-5">
                    <div id="my_camera" name="my_camera" class="text-center"></div>
                    
                    <input type="button" class="btn btn-primary mt-3" value="Ambil Gambar" onClick="take_snapshot()">
                    <!-- <video id="video" width="400" height="350" autoplay></video> -->
                </div>
                <div class="col-sm-6 text-center p-5">
                    <div id="results"></div>
                    <button type="submit" id="save" class="btn btn-primary m-3">Submit</button>
                    <br>
                    <!-- <canvas id="canvas" name="canvas" width="200" height="200" style="border:1px solid #000000;"></canvas> -->
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script>

        Webcam.set({
            width: 470,
            height: 350,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        
        Webcam.attach( '#my_camera' );
        
        function take_snapshot() {
            Webcam.snap( function(data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<img src="'+data_uri+'" width="470" height="350" style="border:1px solid #000000;"/>';
            });
        }
        // function capture() {
        // // dapatkan video dan canvas element
        // var video = document.getElementById('video');
        // var canvas = document.getElementById('canvas');
        
        // // dapatkan context untuk canvas
        // var context = canvas.getContext('2d');
        
        // // ambil gambar dari video dan tampilkan pada canvas
        // context.drawImage(video, 0, 0, canvas.width, canvas.height);
        // }

        // // minta izin untuk mengakses kamera
        // navigator.mediaDevices.getUserMedia({ video: true })
        // .then(function(stream) {
        //     // tampilkan video pada element video
        //     var video = document.getElementById('video');
        //     video.srcObject = stream;
        // })
        // .catch(function(error) {
        //     console.log('Terjadi kesalahan:', error);
        // });

        
    </script>
</body>

</html>