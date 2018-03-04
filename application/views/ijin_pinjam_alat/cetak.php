<!DOCTYPE html>
<html>
<head>
	<title>Surat Peminjaman Alat</title>
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
	.mahasiswa{
		padding-top: 10px;
	}
	.isi-nama{
		padding-left: 80px;
		margin-top: -18px;
	}
	.isi-nim{
		padding-left: 80px;
		margin-top: -18px;
	}
	.isi-topik{
		padding-left: 80px;
		margin-top: -18px;
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

				foreach ($pinjam_alat as $key) {

				?>
				Nomor : <br>
				Hal <div class="tab-hal"> : Permohonan Pinjam Alat </div>
				<div class="yth">Yth. <?php echo $key->kepada; ?></div>
				<div class="alamat-yth"><?php echo $key->alamat_kepada; ?></div>
				<div class="kota-yth"><?php echo $key->tempat_instansi; ?></div>
				<div class="prg-1"><p>Dengan hormat, <br> Yang bertanda tangan dibawah ini Pembimbing Skripsi, menerangkan bahwa mahasiswa tersebut dibawah ini : </p></div>
				
				<div class="mahasiswa">Nama <div class="isi-nama">: <?php echo $key->nama; ?></div></div>
				<div class="mahasiswa">NIM <div class="isi-nim">: <?php echo $key->nim; ?></div></div>
				<div class="mahasiswa">Topik <div class="isi-topik">: <?php echo $key->topik; ?></div></div>

				<div class="prg-2"><p>Adalah mahasiswa Program Studi Fisika FMIPA UNS yang akan melaksanakan Skripsi, sehubungan dengan hal tersebut mohon yang bersangkutan diberikan ijin untuk menggunakan alat berupa <?php echo $key->nama_alat; ?> di <?php echo $key->nama_instansi; ?>, mulai tanggal <?php $tanggal_mulai = new DateTime($key->tanggal_mulai); echo $tanggal_mulai->format('d-m-Y'); ?> sampai dengan <?php $tanggal_selesai = new DateTime($key->tanggal_selesai); echo $tanggal_selesai->format('d-m-Y'); ?>.</p></div>
				<div class="prg-3"><p>Demikian permohonan ini kami sampaikan, atas perhatian dan kerjasamanya kami ucapkan banyak terima kasih.</p></div>
				<div>Mengetahui,</div>
				<div class="jabatan">Kepala Program Studi Fisika, <div class="koordinator-kkn">Pembimbing,</div></div>
				<div class="nama-jabatan">Dr. Fahru Nurosyid, M.Si. <br>NIP. 19721013 200003 1002 <div class="nama-koordinator-kkn"><?php echo $key->nama_pembimbing; ?> <br>NIP. <?php echo $key->nip_pembimbing; ?></div></div>
				<?php } ?>
			</div>
		</div>
	</body>
</html>