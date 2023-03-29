<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #videoEl {
            transform: rotateY(180deg);
            -webkit-transform: rotateY(180deg);
        }
    </style>
</head>
<body>
    <video id="videEl" width="800" height="600" autoplay muted></video>
    <script defer src="main.js">
        async function startCamera(){
    navigator.mediaDevices.getUserMedia({video: true})
    .then(function(stream){
        videoEl.srcObject = stream;
    })
    .catch(function(err){
        console.log('Ada yang error');
        console.log(err);
    })
}

startCamera();
    </script>
</body>
</html>