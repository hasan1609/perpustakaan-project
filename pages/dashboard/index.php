<?php
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-anggota.php';
include '../../config/function-buku.php';
include '../../config/function-chart-anggota.php';
include '../../config/function-chart-pengunjung.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-3 stretch-card grid-margin">
        <a href="../anggota/index.php" class="card bg-gradient-success card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h5 class="font-weight-normal mb-3"> Anggota</h5>
            <h3 class="mb-2"><?php echo anggota(); ?></h3>
          </div>
        </a>
      </div>
      <div class="col-sm-3 stretch-card grid-margin">
        <a href="../buku/index.php" class="card bg-gradient-info card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h5 class="font-weight-normal mb-3"> Buku</h5>
            <h3 class="mb-2"><?php echo buku(); ?></h3>
          </div>
        </a>
      </div>
      <div class="col-sm-3 stretch-card grid-margin">
        <a href="../pengguna_baru/index.php" class="card bg-gradient-warning card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h5 class="font-weight-normal mb-3"> Aktivasi Anggota Baru</h5>
            <h3 class="mb-2"><?php echo anggota_baru(); ?></h3>
          </div>
        </a>
      </div>
      <div class="col-sm-3 stretch-card grid-margin">
        <a href="../pinjam/index.php" class="card bg-gradient-danger card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h5 class="font-weight-normal mb-3"> Permintaan Pinjaman</h5>
            <h3 class="mb-2"><?php echo p_buku(); ?></h3>
          </div>
        </a>
      </div>
      <div class="col-sm-3 stretch-card grid-margin">
        <a href="../skbp1/index.php" class="card bg-gradient-dark card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h5 class="font-weight-normal mb-3"> SKBP 1</h5>
            <h3 class="mb-2">122837</h3>
          </div>
        </a>
      </div>
      <div class="col-sm-3 stretch-card grid-margin">
        <a href="../skbp2/index.php" class="card bg-gradient-dark card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h5 class="font-weight-normal mb-3"> SKBP 2</h5>
            <h3 class="mb-2">122837</h3>
          </div>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Anggota Baru</h4>
            <canvas id="chartPengguna"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Pengunjung</h4>
            <canvas id="chartPengunjung"></canvas>
          </div>
        </div>
      </div>
    </div>

    <script>
		var pengguna = document.getElementById("chartPengguna").getContext('2d');
    var pengunjung = document.getElementById("chartPengunjung").getContext('2d');
		var chartPengguna = new Chart(pengguna, {
			type: 'bar',
			data: {
				labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
				datasets: [{
					label: '',
					data: [<?php Januari(); ?>,<?php Februari(); ?>,<?php Maret(); ?>,<?php April(); ?>,<?php Mei(); ?>,<?php Juni(); ?>,<?php Juli(); ?>,<?php Agustus(); ?>,<?php September(); ?>,<?php Oktober(); ?>,<?php November(); ?>,<?php Desember(); ?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
          'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
          'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
          'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
          'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
    var chartPengunjung = new Chart(pengunjung, {
			type: 'bar',
			data: {
				labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
				datasets: [{
					label: '',
					data: [<?php p_Januari(); ?>,<?php p_Februari(); ?>,<?php p_Maret(); ?>,<?php p_April(); ?>,<?php p_Mei(); ?>,<?php p_Juni(); ?>,<?php p_Juli(); ?>,<?php p_Agustus(); ?>,<?php p_September(); ?>,<?php p_Oktober(); ?>,<?php p_November(); ?>,<?php p_Desember(); ?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
          'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
          'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
          'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
          'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	  </script>
      
<?php

include '../../template/footer.php';
?>