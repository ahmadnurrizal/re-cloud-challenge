<?=
$this->extend('layout/template'); // mark this file to called in template.php
?>

<?=
$this->section('content'); // Select content that you want 
?>
<div class="container ml-5 mt-3">
  <div class="row">
    <div class="col">
      <a class="btn btn-primary" href="/comics" role="button">Comic</a>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>