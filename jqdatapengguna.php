<?php
	session_start();
	
	include "lib/dbconnectsipbang.php";
	
	$sql = "SELECT * FROM pengguna";
	$res = runsqltext($sql);
	$numrow = mysqli_num_rows($res);
	
	if ($numrow < 1) {
		echo "Data pengguna tidak tersedia";
	} else {		
		echo "
			  <b>Daftar Pengguna</b>
			  <table>
				  <tr><td>
					  <input type='button' id='btnTambahPengguna' value='Tambah' />
					  <input type='button' id='btnEditPengguna' value='Edit' />
					  <input type='button' id='btnHapusPengguna' value='Hapus' />
					  <input type='button' id='Refresh' value='Refresh' />
				  </td></tr>
			  </table>
			  <hr />			  
			  <table id='tblDataPengguna' class='display' style='width:100%'>
				<thead>
					<tr>
                        <td>#</td>
                        <td>NIP</td>
                        <td>Nama</td>
                        <td>Jabatan</td>
					</tr>
				</thead>
				<tbody>
			 ";
		
		while ($row = mysqli_fetch_row($res)) {
			echo "
				 <tr>
					<td width='20px'><input type='radio' name='rdoDP' value=".$row[0]." /></td>
                    <td>".$row[1]."</td>
					<td>".$row[2]."</td>
					<td>".$row[3]."</td>
				</tr>
				 ";
		}
		
		echo "</tbody>
			</table>";
	}
?>