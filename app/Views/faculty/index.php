<?= $this->extend('layout')?>

<?= $this->section('content')?>
<div class="container-fluid">
    <a href="/faculty/new" class="btn btn-primary">New</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $item):?>
            <tr>
                <td><?= $item['id']?></td>
                <td><?= $item['name']?></td>
                <td><?= $item['description']?></td>
                <td>
                    <a href="/faculty/edit?id=<?= $item['id']?>" class="btn btn-info">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>

</script>

<?= $this->endSection()?>

<?= $this->section('script')?>
<script>

</script>
<?= $this->endSection()?>
