<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Сесія #<?= $session['id'] ?></h1>
<ul>
  <li><strong>Клас (ID):</strong> <?= esc($session['class_id']) ?></li>
  <li><strong>Тренер (ID):</strong> <?= esc($session['trainer_id']) ?></li>
  <li><strong>Дата:</strong> <?= esc($session['session_date']) ?></li>
  <li><strong>Початок:</strong> <?= esc($session['start_time']) ?></li>
  <li><strong>Кінець:</strong> <?= esc($session['end_time']) ?></li>
</ul>
<a href="<?= site_url('sessions') ?>" class="btn">← Назад</a>

<?= $this->endSection() ?>
