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
        <div id="penugasan" class="modal">

            <div class="modalpenugasan">

                <div id="headpenugasan">
                    <span id="btnPenugasan" class="btnClose"><a href="penugasan.php"><img id="closedatapaket" src="img/close.png" class="closeimage"></a></span>

                    <span id="titlemessage">Create Penugasan</span>
                </div>

                <div id="formpenugasan">
                    <table class="popuppenugasan">
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
                            <td>Kepanitiaan</td>
                            <td><input type="text" id="kepanitiaan" class="inputan" /></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="button" id="btnPenugasan" value="Simpan" class="btnSimpan" /></td>
                         </tr>
                    </table>
                </div>

                <div id="checklistjabfung">
                    <table border=1 width=100% class="cljabfung">
                        <tr>
                            <td>NIP</td>
                            <td>Nama</td>
                            <td>Jabatan</td>
                            <td>checklist</td>
                        </tr>
                        <tr>
                            <td>contoh NIP 1</td>
                            <td>contoh Nama 1</td>
                            <td>contoh Jabatan 1</td>
                            <td><input type="checkbox" /></td>
                        </tr>
                        <tr>
                            <td>contoh NIP 2</td>
                            <td>contoh Nama 2</td>
                            <td>contoh Jabatan 2</td>
                            <td><input type="checkbox" /></td>
                        </tr>
                        <tr>
                            <td>contoh NIP 3</td>
                            <td>contoh Nama 3</td>
                            <td>contoh Jabatan 3</td>
                            <td><input type="checkbox" /></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>