@extends('layouts.main')

@section('content')

<link rel="stylesheet" href="css/fitur.css">

<div class="card-body">
    <div class="row mt-5">
        <div>
            <h3 class="mb-2">Data Pasien</h3>
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
        <h5 class="modal-title">Tambah Data Pasien</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3">
          <div class="col-12">
            <label for="inputId" class="form-label">ID Pasien</label>
            <input type="text" class="form-control" id="inputID">
          </div>
          <div class="col-12">
            <label for="inputPasien" class="form-label">Nama Pasien</label>
            <input type="text" class="form-control" id="inputPasien">
          </div>
          <div class="col-12">
            <label for="inputTempat" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="inputTempat">
          </div>
          <div class="col-12">
            <label for="inputLahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="inputLahir">
          </div>
          <div class="col-12">
            <label for="inputHp" class="form-label">No Telephone</label>
            <input type="text" class="form-control" id="inputHp">
          </div>
          <div class="col-12">
            <label for="inputAlamat" class="form-label">Nama Alamat</label>
            <input type="text" class="form-control" id="inputAlamat">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="card mt-2">
    <div class="card-body mt-3">
      <table class="table datatable table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Pasien</th>
            <th scope="col">Tempat, Tanggal Lahir</th>
            <th scope="col">Nomor Hp</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">112</th>
            <td>Brandon Jacob</td>
            <td>Jakarta, 12 Januari 2000</td>
            <td>08xx - xxxx - xxxx</td>
            <td>Jalan Mangga No. 15, Kec Tambun Utara, Kab. Bekasi, Jawa Barat
            <th><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
              <button type="button" class="btn btn-warning"><i class="bi bi-trash"></i></button></th>
          </tr>
          <tr>
            <th scope="row">221</th>
            <td>Bridie Kessler</td>
            <td>Medan, 20 Agustus 1998</td>
            <td>08XX - XXXX - XXXX</td>
            <td>Jl. Garuda Mas, Mendungan, Pabelan, Kartasura, Sukoharjo, Jawa Tengah</td>
            <th><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
              <button type="button" class="btn btn-warning"><i class="bi bi-trash"></i></button></th>
          </tr>
          <tr>
            <th scope="row">185</th>
            <td>Ashleigh Langosh</td>
            <td>Pati, 24 Februari 2001</td>
            <td>08XX - XXXX - XXXX</td>
            <td>Jl. Garuda Mas, Mendungan, Pabelan, Kartasura, Sukoharjo, Jawa Tengah</td>
            <th><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
              <button type="button" class="btn btn-warning"><i class="bi bi-trash"></i></button></th>
          </tr>
          <tr>
            <th scope="row">451</th>
            <td>Angus Grady</td>
            <td>Pontianak, 27 Maret 1982</td>
            <td>08XX - XXXX - XXXX</td>
            <td>Jl. Garuda Mas, Mendungan, Pabelan, Kartasura, Sukoharjo, Jawa Tengah</td>
            <th><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                <button type="button" class="btn btn-warning"><i class="bi bi-trash"></i></button></th>
          </tr>
          <tr>
            <th scope="row">578</th>
            <td>Raheem Lehner</td>
            <td>Batang, 29 Desember 1988</td>
            <td>08XX - XXXX - XXXX</td>
            <td>Jl. Garuda Mas, Mendungan, Pabelan, Kartasura, Sukoharjo, Jawa Tengah</td>
            <th><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
              <button type="button" class="btn btn-warning"><i class="bi bi-trash"></i></button></th>
          </tr>
          <tr>
            <th scope="row">610</th>
            <td>Agustina Mardevi</td>
            <td>Batam, 1 Januari 2001</td>
            <td>08XX - XXXX - XXXX</td>
            <td>Jl. Garuda Mas, Mendungan, Pabelan, Kartasura, Sukoharjo, Jawa Tengah</td>
            <th><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
              <button type="button" class="btn btn-warning"><i class="bi bi-trash"></i></button></th>
          </tr>
        </tbody>
      </table>

    </div>
  </div>

@endsection