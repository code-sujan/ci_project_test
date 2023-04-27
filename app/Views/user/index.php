<?php ?>
<html>
<head>
    <link rel="stylesheet" href="<?= base_url('library/bootstrap/css/bootstrap.min.css')?>">
</head>
<body>
<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header bg-primary-subtle">
            <span class="card-title">Student List</span>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone No</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($students as $item){?>
                <tr>
                    <td><?= $item["id"]?></td>
                    <td><?= $item["name"]?></td>
                    <td><?= $item["email"]?></td>
                    <td><?= $item["address"]?></td>
                    <td><?= $item["phone_no"]?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>
