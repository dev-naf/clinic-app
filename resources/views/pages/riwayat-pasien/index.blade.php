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

{{-- dibuat kotakan, isinya kolom pencarian id pasien + button (center), semua posisi ditengah, kalau mau tambah ccs di fitur.css --}}
<div class="container">
    <div class="form-floating mb-3">

        <input id="floatingInput" type="id_pasien" class="form-control" placeholder="ID Pasien">
        <label for="floatingInput">ID Pasien</label>
            
    </div>
                                
    <button type="submit" class="addButton">Search</button>

</div>

@endsection