<div class="well text-center">
    <h2>Nayemul Islam</h2>
</div>
</section>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- datable library -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script> -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function sweetAlertSuccess(msg) {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: msg,
            showConfirmButton: false,
            timer: 1500
        })
    }

    function sweetAlertError(msg) {
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: msg,
            showConfirmButton: false,
            timer: 1500
        })
    }
    $(document).ready(function() {
        $('#dataTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5'

        ]
        });
    });
</script>
</body>

</html>