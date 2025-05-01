<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Нове бронювання</h1>
<?php if(session()->getFlashdata('errors')): ?>
  <ul class="errors"><?php foreach(session('errors') as $e): ?><li><?= esc($e) ?></li><?php endforeach ?></ul>
<?php endif ?>

<form action="<?= site_url('bookings') ?>" method="post">
  <?= csrf_field() ?>
  <label>ID клієнта</label>
  <input name="member_id" type="number" value="<?= set_value('member_id') ?>">
  <label>ID сесії</label>
  <input name="session_id" type="number" value="<?= set_value('session_id') ?>">
  <label>Дата бронювання</label>
  <input name="booking_date" type="datetime-local" value="<?= set_value('booking_date') ?>">
  <button type="submit">Зберегти</button>
  <a href="<?= site_url('bookings') ?>">Скасувати</a>
</form>

<?= $this->endSection() ?>
