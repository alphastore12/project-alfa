<div class="container-fluid px-4">
    <div class="mb-3">
<h3>Customers</h3>

<a href="/customers/new" class="btn btn-sm btn-primary mb-2">Tambah Customers</a>

<?php foreach (session()->getFlashdata() as $key => $flash) : ?>
    <div class="alert alert->?= $key ?>" role="alert">
        <?= $flash ?>
</div>
<?php endforeach; ?>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Code</th>
            <th>Name</th>
            <th>Status_id</th>
            <th>Action</th>
</tr>
</thead>
<tbody>
    <?php if(empty($items)) : ?>
        <tr>
            <td colspan=3>Tidak ada data</td>
    </tr>
    <?php else: ?>
        <?php foreach($items as $index => $item): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $item->code ?></td>
                <td><?= $item->name ?></td>
                <td><?= $item->status_id ?></td>
                <td>
                    <form action="/customers/delete" method="post">
                        <input type="hidden" name="_method" value="DELETE" />
                        <input type="hidden" name="id" value="<?= $item->id ?>" />
                        <a href="/customers/<?= $item->id ?>/edit" class="btn btn-sm btn-warning">Ubah</a>
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
        </form>
        </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
        <table>
            
