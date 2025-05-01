<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Плани абонементів</h1>
<a href="<?= site_url('membership_plans/create') ?>" class="btn">+ Новий план</a>

<table class="table">
  <thead><tr><th>ID</th><th>Назва</th><th>Ціна</th><th>Тривалість (днів)</th><th>Дії</th></tr></thead>
  <tbody>
  <?php foreach($membership_plans as $p): ?>
    <tr>
      <td><?= $p['id'] ?></td>
      <td><?= esc($p['name']) ?></td>
      <td><?= esc($p['price']) ?></td>
      <td><?= esc($p['duration']) ?></td>
      <td>
        <a href="<?= site_url("membership_plans/{$p['id']}") ?>">👁</a>
        <a href="<?= site_url("membership_plans/{$p['id']}/edit") ?>">✏️</a>
        <form action="<?= site_url("membership_plans/{$p['id']}") ?>" method="post" style="display:inline">
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
