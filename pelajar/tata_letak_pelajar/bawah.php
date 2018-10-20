
    <script src="../../web/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="../../web/js/plugins.js"></script>
    <script src="../../web/js/main.js"></script>

    <script src="../../web/js/lib/data-table/datatables.min.js"></script>
    <script src="../../web/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../../web/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../../web/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="../../web/js/lib/data-table/jszip.min.js"></script>
    <script src="../../web/js/lib/data-table/pdfmake.min.js"></script>
    <script src="../../web/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../../web/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../../web/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../../web/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="../../web/js/lib/data-table/datatables-init.js"></script>
    <script>
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
          $('#bootstrap-data-table2').DataTable();
          $('#bootstrap-data-table3').DataTable();
        } );
    </script>

<script type="text/javascript">
$(document).ready(function() {
    // Hanya untuk non numeric untuk input angka.
    $("input[type=number]").keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
            ((e.keyCode == 65 || e.keyCode == 86 || e.keyCode == 67) && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});
</script>