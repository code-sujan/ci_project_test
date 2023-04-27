<?php
?>

<html>
<head>
    <link rel="stylesheet" href="<?= base_url('library/bootstrap/css/bootstrap.min.css') ?>">
</head>

<body>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-3">
            <form action="" method="post">
                <div class="card">
                    <div class="card-header bg-primary-subtle"><span class="card-title">Add New User</span></div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Phone No</label>
                            <input type="text" class="form-control" name="phone_no">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"> Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
</body>
</html>
