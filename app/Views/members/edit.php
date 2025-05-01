<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Редагувати клієнта #<?= $member['id'] ?></h1>

<?php if(session()->getFlashdata('errors')): ?>
  <ul class="text-red-600">
    <?php foreach(session('errors') as $err): ?>
      <li><?= esc($err) ?></li>
    <?php endforeach ?>
  </ul>
<?php endif ?>

<form action="<?= site_url("members/{$member['id']}") ?>" method="post" class="mt-4 space-y-4">
  <?= csrf_field() ?>
  <input type="hidden" name="_method" value="PUT">
  <div>
    <label>Ім’я</label>
    <input type="text" name="first_name" value="<?= set_value('first_name', $member['first_name']) ?>">
  </div>
  <div>
    <label>Прізвище</label>
    <input type="text" name="last_name" value="<?= set_value('last_name', $member['last_name']) ?>">
  </div>
  <div>
    <label>Email</label>
    <input type="email" name="email" value="<?= set_value('email', $member['email']) ?>">
  </div>
  <div>
    <label>Телефон</label>
    <input type="text" name="phone" value="<?= set_value('phone', $member['phone']) ?>">
  </div>
  <div>
    <label>План (ID)</label>
    <input type="number" name="membership_plan_id" value="<?= set_value('membership_plan_id', $member['membership_plan_id']) ?>">
  </div>
  <button type="submit" class="btn btn-primary">Оновити</button>
  <a href="<?= site_url('members') ?>" class="btn btn-outline">Скасувати</a>
</form>

<?= $this->endSection() ?>
