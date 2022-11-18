<table class="table table-bordered table-hover">
    <table class="table table-bordered">
        <thead class="card-body">
            <tr class="text-center">
                <th scope="col" style="background-color: #8dd7cf;">No</th>
                <th scope="col" style="background-color: #8dd7cf;">Nama</th>
                <th scope="col" style="background-color: #8dd7cf;">Status</th>
                <th scope="col" style="background-color: #8dd7cf;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($suppliers)) : ?>
                <tr>
                    <td colspan=3>Tidak ada data</td>
                </tr>
            <?php else : ?>
                <?php foreach ($suppliers as $index => $item) : ?>
                    <tr id="item_<?= $item['id'] ?>">
                        <td><?= $order_number++ ?></td>
                        <td><?= $item['name'] ?></td>
                        <td>
                            <?php
                            if ($item['status_id'] == 1) :
                                echo "<span class='badge bg-primary'>Aktif</span>";
                            else :
                                echo "<span class='badge bg-danger'>Tidak Aktif</span>";
                            endif;
                            ?>
                        </td>
                        <td>
                            <form action="/suppliers/delete" method="post" class="form-delete">
                                <input type="hidden" name="_method" value="DELETE" />
                                <input type="hidden" name="id" value="<?= $item['id'] ?>" />
                                <a href="/suppliers/<?= $item['id'] ?>" class="btn btn-sm btn-info btn-lihat">Lihat</a>
                                <a href="/suppliers/<?= $item['id'] ?>/edit" class="btn btn-sm btn-warning">Ubah</a>
                                <button type="submit" class="btn btn-sm btn-danger btnHapus">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <?= $pager->links('suppliers', 'bootstrap_template') ?>