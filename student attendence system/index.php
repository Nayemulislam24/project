<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendence System</title>
    <link rel="stylesheet" href="inc/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <section class="container">
        <div class="well text-center">
            <h2>Student Attendence System</h2>
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
                    <table class="table table-striped">
                        <tr>
                            <th width="25%">Sereal</th>
                            <th width="25%">Student Name</th>
                            <th width="25%">Roll</th>
                            <th width="25%">Attendence</th>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Nayemul Islam</td>
                            <td>01</td>
                            <td>
                            <input class="form-check-input" type="radio" name="Attend" value="Attend" id="">P
                            <input class="form-check-input" type="radio" name="Absent" value="Attend" id="">A
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="well text-center">
            <h2>Nayemul Islam</h2>
        </div>
    </section>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>