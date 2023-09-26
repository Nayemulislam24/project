<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendence System</title>
    <link rel="stylesheet" href="inc/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
</head>

<body>
    <section class="container">
        <div class="well text-center">
            <h2>Student Attendence System</h2>
        </div>
        <div class="well text-center" style="font-size: 20px;">
            <strong>Date:</strong><?php $cur_date = date('Y-m-d');
                                    echo $cur_date; ?>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>
                    <a href="#" class="btn btn-success">Add Student</a>

                    <a href="#" class="btn btn-info pull-right">View All</a>
                </h2>
            </div>
            <div class="panel-body">
                <form action="" method="post">
                    <table class="table table-striped" id="dataTable">
                        <thead>
                            <tr>
                                <th width="25%">Sereal</th>
                                <th width="25%">Student Name</th>
                                <th width="25%">Roll</th>
                                <th width="25%">Attendence</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Nayemul Islam</td>
                                <td>01</td>
                                <td>
                                    <input class="form-check-input" type="radio" name="Attend" value="Attend" id="">P
                                    <input class="form-check-input" type="radio" name="Absent" value="Attend" id="">A
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Nayemul Islam</td>
                                <td>02</td>
                                <td>
                                    <input class="form-check-input" type="radio" name="Attend" value="Attend" id="">P
                                    <input class="form-check-input" type="radio" name="Absent" value="Attend" id="">A
                                </td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Nayemul Islam</td>
                                <td>03</td>
                                <td>
                                    <input class="form-check-input" type="radio" name="Attend" value="Attend" id="">P
                                    <input class="form-check-input" type="radio" name="Absent" value="Attend" id="">A
                                </td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>Nayemul Islam</td>
                                <td>04</td>
                                <td>
                                    <input class="form-check-input" type="radio" name="Attend" value="Attend" id="">P
                                    <input class="form-check-input" type="radio" name="Absent" value="Attend" id="">A
                                </td>
                            </tr>
                        </tbody>

                    </table>
                    <button class="btn btn-primary text-center" type="submit">Submit</button>
                </form>
            </div>
        </div>
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
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                // dom: 'Bfrtip',
                // buttons: [
                //     'copyHtml5',
                //     'excelHtml5'

                // ]
            });
        });
    </script>
</body>

</html>