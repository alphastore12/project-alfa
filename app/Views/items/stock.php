<div class="container-fluid px-4">
    <h5 class="mt-4" class="text-center">Stock Barang</h5>
</div>
<a href="/items/new" class="btn btn-sm btn-primary mb-2">tambah barang</a>
<?php foreach (session()->getFlashdata() as $key => $flash) :  ?>
    <div class="alert alert-<?= $key ?>" role="alert">
    <?= $flash ?>
</div>
<?php endforeach;  ?>
<div class="table-responsive container">
    <table class="table table-bordered">
        <thead class="card-body">
            <tr class="text-center">
                <th scope="col" style="background-color: #8dd7cf;">Id Barang</th>
                <th scope="col" style="background-color: #8dd7cf;">Nama Barang</th>
                <th scope="col" style="background-color: #8dd7cf;">Deskripsi</th>
                <th scope="col" style="background-color: #8dd7cf;">Stock</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <th scope="row">1</th>
                <td>Sukaraya 10kg</td>
                <td>Beras </td>
                <td>100</td>
            </tr>
            <tr class="text-center">
                <th scope="row">2</th>
                <td>Gulaku 500g</td>
                <td>Gula</td>
                <td>75</td>
            </tr>
            <tr class="text-center">
                <th scope="row">3</th>
                <td>Bimoli 2L</td>
                <td>Minyak Makan</td>
                <td>125</td>
            </tr>
            <tr class="text-center">
                <th scope="row">4</th>
                <td>Sunslik 100ml</td>
                <td>Shampoo</td>
                <td>50</td>
            </tr>
            <tr class="text-center">
                <th scope="row">5</th>
                <td>Nuvo 30g</td>
                <td>Sabun </td>
                <td>25</td>
            </tr>
        </tbody>
</div>