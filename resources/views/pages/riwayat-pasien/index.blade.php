@extends('layouts.main')

@section('content')

<link rel="stylesheet" href="css/fitur.css">

<div class="card-body">
    <div class="row mt-5">
        <div>
            <h3 class="mb-2">Riwayat Pasien</h3>
        </div>
    </div>
</div>

<div class="container">
    <main class="row">
        <form action="#" method="GET" class="mt-5">
            <div class="form-floating mt-5 mb-4 col-10">
                <input id="floatingInput" type="id_pasien" class="form-control" placeholder="ID Pasien">
                <label for="floatingInput">ID Pasien</label>
            </div>
            <div class="col-10 text-center">
                <button type="submit" class="addButton">Search</button>
            </div>
        </form>
    </main>
</div>

@endsection