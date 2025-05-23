@extends('admin.template')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <h4 class="fw-bold mb-4">Rekap Hasil</h4>
    </div>
</div>

 <div class="col-md-12 mb-4">
        <div class="card p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Rekap Hasil Tracer Study Lulusan</h5>
            <button class="btn btn-info btn-sm">Export Data</button>
            </div>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td><td>2341760098</td><td>Annisa</td><td>D4-SIB</td><td>annisa@polinema.ac.id</td>
                </tr>
                <tr>
                    <td>2</td><td>2341760099</td><td>Kirana Salsabilla</td><td>D4-SIB</td><td>kirana@polinema.ac.id</td>
                </tr>
                <tr>
                    <td>3</td><td>2341760099</td><td>Adam Nur Alifi</td><td>D4-SIB</td><td>adam@polinema.ac.id</td>
                </tr>
                <tr>
                    <td>4</td><td>2341760077</td><td>Fasya Dita</td><td>D4-SIB</td><td>fasya@polinema.ac.id</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
</div>

@endsection