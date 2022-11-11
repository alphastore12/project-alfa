<div class="container-fluid px-4">
    <div class="mb-3">
        <h5 class="mt-4">Add Sale</h5>
        <a href="/sales" class="btn btn-sm btn-danger mb-2">Back</a>
    </div>
    <div class="mb-3">
        <form action="/sales" method="post" enctype="multipart/form-data">
            <label for="invoice_no" class="from-label">Invoice_no</label>
            <input type="text" name="invoice_no" id="invoice_no" class="form-control" value="<?= set_value('invoice_no') ?>">
            <?php if (isset($errors) and $errors->getError('invoice_no')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('invoice_no'); ?>
                </div>
            <?php } ?>
    </div>
    <div class="mb-3">
        <label for="invoice_date" class="from-label">Invoice_date</label>
        <input type="text" name="invoice_date" id="name" class="form-control" value="<?= set_value('invoice_date') ?>">
        <?php if (isset($errors) and $errors->getError('invoice_date')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('invoice_date'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="customer_id" class="from-label">Customer_id</label>
        <input type="text" name="customer_id" id="customer_id" class="form-control" value="<?= set_value('customer_id') ?>">
        <?php if (isset($errors) and $errors->getError('customer_id')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('customer_id'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="grand_total" class="from-label">Grand_total</label>
        <input type="text" name="grand_total" id="grand_total" class="form-control" value="<?= set_value('grand_total') ?>">
        <?php if (isset($errors) and $errors->getError('grand_total')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('grand_total'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="user_id" class="from-label">User_id</label>
        <input type="text" name="user_id" id="user_id" class="form-control" value="<?= set_value('user_id') ?>">
        <?php if (isset($errors) and $errors->getError('user_id')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('user_id'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <input type="submit" value="Save" class="btn btn-primary">
    </div>
</div>
</form>