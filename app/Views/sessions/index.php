<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Сесії</h1>
<a href="<?= site_url('sessions/create') ?>" class="btn">+ Нова сесія</a>

<table class="table">
  <thead>
    <tr><th>ID</th><th>Клас</th><th>Тренер</th><th>Дата</th><th>Початок</th><th>Кінець</th><th>Дії</th></tr>
  </thead>
  <tbody>
  <?php foreach($sessions as $s): ?>
    <tr>
      <td><?= $s['id'] ?></td>
      <td><?= esc($s['class_id']) ?></td>
      <td><?= esc($s['trainer_id']) ?></td>
      <td><?= esc($s['session_date']) ?></td>
      <td><?= esc($s['start_time']) ?></td>
      <td><?= esc($s['end_time']) ?></td>
      <td>
        <a href="<?= site_url("sessions/{$s['id']}") ?>">👁</a>
        <a href="<?= site_url("sessions/{$s['id']}/edit") ?>">✏️</a>
        <form action="<?= site_url("sessions/{$s['id']}") ?>" method="post" style="display:inline">
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
