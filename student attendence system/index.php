<?php
include 'inc/header.php';
include 'lib/database.php';
// include "config/config.php";
?>

<?php
$object = new Database();
$sql = "SELECT * FROM students";
$data_show = $object->select($sql);
// echo "<pre>";
// var_dump($data_show);
// echo "</pre>";
// die();
?>
<div class="panel panel-default">
    <div class="panel-heading">
        
        <h2>
            <a href="#addEmployeeModal" data-toggle="modal" class="btn btn-success">Add Student</a>

            <a href="#" class="btn btn-info pull-right">View All</a>
        </h2>
    </div>
    <div class="panel-body">
        <form action="" method="post">
            <table class="table table-striped" id="dataTable">
                <thead>
                    <tr>
                        <th width="20%">Sereal</th>
                        <th width="20%">Student Name</th>
                        <th width="20%">Roll</th>
                        <th width="20%">Attendence</th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($data_show) {
                        while ($rows = $data_show->fetch_assoc()) {

                    ?>
                            <tr>
                                <td><?php echo $rows['id']; ?></td>
                                <td><?php echo $rows['name']; ?></td>
                                <td><?php echo $rows['roll']; ?></td>
                                <td>
                                    <input class="form-check-input" type="radio" name="Attend[<?php echo $rows['roll']; ?>]" value="" id="">P
                                    <input class="form-check-input" type="radio" name="Absent[<?php echo $rows['roll']; ?>]" value="" id="">A
                                </td>
                                <td>
                                    <a onclick="edit_data('<?php echo $rows['id']; ?>')"><i class="material-icons icon" title="Edit">&#xE254;</i></a>

                                    <a onclick="delete_data('<?php echo $rows['id']; ?>')"><i class="material-icons icon" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo '<p style="  background-color: #ffcccc;color: #ff0000;   padding: 10px; border: 1px solid #ff0000; border-radius: 4px; margin-bottom: 10px;">Sorry,Data not available !!.</p>';
                    } ?>

                </tbody>

            </table>
            <button class="btn btn-primary text-center" type="submit">Submit</button>
        </form>
    </div>
   
</div>
<div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="fromreset">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Roll</label>
                            <input type="number" class="form-control" id="add_roll">
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" id="add_name" value="">
                        </div>                      
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">

                        <input type="button" class="btn btn-success" onclick="insert_sub()" value="Add">
                    </div>


                </form>
            </div>
        </div>
    </div>
<?php
include 'inc/footer.php';
?>