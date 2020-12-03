<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            font-family: Nunito, Poppin !important;  
        }
        div{
            margin: 20px;
            font-family: Nunito, Poppin !important;  
        }
    </style>

</head>

<body>

    <div class="container">

        <?php
        include '../connect.php';
        ini_set('display_errors', "1");
        $id =  $_GET['id'];
        $query = "SELECT  * FROM setoran where id=$id";
        $sql = mysqli_query($conn, $query);
        if ($sql) {
            if ($r = mysqli_fetch_array($sql)) {
                echo $r['correction'];
                if ($r['correction'] == null || $r['correction'] =="") {
                    echo '<div style="text-align:center;"><h1>Belum Ada Koreksi Dari Guru</h1></div>';
                }
            } else {
                echo '<div style="text-align:center;"><h1>404<br>Terjadi Kesalahan Saat Mengambil Data Dari Server</h1></div>';
            }
        } else {
            echo '<div style="text-align:center;"><h1>404<br>Terjadi Kesalahan Saat Mengambil Data Dari Server</h1></div>';
            // echo mysqli_error($conn);
        }


        ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>