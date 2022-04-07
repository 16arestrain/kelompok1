<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Expires" content="Mon, 20 Dec 1998 01:00:00 GMT" />
	<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />

    <title>Kelompok 1 | Tugas UI UX</title>

    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/840/840523.png">
    <!-- <a href="https://www.flaticon.com/free-icons/nuclear" title="nuclear icons">Nuclear icons created by Freepik - Flaticon</a> -->

    <link rel="stylesheet" href="lib/popup.css">

</head>
    <body>
        <div id="datapaket" class="modal">
            <div class="modaldatapaket">
                <span id="btnDataPaket" class="btnClose"><a href="datapaket.php"><img id="closedatapaket" src="img/close.png" class="closeimage"></a></span>
                <span id="titlemessage">Create Data Paket</span>
                <table class="popupdatapaket">
                    <tr>
                        <td>Nama paket</td>
                        <td><input type="text" id="namapaket" class="inputan" /></td>
                    </tr>
                    <tr>
                        <td>Jadwal Awal</td>
                        <td><input type="text" id="jadwalawal" class="inputan" /></td>
                    </tr>
                    <tr>
                        <td>Jadwal Akhir</td>
                        <td><input type="text" id="jadwalakhir" class="inputan" /></td>
                    </tr>
                    <tr>
                        <td>Pagu</td>
                        <td><input type="text" id="pagu" class="inputan" /></td>
                    </tr>
                    <tr>
                        <td>Metode Pengadaan</td>
                        <td><input type="text" id="metodepengadaan" class="inputan" /></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><input type="text" id="statusdatapaket" class="inputan" /></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="button" id="btnDataPaket" value="Simpan" class="btnSimpan" /></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>