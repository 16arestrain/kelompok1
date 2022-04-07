<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Expires" content="Mon, 20 Dec 1998 01:00:00 GMT" />
	<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />

    <title>Kelompok 1 | Tugas UI UX</title>

    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/840/840523.png">
    <!-- <a href="https://www.flaticon.com/free-icons/nuclear" title="nuclear icons">Nuclear icons created by Freepik - Flaticon</a> -->

    <link rel="stylesheet" href="lib/mainpage.css">

</head>
    <body>

        <!-- Main Box -->

        <div id="mainbox">
            <div id="header">
                <div id="titlelogo">
                    <img src="img/icon.png" width="60px" />
                </div>
                <div id="title">
                    <div id="titlemain">Sistem Informasi Jabfung Pengadaan Barang/Jasa</div>
                    <div id="titlesub">Tugas PJJ Web Programing Angkatan I 2022  |  Kelompok 1</div>
                </div>
                <div id="clearfloat"></div>
            </div>

            <!-- Menu -->

            <div id="menu">
                <div id="menuleft">
                    <ul>
                        <li id="datapengguna"><a href="datapengguna.php">Data Pengguna</a></li>
                        <li id="datapaket"><a href="datapaket.php">Data Paket</a></li>
                        <li id="penugasan"><a href="penugasan.php">Penugasan</a></li>
                        <li id="kelolapaket"><a href="kelolapaket.php">Kelola Paket</a></li>
                        <li id="laporan">
                            <a href="#">Laporan</a>
                            <ul>
                                <li id="kinerjajabfung"><a href="kinerjajabfung.php">Kinerja Jabfung</a></li>
                                <li id="paketberjalan"><a href="paketberjalan.php">Paket Berjalan</a></li>
                                <li id="paketselesai"><a href="paketselesai.php">Paket Selesai</a></li>
                            </ul>
                    </ul>
                </div>
                <div id="menulogout">
                    <a href="loginpage.php"><input id="logoutbtn" type="submit" value="Log Out"></a>
                </div>
                
            </div>
            <div id="content">
                <div id="create">
                    <a href="popuppenugasan.php"><input type="submit" id="btnCreate" value="Create"></a>
                </div>
                <div id="isicontent">
                    <table border=1 width=100%>
                        <tr>
                            <td>ID Paket</td>
                            <td>Nama Paket</td>
                            <td>Jadwal Awal</td>
                            <td>Jadwal AKhir</td>
                            <td>PAGU</td>
                            <td>Metode Pengadaan</td>
                            <td>Status</td>
                            <td>Operation</td>
                        </tr>
                        <tr>
                            <td>contoh ID Paket 1</td>
                            <td>contoh Nama Paket 1</td>
                            <td>contoh Jadwal Awal 1</td>
                            <td>contoh Jadwal AKhir 1</td>
                            <td>Contoh PAGU 1</td>
                            <td>Contoh Metode Pengadaan 1</td>
                            <td>Contoh Status 1</td>
                            <td>Contoh Operation 1</td>
                        </tr>
                        <tr>
                            <td>contoh ID Paket 2</td>
                            <td>contoh Nama Paket 2</td>
                            <td>contoh Jadwal Awal 2</td>
                            <td>contoh Jadwal AKhir 2</td>
                            <td>Contoh PAGU 2</td>
                            <td>Contoh Metode Pengadaan 2</td>
                            <td>Contoh Status 2</td>
                            <td>Contoh Operation 2</td>
                        </tr>
                        <tr>
                            <td>contoh ID Paket 3</td>
                            <td>contoh Nama Paket 3</td>
                            <td>contoh Jadwal Awal 3</td>
                            <td>contoh Jadwal AKhir 3</td>
                            <td>Contoh PAGU 3</td>
                            <td>Contoh Metode Pengadaan 3</td>
                            <td>Contoh Status 3</td>
                            <td>Contoh Operation 3</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="footer">
                <div id="namaaplikasi">Sistem Informasi Jabfung Pengadaan Barang/Jasa | SIPBang</div>
                <div id="signature">Kelompok 1 | 2022</div>
                <div id="sosmed">
                    <a href="#"><img id="instagram" src="img/instagram.png" value="Instagram"></a>
                    <a href="#"><img id="facebook" src="img/facebook.png" value="Facebook"></a>
                    <a href="#"><img id="twitter" src="img/twitter.png" value="Twitter"></a>
                    <a href="#"><img id="telegram" src="img/telegram.png" value="Telegram"></a>
                </div>
            </div>
        </div>
    </body>
</html>