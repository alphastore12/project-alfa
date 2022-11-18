<div class="container-fluid px-4">
    <div class="mb-3">
        <h5 class="mt-4">Add Sales</h5>
        <a href="/sales" class="btn btn-sm btn-danger mb-2">Back</a>
    </div>

    <form action="/sales" method="post">
        <div class="mb-3">
            <label for="invoice_date" class="form-label">Invoice Date</label>
            <input type="text" name="invoice_date" id="invoice_date" class="form-control" value="<?= set_value('invoice_date') ?>">
        </div>
        <div class="mb-3">
            <label for="customer_id" class="form-label">Customer ID</label>
            <input type="text" name="customer_id" id="customer_id" class="form-control" value="<?= set_value('customer_id') ?>">
        </div>
        <div class="mb-3">
            <input type="submit" value="Save" class="btn btn-primary">
        </div>
    </form>
</div>

<script>
    $('#invoice_date').datetimepicker();
</script>