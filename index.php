<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/image/logo1.jpg" />
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <title>Barangay Login QR Code</title>
</head>


<body class="img js-fullheight">
    <section class="ftco-section bg-section">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <video id="preview" width="50%" class="text-center"></video>
                </div>

            </div>
        </div>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5 mt-20">
                    <h2 class="heading-section">Barangay Login Using QR Code</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <!-- titLE  -->

                        <div class="form-group">
                            <label class="text-white b h5 bold-text mb-30">Please Click Open Cam to Scan QR Code</label>
                        <span name="text" id="text" readonly placeholder="Scan Now!"></span>
                            <button class="h1 btn btn-primary text-center text-black form-control" onclick="startCam();">Open Cam</button>

                        </div>







                    </div>
                </div>
            </div>
        </div>



        </footer>
    </section>


    <footer class="page-footer font-small blue text-center fixed-bottom bg-white">


        <div class="footer-copyright text-center">© 2021 Copyright:
            <a href="#Group1">Group 2</a>
        </div>

        <script>
            function startCam() {
                let scanner = new Instascan.Scanner({
                    video: document.getElementById('preview')
                });
                Instascan.Camera.getCameras().then(function(cameras) {
                    if (cameras.length > 1) {
                        scanner.start(cameras[1]);
                    } else {
                        alert('No camera found');
                    }
                }).catch(function(e) {
                    console.error(e);
                });
                // scanner.start(cameras[1]);
                scanner.addListener('scan', function(c) {
                        if (c === 'vincent') {
                            window.location = 'https://vincefernandez.github.io/pages/homepage.html';
                            scanner.stop();

                        } else if (c === 'employee1') {
                            window.location = 'https://vincefernandez.github.io/pages/homepage.html';
                            scanner.stop();
                        } else if (c === 'employee2') {
                            window.location = 'https://vincefernandez.github.io/pages/homepage.html';
                            scanner.stop();
                        } else {
                            alert('No Qr Code Data ');
                            scanner.stop();
                        }


                    }

                );

            }

            function StopCam() {
                alert('No camera found');
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
