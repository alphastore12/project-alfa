<div class="container-fluid px-4">
    <div class="mb-3">
<h3>Purchases</h3>

<a href="/purchases/new" class="btn btn-sm btn-primary mb-2">Add Purchases</a>

<?php foreach (session()->getFlashdata() as $key => $flash) : ?>
    <div class="alert alert->?= $key ?>" role="alert">
        <?= $flash ?>
</div>
<?php endforeach; ?>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Inovice no</th>
            <th>Invoice date</th>
            <th>Supplier id</th>
            <th>Grand total</th>
            <th>User id</th>
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
                <td><?= $item->id ?></td>
                <td><?= $item->invoiceno ?></td>
                <td><?= $item->invoicedate ?></td>
                <td><?= $item->supplierid?></td>
                <td><?= $item->grandtotal ?></td>
                <td><?= $item->userid ?></td>
                <td>
                    <form action="/purchases/delete" method="post">
                        <input type="hidden" name="_method" value="DELETE" />
                        <input type="hidden" name="id" value="<?= $item->id ?>" />
                        <a href="/purchases/<?= $item->id ?>/edit" class="btn btn-sm btn-warning">Ubah</a>
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
        </form>
        </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
        <table>