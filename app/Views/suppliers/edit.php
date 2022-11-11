<div class="container-fluid px-4">
    <div class="mb-3">
        <h5 class="mt-4">Edit Supplier</h5>
        <a href="/suppliers" class="btn btn-sm btn-danger mb-2">Back</a>
    </div>

    <form action="/suppliers/<?= $supplier['id'] ?>" method="post">
        <input type="hidden" name="_method" value="PUT" />
        <div class="mb-3">
            <label for="code" class="from-label">Code</label>
            <input type="text" name="code" id="code" class="form-control" value="<?= $supplier['code'] ?>">
            <?php if (isset($errors) and $errors->getError('code')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('code'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="name" class="from-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?= $supplier['name'] ?>">
            <?php if (isset($errors) and $errors->getError('name')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('name'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="status_id" class="from-label">Status_id</label>
            <input type="text" name="status_id" id="status_id" class="form-control" value="<?= $supplier['status_id'] ?>">
            <?php if (isset($errors) and $errors->getError('status_id')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('status_id'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <input type="submit" value="Perbarui" class="btn btn-primary ">
        </div>
    </form>
</div>