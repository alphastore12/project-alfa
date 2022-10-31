<div class="container-fluid px-4">
    <div class="mb-3">
        <h5 class="mt-4">Add Purchases</h5>
        <a href="/items" class="btn btn-sm btn-danger mb-2">Back</a>
    </div>

    <form action="/items/<?= $item['id'] ?>" method="post">
        <input type="hidden" name="_method" value="PUT" />
        <div class="mb-3">
            <label for="id" class="from-label">Id</label>
            <input type="int" name="id" id="id" class="form-control" value="<?= $item['id'] ?>">
            <?php if (isset($errors) and $errors->getError('id')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('id'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="invoiceno" class="from-label">Invoice no</label>
            <input type="int" name="invoiceno" id="invoiceno" class="form-control" value="<?= $item['invoiceno'] ?>">
            <?php if (isset($errors) and $errors->getError('invoiceno')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('invoiceno'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="invoicedate" class="from-label">invoice date</label>
            <input type="datetime" name="invoicedate" id="invoicedate" class="form-control" value="<?= $item['invoicedate'] ?>">
            <?php if (isset($errors) and $errors->getError('invoicedate')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('invoicedate'); ?>
                </div>
            <?php } ?>
            </div>
        <div class="mb-3">
            <label for="supplierid" class="from-label">supplier id</label>
            <input type="int" name="supplierid" id="supplierid" class="form-control" value="<?= $item['supplierid'] ?>">
            <?php if (isset($errors) and $errors->getError('supplierid')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('supplierid'); ?>
                </div>
            <?php } ?>
            </div>
        <div class="mb-3">
            <label for="grandtotal" class="from-label">grand total</label>
            <input type="int" name="grandtotal" id="grandtotal" class="form-control" value="<?= $item['grandtotal'] ?>">
            <?php if (isset($errors) and $errors->getError('grandtotal')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('grandtotal'); ?>
                </div>
            <?php } ?>
            </div>
        <div class="mb-3">
            <label for="userid" class="from-label">user id</label>
            <input type="int" name="userid" id="userid" class="form-control" value="<?= $item['userid'] ?>">
            <?php if (isset($errors) and $errors->getError('userid')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('userid'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <input type="submit" value="Perbarui" class="btn btn-primary ">
        </div>
    </form>
</div>