<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Тренери</h1>
<a href="<?= site_url('trainers/create') ?>" class="btn">+ Новий тренер</a>

<table class="table">
  <thead><tr><th>ID</th><th>Ім’я</th><th>Спеціалізація</th><th>Дії</th></tr></thead>
  <tbody>
  <?php foreach($trainers as $t): ?>
    <tr>
      <td><?= $t['id'] ?></td>
      <td><?= esc($t['name']) ?></td>
      <td><?= esc($t['specialization']) ?></td>
      <td>
        <a href="<?= site_url("trainers/{$t['id']}") ?>">👁</a>
        <a href="<?= site_url("trainers/{$t['id']}/edit") ?>">✏️</a>
        <form action="<?= site_url("trainers/{$t['id']}") ?>" method="post" style="display:inline">
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
