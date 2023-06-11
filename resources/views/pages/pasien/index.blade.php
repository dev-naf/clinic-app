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

{{-- <div class="header-nav">
    <form class="nav justify-content-end">
        <button  class="addButton">Tambah</button>
    </form>
</div> --}}

<div class="nav mb-3">
  <button class="addButton">Tambah</button>
  <div class="nav justify-content-end">
    <label><input type="search" class="form-control form-control-sm" placeholder="Pencarian" name="c"></label>
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