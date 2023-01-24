<!DOCTYPE html>
<html lang="en">

<head>

    <title>AZcom</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>


    <div class="container">
        <?php include("Header.php") ?>

        <div class="menu"><a href="index.php">Beranda</a> | <a href="katalog.php">Katalog</a></div>


        <div class="content">
            <form action="" method="POST" id="katalog">
                Silahkan pilih :
                <select name="katalog" name="katalog">
                    <option disabled></option>
                    <option value="hardware">Hardware</option>
                    <option value="software">Software</option>
                </select>
                <input type="submit" value="Tampilkan">
                <table border="1" cellpadding='3' cellspacing='0' width='300px'>
                    <tr>
                        <th>No</th>
                        <th>Nama Product</th>
                        <th>Jenis</th>
                    </tr>

                    <?php


                    if (isset($_POST['katalog'])) {

                        $hardware = ['Monitor', 'CPU', 'Keyboard', 'Mouse',];
                        $software = ['Windows OS', 'Linux OS', 'Mac OS',];

                        $catalog = ($_POST['katalog']);

                        if ($catalog == 'hardware') {
                            $no = 1;
                            foreach ($hardware as $h) {
                                echo

                                "<tr>
                        <td>$no</td>
                        <td>$h</td>
                        <td>Hardware</td>
                        </tr>";
                                $no++;
                            }
                        }
                        if ($catalog == 'software') {
                            $no = 1;
                            foreach ($software as $s) {
                                echo

                                "<tr>
                        <td>$no</td>
                        <td>$s</td>
                        <td>Software</td>
                        </tr>";
                                $no++;
                            }
                        }
                    }


                    ?>
                </table>
            </form>
        </div>

        <?php include("Footer.php") ?>

    </div>
</body>

</html>