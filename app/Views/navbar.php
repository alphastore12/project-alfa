<nav class="navbar" style="background-color: #8dd7cf;">
  <!-- Navbar content -->
  <div class="container-fluid">
    <a class="navbar-brand">
      <h1> Laris Store </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/pages/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/items">Items</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/purchases">Purchases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/suppliers">Suppliers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/customers">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/sales">Sales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/users">Users</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ml-auto">
          <form action="/sessions/logout" method="post">
            <button type="submit" class="btn btn-link nav-link">Logout</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>