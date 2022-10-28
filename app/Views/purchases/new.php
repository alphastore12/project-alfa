<div class="container-fluid px-4">
    <div class="mb-3">
        <h5 class="mt-4">Add purchases</h5>
        <a href="/purchases" class="btn btn-sm btn-danger mb-2">Back</a>
    </div>
    <div class="mb-3">
        <form action="/purchases" method="post" enctype="multipart/form-data">
            <label for="invoiceno" class="from-label">invoice no</label>
            <input type="text" name="invoiceno" id="invoiceno" class="form-control" value="<?= set_value('invoiceno') ?>">
            <?php if (isset($errors) and $errors->getError('invoiceno')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('invoiceno'); ?>
                </div>
            <?php } ?>
    </div>
    <div class="mb-3">
        <label for="invoicedate" class="from-label">invoice date</label>
        <input type="text" name="invoicedate" id="invoicedate" class="form-control" value="<?= set_value('invoicedate') ?>">
        <?php if (isset($errors) and $errors->getError('invoicedate')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('invoicedate'); ?>
            </div>
        <?php } ?>
    </div>

        <div class="mb-3">
            <label for="supplierid" class="from-label">supplier id</label>
            <input type="text" name="supplierid" id="supplierid" class="form-control" value="<?= set_value('supplierid') ?>">
            <?php if (isset($errors) and $errors->getError('supplierid')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('supplierid'); ?>
                </div>
            <?php } ?>
        </div>

        <div class="mb-3">
            <label for="grandtotal" class="from-label">grand total</label>
            <input type="text" name="grandtotal" id="grandtotal" class="form-control" value="<?= set_value('grandtotal') ?>">
            <?php if (isset($errors) and $errors->getError('grandtotal')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('grandtotal'); ?>
                </div>
            <?php } ?>
        </div>

        <div class="mb-3">
            <label for="userid" class="from-label">user id</label>
            <input type="text" name="userid" id="userid" class="form-control" value="<?= set_value('userid') ?>">
            <?php if (isset($errors) and $errors->getError('userid')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('userid'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3"><input type="submit" value="Save" class="btn btn-primary">
        </div>
    </form>
</div>