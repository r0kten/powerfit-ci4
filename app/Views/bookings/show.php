<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Бронювання #<?= $booking['id'] ?></h1>
<ul>
  <li><strong>Клієнт (ID):</strong> <?= esc($booking['member_id']) ?></li>
  <li><strong>Сесія (ID):</strong> <?= esc($booking['session_id']) ?></li>
  <li><strong>Дата бронювання:</strong> <?= esc($booking['booking_date']) ?></li>
</ul>
<a href="<?= site_url('bookings') ?>" class="btn">← Назад</a>

<?= $this->endSection() ?>
