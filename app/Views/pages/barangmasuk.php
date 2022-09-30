<div class="container-fluid px-4">
  <h3 class="mt-4">Barang Masuk</h3>
</div>

<nav class="navbar bg-light">
  <div class="container">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Tambah Barang
    </button>

    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="table-responsive container">
  <table class="table table-bordered">
    <thead class="container">
      <tr class="text-center">
        <th scope="col" style="background-color: #8dd7cf;">Id Masuk</th>
        <th scope="col" style="background-color: #8dd7cf;">Id Barang</th>
        <th scope="col" style="background-color: #8dd7cf;">Tanggal</th>
        <th scope="col" style="background-color: #8dd7cf;">Penerima</th>
        <th scope="col" style="background-color: #8dd7cf;">Qty</th>
      </tr>
    </thead>
    <tbody>
      <tr class="text-center">
        <td>001</td>
        <td>1</td>
        <td>2022-09-18</td>
        <td>Juan</td>
        <td>150</td>
      </tr>
      <tr class="text-center">
        <td>002</td>
        <td>2</td>
        <td>2022-09-16</td>
        <td>Gauri</td>
        <td>100</td>
      </tr>
      <tr class="text-center">
        <td>003</td>
        <td>3</td>
        <td>2022-03-24</td>
        <td>Nadya</td>
        <td>100</td>
      </tr>
      <tr class="text-center">
        <td>004</td>
        <td>4</td>
        <td>2022-08-30</td>
        <td>Mega</td>
        <td>100</td>
      </tr>

      <tr class="text-center">
        <td>005</td>
        <td>5</td>
        <td>2022-07-19</td>
        <td>Gustie</td>
        <td>125</td>
      </tr>
    </tbody>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post">
              <div class="modal-body">
                <select name="barangnya" class="form-control">
                </select>
                <br>
                <input type="number" name="qty" class="form-control" placeholder="Quantity" required>
                <br>
                <input type="text" name="penerima" class="form-control" placeholder="Penerima" required>
                <br>
                <button type="submit" class="btn btn-primary" name="barangmasuk">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
</table>
</div>