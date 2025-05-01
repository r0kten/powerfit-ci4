<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Редагувати клас #<?= $class['id'] ?></h1>
<?php if(session()->getFlashdata('errors')): ?>
  <ul class="errors"><?php foreach(session('errors') as $e): ?><li><?= esc($e) ?></li><?php endforeach ?></ul>
<?php endif ?>

<form action="<?= site_url("classes/{$class['id']}") ?>" method="post">
  <?= csrf_field() ?>
  <input type="hidden" name="_method" value="PUT">
  <label>Назва</label>
  <input name="name" value="<?= set_value('name', $class['name']) ?>">
  <label>Ємність</label>
  <input name="capacity" type="number" value="<?= set_value('capacity', $class['capacity']) ?>">
  <button type="submit">Оновити</button>
  <a href="<?= site_url('classes') ?>">Скасувати</a>
</form>

<?= $this->endSection() ?>
