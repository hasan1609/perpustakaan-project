<?php
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-anggota.php';
include '../../config/function-buku.php';
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
        <a href="../anggota_baru/index.php" class="card bg-gradient-warning card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h5 class="font-weight-normal mb-3"> Anggota Baru</h5>
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
            <h4 class="card-title">Pengguna Baru</h4>
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
				labels: ["Teknik", "Fisip", "Ekonomi", "Pertanian"],
				datasets: [{
					label: '',
					data: [8,7,7,7
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
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
				labels: ["Teknik", "Fisip", "Ekonomi", "Pertanian"],
				datasets: [{
					label: '',
					data: [8,7,7,7
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
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