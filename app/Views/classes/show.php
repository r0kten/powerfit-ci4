<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Клас #<?= $class['id'] ?></h1>
<ul>
  <li><strong>Назва:</strong> <?= esc($class['name']) ?></li>
  <li><strong>Ємність:</strong> <?= esc($class['capacity']) ?></li>
</ul>
<a href="<?= site_url('classes') ?>" class="btn">← Назад</a>

<?= $this->endSection() ?>
