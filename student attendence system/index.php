<?php
include 'inc/header.php';
include 'lib/database.php';
?>
<?php
$object = new Database();
$sql = "SELECT * FROM students";
$data_show = $object->select($sql);
// echo $sql;
// die();
?>
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
                    <?php
                    if ($data_show) {
                        while($rows = $data_show->fetch_assoc())
                    
                    ?>
                    <tr>
                        <td><?php echo $rows['id']?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['roll']?></td>
                        <td>
                            <input class="form-check-input" type="radio" name="Attend" value="<?php echo $rows['roll']?>" id="">P
                            <input class="form-check-input" type="radio" name="Absent" value="<?php echo $rows['roll']?>" id="">A
                        </td>
                    </tr>
                    <?php
                    }else{
                        echo '<p style="  background-color: #ffcccc;color: #ff0000;   padding: 10px; border: 1px solid #ff0000; border-radius: 4px; margin-bottom: 10px;">Sorry,Data not available !!.</p>';

                    } ?>

                </tbody>

            </table>
            <button class="btn btn-primary text-center" type="submit">Submit</button>
        </form>
    </div>
</div>
<?php
include 'inc/footer.php';
?>