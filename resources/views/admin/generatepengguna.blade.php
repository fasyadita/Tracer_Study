@extends('admin.template')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <h4 class="fw-bold mb-4">Generate Link</h4>
    </div>
</div>

 <div class="col-md-12 mb-4">
        <div class="card p-4">
            <span class="fw-bold fs-5 mb-2">Daftar Data Pengguna Lulusan</span>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td><td>Annisa</td><td>annisa@polinema.ac.id</td>
                    <td>
                        <button class="btn btn-info btn-sm">Generate link</button>
                        <button class="btn btn-success btn-sm">kirim</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td><td>Kirana Salsabillah</td><td>kirana@polinema.ac.id</td>
                    <td>
                        <button class="btn btn-info btn-sm">Generate link</button>
                        <button class="btn btn-success btn-sm">kirim</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td><td>Hazel</td><td>hazel@polinema.ac.id</td>
                    <td>
                        <button class="btn btn-info btn-sm">Generate link</button>
                        <button class="btn btn-success btn-sm">kirim</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td><td>Fasya Dita</td><td>fasya@polinema.ac.id</td>
                    <td>
                        <button class="btn btn-info btn-sm">Generate link</button>
                        <button class="btn btn-success btn-sm">kirim</button>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
</div>

@endsection