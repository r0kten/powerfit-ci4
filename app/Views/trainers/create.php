<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Новий тренер</h1>
<?php if(session()->getFlashdata('errors')): ?>
  <ul class="errors">
    <?php foreach(session('errors') as $e): ?><li><?= esc($e) ?></li><?php endforeach ?>
  </ul>
<?php endif ?>

<form action="<?= site_url('trainers') ?>" method="post">
  <?= csrf_field() ?>
  <label>Ім’я</label>
  <input name="name" value="<?= set_value('name') ?>">
  <label>Спеціалізація</label>
  <input name="specialization" value="<?= set_value('specialization') ?>">
  <button type="submit">Зберегти</button>
  <a href="<?= site_url('trainers') ?>">Скасувати</a>
</form>

<?= $this->endSection() ?>
