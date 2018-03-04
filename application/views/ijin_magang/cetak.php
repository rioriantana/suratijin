<!DOCTYPE html>
<html>
<head>
	<title>Surat Magang</title>
<style type="text/css">
 	@page {
        size: A4 portrait;
        @top-center {
            content: element(header);
        }
    }
    html{
		margin-top: -30px;
    }
	#body{
		padding: 0px;
	}
	.kop{
		padding: 0px;
	}
    .tab-hal{
    	padding-left: 50px;
    	margin-top: -18px;
    }
	.isi{
		padding-top: 20px;
		padding-left: 70px;
		padding-right: 70px;
	}
	.yth{
		padding-top: 20px;
	}
	.alamat-yth{
		padding-top: 0px;
	}
	.kota-yth{
		padding-top: 0px;
	}
	.prg-1{
		padding-top: -15px;
		text-align: justify;
	}
	.prg-2{
		padding-top: 15px;
		text-align: justify;
	}
	.prg-3{
		padding-top: -15px;
		text-align: justify;
		padding-bottom: 35px;
	}
	.jabatan{
		padding-top: -15px;
	}
	.koordinator-kkn{
		margin-top: -18px;
		padding-left: 400px;
	}

	.nama-jabatan{
		padding-top: 80px;
	}
	.nama-koordinator-kkn{
		margin-top: -36px;
		padding-left: 400px;
	}
	table {
	        border-collapse:collapse;
	        border:1px solid #000;
	        font-size: 12px;
	        margin-top: 20px;
	    }
    .title{
    	font-weight: bold;
    	text-align: center;
    }
    table td {
        border:1px solid #000;
        padding: 2px;
        padding-left: 5px
    }
    td.center {
        text-align: center;
    }
</style>
<script type="text/javascript">
    window.print();
</script>
</head>
	<body>
		<div id="margin">
			<div class="header">
				<img src="<?php echo base_url();?>asset/img/header.jpg" width="100%">
			</div>
			<div class="isi">
				<?php

				foreach ($magang as $key) {

				?>
				Nomor : <br>
				Hal <div class="tab-hal"> : Permohonan Ijin Kegiatan Magang Mahasiswa (KMM)</div>
				<div class="yth">Yth. <?php echo $key->kepada; ?></div>
				<div class="alamat-yth"><?php echo $key->alamat_kepada; ?></div>
				<div class="kota-yth"><?php echo $key->tempat_penelitian; ?></div>
				<div class="prg-1"><p>Kami sampaikan dengan hormat bahwa dalam rangka menambah wawasan mahasiswa Prodi Fisika Fakultas MIPA Universitas Sebelas Maret Surakarta dan lebih mendekatkan Perguruan Tinggi dengan pengguna (stake holders), maka kami memohonkan ijin mahasiswa yang namanya tertulis di bawah ini :</p></div>
				
				<table width="100%">
					<tr> 
						<td class="center" width="30">NO</td>
						<td class="center">NAMA</td>
						<td class="center">NIM</td>
						<td class="center">TOPIK</td>
					</tr>
					<?php $i = 1; foreach ($mahasiswa as $detail) { ?>
					<tr> 
						<td class="center" width="30"><?php echo $i;?></td>
						<td><?php echo $detail->nama;?></td>
						<td class="center"><?php echo $detail->nim;?></td>
						<td><?php echo $detail->topik;?></td>
					</tr>
					<?php $i++; } ?>
				</table>

				<div class="prg-2"><p>Agar diperkenankan melaksanakan Kegiatan Magang Mahasiswa (KMM)  di <?php echo $key->nama_instansi; ?>  pada tanggal <?php $tanggal_mulai = new DateTime($key->tanggal_mulai); echo $tanggal_mulai->format('d-m-Y'); ?> s/d <?php $tanggal_selesai = new DateTime($key->tanggal_selesai); echo $tanggal_selesai->format('d-m-Y'); ?> .</p></div>
				<div class="prg-3"><p>Atas perhatian dan kerjasamanya kami mengucapkan banyak terima kasih.</p></div>
				<div>Mengetahui,</div>
				<div class="jabatan">Kepala Program Studi Fisika, <div class="koordinator-kkn">Koordinator KMM,</div></div>
				<div class="nama-jabatan">Dr. Fahru Nurosyid, M.Si. <br>NIP. 19721013 200003 1002 <div class="nama-koordinator-kkn">Dr. Eng. Kusumandari,M.Si <br>NIP. 198105182005012002</div></div>

				<?php } ?>
			</div>
		</div>
	</body>
</html>