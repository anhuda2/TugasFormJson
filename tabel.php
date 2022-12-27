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
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Asal</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Wali Murid</th>
                    <th scope="col">Pendidikan Terakhir</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
        <?php


        $conn = mysqli_connect('localhost', 'root', '', 'form_data');

        if (mysqli_connect_error()) {
            echo 'Gagal melakukan koneksi ke Database : ' . mysqli_connect_error();
        } else {

        }


        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM data");
        while ($result = mysqli_fetch_array($query)) {
        ?>
                <tr>
                    <td>
                        <?php echo $no++; ?>
                    </td>
                    <td>
                        <?php echo $result['nama']; ?>
                    </td>
                    <td>
                        <?php echo $result['alamat']; ?>
                    </td>
                    <td>
                        <?php echo $result['asal']; ?>
                    </td>
                    <td>
                        <?php echo $result['jenkel']; ?>
                    </td>
                    <td>
                        <?php echo $result['wali']; ?>
                    </td>
                    <td>
                        <?php echo $result['pendidikan']; ?>
                    </td>
                    <td>
                        <?php echo $result['email']; ?>
                    </td>
                </tr>
                <?php
        }
                ?>
            </tbody>
        </table>
    </div>
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