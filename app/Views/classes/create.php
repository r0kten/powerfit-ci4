<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Новий клас</h1>
<?php if(session()->getFlashdata('errors')): ?>
  <ul class="errors"><?php foreach(session('errors') as $e): ?><li><?= esc($e) ?></li><?php endforeach ?></ul>
<?php endif ?>

<form action="<?= site_url('classes') ?>" method="post">
  <?= csrf_field() ?>
  <label>Назва</label>
  <input name="name" value="<?= set_value('name') ?>">
  <label>Ємність</label>
  <input name="capacity" type="number" value="<?= set_value('capacity') ?>">
  <button type="submit">Зберегти</button>
  <a href="<?= site_url('classes') ?>">Скасувати</a>
</form>

<?= $this->endSection() ?>
