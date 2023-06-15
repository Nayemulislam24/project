<?php

// namespace appp\header;


// require __DIR__ . '/vendor/autoload.php';


include 'app/header.php';

?>








<div class="panel panel-default">
    <div class="panel-heading">
        <h2>User list <span class="pull-right"><strong>welcome!</strong>Nayem</span></h2>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <th width="20%">Serial</th>
            <th width="20%">Name</th>
            <th width="20%">Usernaem</th>
            <th width="20%">Email</th>
            <th width="20%">Action</th>

            <tr>
                <td>01</td>
                <td>Mohammad kawser</td>
                <td>kawser</td>
                <td>kawser@gmail.com</td>
                <td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
            </tr>
            <tr>
                <td>02</td>
                <td>Mohammad Alim</td>
                <td>kawser</td>
                <td>kawser@gmail.com</td>
                <td><a class="btn btn-primary" href="profile.php?id=2">View</a></td>
            </tr>
            <tr>
                <td>03</td>
                <td>Mohammad kawser</td>
                <td>kawser</td>
                <td>kawser@gmail.com</td>
                <td><a class="btn btn-primary" href="profile.php?id=3">View</a></td>
            </tr>

        </table>

    </div>
</div>
<?php
include 'app/footer.php';

?>
</body>

</html>