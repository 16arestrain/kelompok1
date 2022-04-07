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
                        <li ><a href="javascript:;" onclick="MenuDataPengguna()"> Data Pengguna</a></li>
                        <li ><a href="#">Data Paket</a></li>
                        <li ><a href="#">Penugasan</a></li>
                        <li ><a href="#">Kelola Paket</a></li>
                        <li id="laporan">
                            <a href="#">Laporan</a>
                            <ul>
                                <li id="kinerjajabfung"><a href="#">Kinerja Jabfung</a></li>
                                <li id="paketberjalan"><a href="#">Paket Berjalan</a></li>
                                <li id="paketselesai"><a href="#">Paket Selesai</a></li>
                            </ul>
                    </ul>
                </div>
                         
                <div id="menulogout">
                    <li><a href="javascript:;" id="logoutbtn">Log Out</a>
                </div>
            </div>

            <!-- Content -->

            <div id="content">

                <div id="isicontent">
                    Hello <?php echo $_SESSION["user"]; ?> selamat datang
                </div>

            </div>

            <!-- Footer -->

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


		<div id="pnlDPAdd" class="modal">
			<div class="modal-content">
				<span id="btnDPAddClose" class="btnModalClose" >X</span>
				<b>Tambah Data</b>
				<table>
					<tr>
						<td>NIP:</td>
						<td><input type="text" id="DPNIPA" /></td>
					</tr>
					<tr>
						<td>Nama:</td>
						<td><input type="text" id="DPNamaA" /></td>
					</tr>
					<tr>
						<td>Jabatan:</td>
						<td><input type="text" id="DPJabatanA" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="button" id="bDPadd" value="Simpan" class="btnClick" /></td>
					</tr>
				</table>
			</div>
		</div>
		
		<div id="pnlMovieEdit" class="modal">
			<div class="modal-content">
				<span id="btnMovieEditClose" class="btnModalClose" >X</span>
				<b>Edit Data</b>
				<table>
					<tr>
						<td>Movie Name:</td>
						<td><input type="text" id="movienameE" /></td>
					</tr>
					<tr>
						<td>Genre:</td>
						<td><input type="text" id="moviegenreE" /></td>
					</tr>
					<tr>
						<td>Rent Price:</td>
						<td><input type="text" id="moviepriceE" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="button" id="bmovieedit" value="Simpan" class="btnClick" /></td>
					</tr>
				</table>
				<input type="hidden" id="movieidE" />
			</div>
		</div>

		<div id="pnlMovieDelete" class="modal">
			<div class="modal-content">
				<span id="btnMovieDeleteClose" class="btnModalClose" >X</span>
				<b>Delete Data</b>
				<table>
					<tr>
						<td>Movie Name:</td>
						<td><input type="text" id="movienameD" /></td>
					</tr>
					<tr>
						<td>Genre:</td>
						<td><input type="text" id="moviegenreD" /></td>
					</tr>
					<tr>
						<td>Rent Price:</td>
						<td><input type="text" id="moviepriceD" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="button" id="bmoviedel" value="Hapus" class="btnClick" /></td>
					</tr>
				</table>
				<input type="hidden" id="movieidD" />
			</div>
		</div>
    

