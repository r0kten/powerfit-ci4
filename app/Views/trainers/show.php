<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Тренер #<?= $trainer['id'] ?></h1>
<ul>
  <li><strong>Ім’я:</strong> <?= esc($trainer['name']) ?></li>
  <li><strong>Спеціалізація:</strong> <?= esc($trainer['specialization']) ?></li>
</ul>
<a href="<?= site_url('trainers') ?>" class="btn">← Назад</a>

<?= $this->endSection() ?>
