<div class="container-fluid px-4">
    <div class="mb-3">
        <h5 class="mt-4">Add Supplier</h5>
        <a href="/suppliers" class="btn btn-sm btn-danger mb-2">Back</a>
    </div>

    <form action="/suppliers" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?= set_value('name') ?>">
            <?php if (isset($errors) and $errors->getError('name')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('name'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="status_id" class="form-label">Status</label>
            <select name="status_id" class="form-control">
                <option value="1">Aktif</option>
                <option value="2">Tidak Aktif</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="save" class="btn btn-primary">
        </div>
    </form>
</div>