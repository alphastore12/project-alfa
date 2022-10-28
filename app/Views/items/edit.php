<div class="container-fluid px-4">
    <div class="mb-3">
        <h5 class="mt-4">Add Item</h5>
        <a href="/items" class="btn btn-sm btn-danger mb-2">Back</a>
    </div>

    <form action="/items/<?= $items['id'] ?>" method="post">
        <input type="hidden" name="_method" value="PUT" />
        <div class="mb-3">
            <label for="name" class="from-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?= $items['name'] ?>">
            <?php if (isset($errors) and $errors->getError('name')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('name'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="unit" class="from-label">Unit</label>
            <input type="text" name="unit" id="unit" class="form-control" value="<?= $items['unit'] ?>">
            <?php if (isset($errors) and $errors->getError('unit')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('unit'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="price" class="from-label">Price</label>
            <input type="text" name="price" id="price" class="form-control" value="<?= $items['price'] ?>">
            <?php if (isset($errors) and $errors->getError('price')) { ?>
                <div class='text-danger mt-2'>
                    <?= $error = $errors->getError('price'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <input type="submit" value="Perbarui" class="btn btn-primary ">
        </div>
    </form>
</div>