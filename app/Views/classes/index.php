<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Класи</h1>
<a href="<?= site_url('classes/create') ?>" class="btn">+ Новий клас</a>

<table class="table">
  <thead><tr><th>ID</th><th>Назва</th><th>Ємність</th><th>Дії</th></tr></thead>
  <tbody>
  <?php foreach($classes as $c): ?>
    <tr>
      <td><?= $c['id'] ?></td>
      <td><?= esc($c['name']) ?></td>
      <td><?= esc($c['capacity']) ?></td>
      <td>
        <a href="<?= site_url("classes/{$c['id']}") ?>">👁</a>
        <a href="<?= site_url("classes/{$c['id']}/edit") ?>">✏️</a>
        <form action="<?= site_url("classes/{$c['id']}") ?>" method="post" style="display:inline">
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
