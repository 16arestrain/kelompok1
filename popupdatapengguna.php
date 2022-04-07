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
        <div id="datapengguna" class="modal">
            <div class="modaldatapengguna">
                <span id="btnDataPengguna" class="btnClose"><a href="datapengguna.php"><img id="closedatapengguna" src="img/close.png" class="closeimage"></a></span>
                <span id="titlemessage">Create Data Pengguna</span>
                <table class="popupdatapengguna">
                    <tr>
                        <td>NIP</td>
                        <td><input type="text" id="nip" class="inputan" /></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" id="nama" class="inputan" /></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td><input type="text" id="jabatan" class="inputan" /></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="button" id="btnDataPengguna" value="Simpan" class="btnSimpan" /></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>