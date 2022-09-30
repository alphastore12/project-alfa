  <div class="container-fluid px-4">
    <h5 class="mt-4" class="text-center">Stock Barang</h5>
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
                  <input type="text" name="namabarang" placeholder="Nama Barang" class="form-control" required>
                  <br>
                  <input type="text" name="deskripsi" placeholder="Deskripsi Barang" class="form-control" required>
                  <br>
                  <input type="number" name="stock" class="form-control" placeholder="Stock" required>
                  <br>
                  <button type="submit" class="btn btn-primary" name="addnewbarang">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
  </table>


  </div>