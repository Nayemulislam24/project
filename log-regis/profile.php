<?php
include 'app\header.php';
// include 'app\database.php';
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>User Profile <span class="pull-right"><a href="index.php" class="btn btn-primary">Back</a></span></h2>
    </div>
    <div class="panel-body">
        <div style="max-width: 600px;  margin:0 auto">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" />
                </div>


                <div class="form-group">
                    <label for="user name">User Name</label>
                    <input type="text" id="username" name="ussername " class="form-control" value="" />
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" name="email " class="form-control" value="" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password " class="form-control" value="" />
                </div>



                <button type="submit" name="update" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
<?php
// include 'app\footer.php'
?>