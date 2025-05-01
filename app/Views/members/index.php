<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Клієнти</h1>
<a href="<?= site_url('members/create') ?>" class="btn btn-primary">+ Новий клієнт</a>

<table class="table-auto w-full mt-4">
  <thead>
    <tr>
      <th class="px-4 py-2">ID</th>
      <th class="px-4 py-2">Ім'я</th>
      <th class="px-4 py-2">Email</th>
      <th class="px-4 py-2">Дії</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($members as $m): ?>
      <tr>
        <td class="border px-4 py-2"><?= $m['id'] ?></td>
        <td class="border px-4 py-2"><?= esc($m['first_name'].' '.$m['last_name']) ?></td>
        <td class="border px-4 py-2"><?= esc($m['email']) ?></td>
        <td class="border px-4 py-2">
          <a href="<?= site_url("members/{$m['id']}") ?>">👁</a>
          <a href="<?= site_url("members/{$m['id']}/edit") ?>">✏️</a>
          <form action="<?= site_url("members/{$m['id']}") ?>" method="post" style="display:inline">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" onclick="return confirm('Видалити?')">🗑</button>
          </form>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<?= $this->endSection() ?>
