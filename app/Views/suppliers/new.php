<div class="container-fluid px-4">
    <div class="mb-3">
        <h5 class="mt-4">Add Supplier</h5>
        <a href="/suppliers" class="btn btn-sm btn-danger mb-2">Back</a>
    </div>
    <div class="mb-3">
        <form action="/suppliers" method="post" enctype="multipart/form-data">
            <label for="code" class="from-label">Code</label>
            <input type="text" name="code" id="code" class="form-control" value="<?= set_value('code') ?>">
            <?php if (isset($errors) and $errors->getError('code')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('code'); ?>
                </div>
            <?php } ?>
    </div>
    <div class="mb-3">
        <label for="name" class="from-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="<?= set_value('name') ?>">
        <?php if (isset($errors) and $errors->getError('name')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('name'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="status_id" class="from-label">Status_id</label>
        <input type="text" name="status_id" id="status_id" class="form-control" value="<?= set_value('status_id') ?>">
        <?php if (isset($errors) and $errors->getError('status_id')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('status_id'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="image_upload" class="form-label">Image</label>
        <input type="file" name="image_upload" id="image_upload" class="form-control" value="<?= set_value('image_upload') ?>">
        <?php if (isset($errors) and $errors->getError('image_upload')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $error->getError('image_upload'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <input type="submit" value="Save" class="btn btn-primary">
    </div>
</div>
</form>