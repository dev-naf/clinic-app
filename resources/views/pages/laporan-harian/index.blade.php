@extends('layouts.main')

@section('content')

<div class="card-body">
    <div class="row mt-5">
        <div>
            <h3 class="mb-2">Laporan Transaksi Harian</h3>
        </div>
    </div>
</div>

<div class="card mt-2">
    <div class="card-body mt-3">
      <table class="table datatable table-hover">
        <thead>
          <tr>
            <th scope="col">ID Transaksi</th>
            <th scope="col">Tanggal Transaksi</th>
            <th scope="col">Detal Transaksir</th>
            <th scope="col">Jumlah Transaksi</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">T12</th>
            <td>1 Januari 2023</td>
            <td>toner, masker</td>
            <td>Rp. 100.000</td>
            <th><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
              <button type="button" class="btn btn-warning"><i class="bi bi-trash"></i></button></th>
          </tr>
          <tr>
            <th scope="row">P01</th>
            <td>20 Agustus 2023</td>
            <td>Masker Whitening</td>
            <td>Rp. 120.000</td>
            <th><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
              <button type="button" class="btn btn-warning"><i class="bi bi-trash"></i></button></th>
          </tr>
          <tr>
            <th scope="row">T13</th>
            <td>2 Januari 2023</td>
            <td>toner, masker</td>
            <td>Rp. 100.000</td>
            <th><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
              <button type="button" class="btn btn-warning"><i class="bi bi-trash"></i></button></th>
          </tr>
          <tr>
            <th scope="row">P10</th>
            <td>21 Agustus 2023</td>
            <td>Masker Whitening</td>
            <td>Rp. 120.000</td>
            <th><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
              <button type="button" class="btn btn-warning"><i class="bi bi-trash"></i></button></th>
          </tr>
          <tr>
            <th scope="row">T15</th>
            <td>10 Januari 2023</td>
            <td>toner, masker</td>
            <td>Rp. 100.000</td>
            <th><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
              <button type="button" class="btn btn-warning"><i class="bi bi-trash"></i></button></th>
          </tr>
          <tr>
            <th scope="row">P22</th>
            <td>1 Agustus 2023</td>
            <td>Masker Whitening</td>
            <td>Rp. 120.000</td>
            <th><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
              <button type="button" class="btn btn-warning"><i class="bi bi-trash"></i></button></th>
          </tr>
        </tbody>
      </table>

    </div>
  </div>

@endsection