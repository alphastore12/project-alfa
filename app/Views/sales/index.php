<div class="container-fluid px-4">
    <h3 class="mt-4" class="text-center">Sales</h3>
    <a href="/sales/new" class="btn btn-sm btn-primary mb-2">Add Sales</a>
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
                <th scope="col" style="background-color: #8dd7cf;">Invoice_no</th>
                <th scope="col" style="background-color: #8dd7cf;">Invoice_date</th>
                <th scope="col" style="background-color: #8dd7cf;">Customer_id</th>
                <th scope="col" style="background-color: #8dd7cf;">Grand_total</th>
                <th scope="col" style="background-color: #8dd7cf;">User_id</th>
                <th scope="col" style="background-color: #8dd7cf;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($sales)) : ?>
                <tr>
                    <td colspan=3>Tidak ada data</td>
                </tr>
            <?php else : ?>
                <?php foreach ($sales as $index => $sale) : ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $sale->invoice_no ?></td>
                        <td><?= $sale->invoice_date ?></td>
                        <td><?= $sale->customer_id ?></td>
                        <td><?= $sale->grand_total ?></td>
                        <td><?= $sale->user_id ?></td>
                        <td>
                            <form action="/sales/delete" method="post">
                                <input type="hidden" name="_method" value="DELETE" />
                                <input type="hidden" name="id" value="<?= $sale->id ?>" />
                                <a href="/sales/<?= $sale->id ?>/edit" class="btn btn-sm btn-warning">Ubah</a>
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