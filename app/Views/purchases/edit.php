<div class="container-fluid px-4">
    <div class="mb-3">
        <h5 class="mt-4">Edit Purchase</h5>
        <a href="/purchases" class="btn btn-sm btn-danger mb-2">Back</a>
    </div>

    <form action="/purchases/<?= $purchase['id'] ?>" method="post">
        <input type="hidden" name="_method" value="PUT" />
        <div class="mb-3">
            <label for="invoice_no" class="from-label">Invoice_no</label>
            <input type="text" name="invoice_no" id="invoice_no" class="form-control" value="<?= $purchase['invoice_no'] ?>">
            <?php if (isset($errors) and $errors->getError('invoice_no')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('invoice_no'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="Invoice_date" class="from-label">Invoice_date</label>
            <input type="text" name="invoice_date" id="invoice_date" class="form-control" value="<?= $purchase['invoice_date'] ?>">
            <?php if (isset($errors) and $errors->getError('invoice_date')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('invoice_date'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="supplier_id" class="from-label">Supplier_id</label>
            <input type="text" name="supplier_id" id="supplier_id" class="form-control" value="<?= $purchase['supplier_id'] ?>">
            <?php if (isset($errors) and $errors->getError('supplier_id')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('supplier_id'); ?>
                </div>

                <div class="mb-3">
                    <label for="grand_total" class="from-label">Grand_total</label>
                    <input type="text" name="grand_total" id="grand_total" class="form-control" value="<?= $purchase['grand_total'] ?>">
                    <?php if (isset($errors) and $errors->getError('grand_total')) { ?>
                        <div class='text-danger mt-2'>
                            <?= $error = $errors->getError('grand_total'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="user_id" class="from-label">User_id</label>
                            <input type="text" name="user_id" id="user_id" class="form-control" value="<?= $purchase['user_id'] ?>">
                            <?php if (isset($errors) and $errors->getError('user_id')) { ?>
                                <div class='text-danger mt-2'>
                                    <?= $error = $errors->getError('user_id'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>

                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <input type="submit" value="Perbarui" class="btn btn-primary ">
        </div>
    </form>
</div>