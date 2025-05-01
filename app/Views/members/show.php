<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Дані клієнта #<?= $member['id'] ?></h1>
<ul class="list-disc pl-5">
  <li><strong>Ім’я:</strong> <?= esc($member['first_name'].' '.$member['last_name']) ?></li>
  <li><strong>Email:</strong> <?= esc($member['email']) ?></li>
  <li><strong>Телефон:</strong> <?= esc($member['phone']) ?></li>
  <li><strong>План:</strong> <?= esc($member['membership_plan_id']) ?></li>
</ul>

<a href="<?= site_url('members') ?>" class="btn btn-outline mt-4">← Назад до списку</a>

<?= $this->endSection() ?>
