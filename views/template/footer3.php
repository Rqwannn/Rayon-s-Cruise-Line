<footer div class="footer-3">
    <div class="footer-left">
        <h5>Copyright © 2020-2025 <span>Rayon's.</span> <span>All rights reserved.</span></h5>
    </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="<?php echo BASEURL; ?>/js/JsBarcode.pharmacode.min.js"></script>
    <script src="<?php echo BASEURL; ?>/js/ajax.js"></script>
    <script src="<?php echo BASEURL; ?>/js/Jquery.js"></script>
        <!-- DataTables -->
    <script src="<?php echo BASEURL; ?>/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo BASEURL; ?>/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo BASEURL; ?>/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo BASEURL; ?>/js/responsive.bootstrap4.min.js"></script>
    <script>
    $(function () {
        $('#myTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });

        $('#myTable2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
    });
    </script>
</body>
</html>