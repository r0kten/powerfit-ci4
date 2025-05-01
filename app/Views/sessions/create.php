<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Нова сесія</h1>
<?php if(session()->getFlashdata('errors')): ?>
  <ul class="errors"><?php foreach(session('errors') as $e): ?><li><?= esc($e) ?></li><?php endforeach ?></ul>
<?php endif ?>

<form action="<?= site_url('sessions') ?>" method="post">
  <?= csrf_field() ?>
  <label>ID класу</label>
  <input name="class_id" type="number" value="<?= set_value('class_id') ?>">
  <label>ID тренера</label>
  <input name="trainer_id" type="number" value="<?= set_value('trainer_id') ?>">
  <label>Дата</label>
  <input name="session_date" type="date" value="<?= set_value('session_date') ?>">
  <label>Початок</label>
  <input name="start_time" type="time" value="<?= set_value('start_time') ?>">
  <label>Кінець</label>
  <input name="end_time" type="time" value="<?= set_value('end_time') ?>">
  <button type="submit">Зберегти</button>
  <a href="<?= site_url('sessions') ?>">Скасувати</a>
</form>

<?= $this->endSection() ?>
