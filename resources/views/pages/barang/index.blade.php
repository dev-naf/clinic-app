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