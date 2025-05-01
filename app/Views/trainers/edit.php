<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Редагувати тренера #<?= $trainer['id'] ?></h1>
<?php if(session()->getFlashdata('errors')): ?>
  <ul class="errors"><?php foreach(session('errors') as $e): ?><li><?= esc($e) ?></li><?php endforeach ?></ul>
<?php endif ?>

<form action="<?= site_url("trainers/{$trainer['id']}") ?>" method="post">
  <?= csrf_field() ?>
  <input type="hidden" name="_method" value="PUT">
  <label>Ім’я</label>
  <input name="name" value="<?= set_value('name', $trainer['name']) ?>">
  <label>Спеціалізація</label>
  <input name="specialization" value="<?= set_value('specialization', $trainer['specialization']) ?>">
  <button type="submit">Оновити</button>
  <a href="<?= site_url('trainers') ?>">Скасувати</a>
</form>

<?= $this->endSection() ?>
