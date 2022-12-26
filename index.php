<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya&display=swap" rel="stylesheet">
</head>

<body>

    <form action="proses.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <h1>FORM PENDAFTARAN</h1>
            <img src="img/icon.png">
            <div class=" mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
            </div>
            <div class=" mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="exampleFormControlInput2" name="alamat">
            </div>
            <div class=" mb-3">
                <label for="exampleFormControlInput1" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control" id="exampleFormControlInput3" name="asal">
            </div>
            <label for="jenkel" class="form-label">Jenis Kelamin</label>
            <div class="form-check">

                <input class="form-check-input" type="radio" name="jenkel" value="l">
                <label class="form-check-label" for="laki-laki">
                    Laki-Laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenkel" value="p">
                <label class="form-check-label" for="perempuan">
                    Perempuan
                </label>
            </div><br>
            <div class=" mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Wali</label>
                <input type="text" class="form-control" id="exampleFormControlInput4" name="wali">
            </div>
            <div class=" mb-3">
                <label for="exampleFormControlInput1" class="form-label">Pendidikan Terakhir</label>
                <input type="text" class="form-control" id="exampleFormControlInput5" name="pendidikan">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput6" name="email">
            </div>



            <!-- elemen-elemen form lainnya -->
            <button type="submit" value="submit" class="btn btn-primary" onclick="submitForm()">Kirim</button>
    </form>
    </div>

    <script>
        function submitForm() {
            // Ambil nilai dari elemen-elemen form
            var nama = document.getElementById('exampleFormControlInput1').value;
            var alamat = document.getElementById('exampleFormControlInput2').value;
            var asal = document.getElementById('exampleFormControlInput3').value;
            var jenkel = document.querySelector('input[name="jenkel"]:checked').value;
            var wali = document.getElementById('exampleFormControlInput4').value;
            var pendidikan = document.getElementById('exampleFormControlInput5').value;
            var email = document.getElementById('exampleFormControlInput6').value;

            // Kirim data ke server dengan menggunakan AJAX
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    alert(this.responseText);
                }
            };
            xhttp.open("POST", "proses.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("nama=" + nama + "&alamat=" + alamat + "&asal=" + asal + "&jenkel=" + jenkel + "&wali=" + wali + "&pendidikan=" + pendidikan + "&email=" + email);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Alegreya', serif;
        }

        h1 {
            text-align: center;
        }

        img {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</body>

</html>