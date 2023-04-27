<?= $this->extend('layout')?>

<?= $this->section('content')?>

<div class="container-fluid">
    <div class="row d-flex justify-content-center">
<div class="col-4">
    <form method="post">
        <div class="card">
            <div class="card-header">
                <span class="card-title">Add Faculty</span>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </div>

    </form>

</div>
    </div>
</div>
<?= $this->endSection()?>

