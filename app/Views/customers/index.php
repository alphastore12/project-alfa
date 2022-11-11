<div class="container-fluid px-4">
    <h3 class="mt-4" class="text-center">Customers</h3>
    <a href="/customers/new" class="btn btn-sm btn-primary mb-2">Add Customer</a>
</div>


<div class="table-responsive container">
    <?php foreach (session()->getFlashdata() as $key => $flash) :  ?>
        <div class="alert alert-<?= $key ?>" role="alert">
            <?= $flash ?>
        </div>
    <?php endforeach;  ?>
    <table class="table table-bordered">
        <thead class="card-body">
            <tr class="text-center">
                <th scope="col" style="background-color: #8dd7cf;">No</th>
                <th scope="col" style="background-color: #8dd7cf;">Image</th>
                <th scope="col" style="background-color: #8dd7cf;">code</th>
                <th scope="col" style="background-color: #8dd7cf;">name</th>
                <th scope="col" style="background-color: #8dd7cf;">Status_id</th>
                <th scope="col" style="background-color: #8dd7cf;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($customers)) : ?>
                <tr>
                    <td colspan=3>Tidak ada data</td>
                </tr>
            <?php else : ?>
                <?php foreach ($customers as $index => $customer) : ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><img src="/assets/images/<?= $customer->image_name ?>" alt="Image for" <?= $customer->name ?> width="200px" /></td>
                        <td><?= $customer->code ?></td>
                        <td><?= $customer->name ?></td>
                        <td><?= $customer->status_id ?></td>
                        <td>
                            <form action="/customers/delete" method="post">
                                <input type="hidden" name="_method" value="DELETE" />
                                <input type="hidden" name="id" value="<?= $customer->id ?>" />
                                <a href="/customers/<?= $customer->id ?>/edit" class="btn btn-sm btn-warning">Ubah</a>
                                <button type="submit" class="btn btn-sm btn-danger btnHapus">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script type="text/javascript">
    var btns = document.getElementsByClassName("btnHapus")
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", showAlertHapus, false)
    }

    function showAlertHapus(event) {
        if (!confirm("Yakin hapus data ini?")) {
            event.preventDefault()
        }
    }
</script>