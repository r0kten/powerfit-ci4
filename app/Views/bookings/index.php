<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Бронювання</h1>
<a href="<?= site_url('bookings/create') ?>" class="btn">+ Нове бронювання</a>

<table class="table">
  <thead><tr><th>ID</th><th>Клієнт (ID)</th><th>Сесія (ID)</th><th>Дата бронювання</th><th>Дії</th></tr></thead>
  <tbody>
  <?php foreach($bookings as $b): ?>
    <tr>
      <td><?= $b['id'] ?></td>
      <td><?= esc($b['member_id']) ?></td>
      <td><?= esc($b['session_id']) ?></td>
      <td><?= esc($b['booking_date']) ?></td>
      <td>
        <a href="<?= site_url("bookings/{$b['id']}") ?>">👁</a>
        <a href="<?= site_url("bookings/{$b['id']}/edit") ?>">✏️</a>
        <form action="<?= site_url("bookings/{$b['id']}") ?>" method="post" style="display:inline">
          <?= csrf_field() ?>
          <input type="hidden" name="_method" value="DELETE">
          <button onclick="return confirm('Видалити?')">🗑</button>
        </form>
      </td>
    </tr>
  <?php endforeach ?>
  </tbody>
</table>

<?= $this->endSection() ?>
