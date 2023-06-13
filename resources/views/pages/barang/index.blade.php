@extends('layouts.main')

@section('content')

<link rel="stylesheet" href="css/fitur.css">


<div class="card-body">
    <div class="row mt-5">
        <div>
            <h3 class="mb-2">Data Barang</h3>
        </div>
    </div>
</div>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <button class="addButton" data-bs-toggle="modal" data-bs-target="#verticalycentered">Tambah</button>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-info btn-sm" type="submit">Search</button>
    </form>
  </div>
</nav>

{{-- Modal Tambah --}}
<div class="modal fade" id="verticalycentered" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3">
          <div class="col-12">
            <label for="inputId" class="form-label">ID Barang</label>
            <input type="text" class="form-control" id="inputID">
          </div>
          <div class="col-12">
            <label for="inputBarang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="inputBarang">
          </div>
          <div class="col-12">
            <label for="inputHarga" class="form-label">Harga Satuan</label>
            <input type="number" class="form-control" id="inputHarga">
          </div>
          <div class="col-12">
            <label for="inputJumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="inputJumlah" placeholder="1234">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="card">
      <table class="table datatable table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Brandon Jacob</td>
            <td>Designer</td>
            <td>28</td>
            <th><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
              <button type="button" class="btn btn-warning"><i class="bi bi-trash"></i></button></th>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Bridie Kessler</td>
            <td>Developer</td>
            <td>35</td>
            <th><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
              <button type="button" class="btn btn-warning"><i class="bi bi-trash"></i></button></th>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Ashleigh Langosh</td>
            <td>Finance</td>
            <td>45</td>
            <th><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
              <button type="button" class="btn btn-warning"><i class="bi bi-trash"></i></button></th>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Angus Grady</td>
            <td>HR</td>
            <td>34</td>
            <th><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                <button type="button" class="btn btn-warning"><i class="bi bi-trash"></i></button></th>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Raheem Lehner</td>
            <td>Dynamic Division Officer</td>
            <td>47</td>
            <th><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
              <button type="button" class="btn btn-warning"><i class="bi bi-trash"></i></button></th>
          </tr>
        </tbody>
      </table>

    </div>
  </div>

@endsection