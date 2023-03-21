<?php
session_start();
$sessionlevel = 1;
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/random.php';
include '../../config/function-fakultas.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Fakultas</h4>
            <a href="javascript:void(0)" class="btn btn-primary btn-icon-text btn-md mt-0" onClick="addFakultas()">
              <i class="mdi mdi-plus-box btn-icon-prepend"></i> Fakultas
            </a>
            <br>
            <br>
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="fakultas">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Fakultas</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                <?php list_fakultas(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Jurusan</h4>
            <a href="javascript:void(0)" class="btn btn-success btn-icon-text btn-md mt-0" onClick="addJurusan()">
              <i class="mdi mdi-plus-box btn-icon-prepend"></i> Jurusan
            </a>
            <br>
            <br>
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="jurusan">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Fakultas</th>
                    <th>Nama Jurusan</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
              <?php list_jurusan(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- add fakultas -->
    <div class="modal fade" id="modalFakultas" tabindex="-1" role="dialog" aria-labelledby="modalFakultasLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalFakultasLabel"></h5>
          </div>
          <form role="form" method="post" action="index.php">
            <div class="modal-body">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nama Fakultas</label>
                <input class="form-control" type="text" name="fakultas" id="fakultas">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" onclick="closeFakultas()">Close</button>
              <button type="submit"  value="submitfklts" name="submitfklts" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--add jurusan -->
    <div class="modal fade" id="modalJurusan" tabindex="-1" role="dialog" aria-labelledby="modalJurusanLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalJurusanLabel"></h5>
          </div>
          <form role="form" method="post" action="index.php">
            <div class="modal-body">
              <div class="form-group mb-3">
                <label for="fakultas">Pilih Fakultas</label>
                <select class="form-control" id="fakultas" name="fakultas">
                <?php list_fakultas2(); ?>
                </select>
              </div>
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nama Jurusan</label>
                <input class="form-control" type="text" name="jurusan" id="jurusan">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" onclick="closeJurusan()">Close</button>
               <button type="submit"  value="submitjrsn" name="submitjrsn" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>


  <script>
    function addFakultas(){
    // $('#add-group').trigger("reset");
      $('#modalFakultasLabel').html("Tambah Fakultas");
      $('#modalFakultas').modal('show');
    // $('#id').val('');
    }

    
    function closeFakultas() { 
      $('#modalFakultas').modal('hide');
      $('#editFakultas').modal('hide');
    }

    function addJurusan(){
    // $('#add-group').trigger("reset");
      $('#modalJurusanLabel').html("Tambah Jurusan");
      $('#modalJurusan').modal('show');
    // $('#id').val('');
    }


    
    function closeJurusan() { 
      $('#modalJurusan').modal('hide');
      $('#editJurusan').modal('hide');
    }

  </script>
<?php


//tambah fakultas
if (isset($_POST['submitfklts'])) {
addFakultas($_POST['fakultas']);

} else{
 echo ""; 
}


// tambah jurusan
if (isset($_POST['submitjrsn'])) {

 addJurusan($_REQUEST['fakultas'],$_REQUEST['jurusan']);
} else {
  echo '';
}




// update fakultas
if (isset($_POST['updatefakultas'])) {
  
 updatefakultas($_REQUEST['id'], $_REQUEST['fakultas']);
} else {
  echo '';
}


// hapus fakultas 
if (isset($_GET['hapusf'])) {


  deletefakultas($_REQUEST['hapusf']);
} else {
  echo '';
}




// update jurusan
if (isset($_POST['updatejurusan'])) {

 updatejurusan($_REQUEST['id'], $_REQUEST['jurusan']);
} else {
  echo '';
}


// hapus jurusan
if (isset($_GET['hapusj'])) {

  deletejurusan($_REQUEST['hapusj']);
} else {
  echo '';
}
?>

<?php if(@$_SESSION['sukses']){ ?>
      <script>
        Swal.fire({            
          icon: 'success',                   
          title: 'Sukses',    
          text: 'Data  berhasil dihapus',                        
          timer: 3000,                                
          showConfirmButton: false
        })
      </script>
      <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['sukses']); } ?>
    <script>
      $('.hapus_fakultas').on('click',function(){
        var getLink = $(this).attr('href');
        Swal.fire({
          title: "Yakin hapus fakultas?",            
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          confirmButtonText: 'Ya',
          cancelButtonColor: '#3085d6',
          cancelButtonText: "Batal"
        }).then(result => {
        //jika klik ya maka arahkan ke proses.php
          if(result.isConfirmed){
            window.location.href = getLink
        }
        })
      return false;
      });
      $('.hapus_jurusan').on('click',function(){
        var getLink = $(this).attr('href');
        Swal.fire({
          title: "Yakin hapus jurusan?",            
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          confirmButtonText: 'Ya',
          cancelButtonColor: '#3085d6',
          cancelButtonText: "Batal"
        }).then(result => {
        //jika klik ya maka arahkan ke proses.php
          if(result.isConfirmed){
            window.location.href = getLink
        }
        })
      return false;
      });
      </script>

<?php
include '../../template/footer.php';
?>