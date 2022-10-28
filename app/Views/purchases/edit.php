<div class="container-fluid px-4">
    <div class="mb-3">
        <h5 class="mt-4">Add Purchases</h5>
        <a href="/items" class="btn btn-sm btn-danger mb-2">Back</a>
    </div>

    <form action="/items/<?= $items['id'] ?>" method="post">
        <input type="hidden" name="_method" value="PUT" />
        <div class="mb-3">
            <label for="id" class="from-label">Id</label>
            <input type="int" name="id" id="id" class="form-control" value="<?= $items['id'] ?>">
            <?php if (isset($errors) and $errors->getError('id')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('id'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="invoice no" class="from-label">Invoice no</label>
            <input type="int" name="invoice no" id="invoice no" class="form-control" value="<?= $items['invoice no'] ?>">
            <?php if (isset($errors) and $errors->getError('invoice no')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('invoice no'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="invoice date" class="from-label">invoice date</label>
            <input type="datetime" name="invoice date" id="invoice date" class="form-control" value="<?= $items['invoice date'] ?>">
            <?php if (isset($errors) and $errors->getError('invoice date')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('invoice date'); ?>
                </div>
            <?php } ?>
            </div>
        <div class="mb-3">
            <label for="supplier id" class="from-label">supplier id</label>
            <input type="int" name="supplier id" id="supplier id" class="form-control" value="<?= $items['supplier id'] ?>">
            <?php if (isset($errors) and $errors->getError('supplier id')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('supplier id'); ?>
                </div>
            <?php } ?>
            </div>
        <div class="mb-3">
            <label for="grand total" class="from-label">grand total</label>
            <input type="int" name="grand total" id="grand total" class="form-control" value="<?= $items['grand total'] ?>">
            <?php if (isset($errors) and $errors->getError('grand total')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('grand total'); ?>
                </div>
            <?php } ?>
            </div>
        <div class="mb-3">
            <label for="user id" class="from-label">user id</label>
            <input type="int" name="user id" id="user id" class="form-control" value="<?= $items['user id'] ?>">
            <?php if (isset($errors) and $errors->getError('user id')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('user id'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <input type="submit" value="Perbarui" class="btn btn-primary ">
        </div>
    </form>
</div>