        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- <script src="../../vendors/chart.js/Chart.min.js"></script> -->
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../../vendors/progressbar.js/progressbar.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
  <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>

  <!-- select option -->
  <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->

  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/dashboard.js"></script>
  <script src="../../js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
    <!-- Custom js for this page-->
    <script src="../../js/chart.js"></script>

    <script>
      $(document).ready(function () {
        $('#example').DataTable({
          "ordering": false
        });
      });
    </script>
        <script>
      $(document).ready(function () {
        $('#jurusan').DataTable({
          "ordering": false
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        $('#fakultas').DataTable({
          "ordering": false
        });
      });
    </script>
        <script>
      $(document).ready(function () {
        $('#absensi2').DataTable({
          "ordering": false
        });
      });
    </script>

    <script>
      function readAddBuku(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            $('#previewAdd').attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
        }
      }
      $("#gambarAdd").change(function() {
        readAddBuku(this);
      });
      function readEditBuku(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            $('#previewEdit').attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
        }
      }
      $("#gambarEdit").change(function() {
        readEditBuku(this);
      });
    </script>

    <script>
        new MultiSelectTag('pilihBuku')  // id
    </script>


</body>