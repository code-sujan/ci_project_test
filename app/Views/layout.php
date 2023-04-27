<html>
<head>
    <link rel="stylesheet" href="<?= base_url('library/bootstrap/css/bootstrap.css') ?>">
</head>
<body>

<?= $this->renderSection('content')?>
<?php
$message = session()->getFlashdata('message');
if($message){
    ?>
    <div class="fixed-bottom">
        <h1><?= $message?></h1>
    </div>
    <?php
}
?>
<script src="jquery.js"></script>
<?= $this->renderSection('script')?>
</body>
</html>
