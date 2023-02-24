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