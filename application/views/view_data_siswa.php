<html>
    <head>
        <title>DATA SISWA</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/data_siswa.css">
    </head>

    <body>
        <center>
        <marquee scrollamount="15"><h4>TERIMA KASIH !!! DATA ANDA AKAN KAMI PROSES :)</h4></marquee>
            <div id="data">
                <header>
                <h3>DATA SISWA</h3>
                <hr>
                </header>
            
            <section>
            <table>
                <tr>
                    <th>NAMA SISWA</th>
                    <th>:</th>
                    <td><?= $Nama; ?></td>
                </tr>

                <tr>
                    <th>NIS</th>
                    <th>:</th>
                    <td><?= $NIS; ?></td>
                </tr>

                <tr>
                    <th>KELAS</th>
                    <th>:</th>
                    <td><?= $KELAS; ?></td>
                </tr>

                <tr>
                    <th>TANGGAL LAHIR</th>
                    <th>:</th>
                    <td><?= $Lahir; ?></td>
                </tr>

                <tr>
                    <th>TEMPAT LAHIR</th>
                    <th>:</th>
                    <td><?= $Tempat; ?></td>
                </tr>

                <tr>
                    <th>ALAMAT</th>
                    <th>:</th>
                    <td><?= $Alamat; ?></td>
                </tr>

                <tr>
                    <th>JENIS KELAMIN</th>
                    <th>:</th>
                    <td><?= $Jen_kel; ?></td>
                </tr>

                <tr>
                    <th>AGAMA</th>
                    <th>:</th>
                    <td><?= $Agama; ?></td>
                </tr>

                <tr>
                <td colspan="3" align="center">
                        <a href="<?= base_url('datasiswa');?>"><h4>BACK</h4></a>
                    </td>
                </tr>
            </table>
            </section>
            </div class="clear">
        </center>
    </body>
</html>