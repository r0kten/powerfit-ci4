<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>План #<?= $plan['id'] ?></h1>
<ul>
  <li><strong>Назва:</strong> <?= esc($plan['name']) ?></li>
  <li><strong>Ціна:</strong> <?= esc($plan['price']) ?></li>
  <li><strong>Тривалість:</strong> <?= esc($plan['duration']) ?> днів</li>
</ul>
<a href="<?= site_url('membership_plans') ?>" class="btn">← Назад</a>

<?= $this->endSection() ?>
