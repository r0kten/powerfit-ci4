<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Редагувати план #<?= $plan['id'] ?></h1>
<?php if(session()->getFlashdata('errors')): ?>
  <ul class="errors"><?php foreach(session('errors') as $e): ?><li><?= esc($e) ?></li><?php endforeach ?></ul>
<?php endif ?>

<form action="<?= site_url("membership_plans/{$plan['id']}") ?>" method="post">
  <?= csrf_field() ?>
  <input type="hidden" name="_method" value="PUT">
  <label>Назва</label>
  <input name="name" value="<?= set_value('name', $plan['name']) ?>">
  <label>Ціна</label>
  <input name="price" type="number" step="0.01" value="<?= set_value('price', $plan['price']) ?>">
  <label>Тривалість (днів)</label>
  <input name="duration" type="number" value="<?= set_value('duration', $plan['duration']) ?>">
  <button type="submit">Оновити</button>
  <a href="<?= site_url('membership_plans') ?>">Скасувати</a>
</form>

<?= $this->endSection() ?>
