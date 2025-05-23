@extends('admin.template')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <h3 class="fw-bold mb-4">Tambah Form</h3>
    </div>
</div>

 <div class="col-md-12 mb-4">
<div class="card p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Daftar Pertanyaan</h5>
            <button class="btn btn-info btn-sm">Tambah</button>
            </div>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Pertanyaan</th>
                    <th>Jawaban</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td><td>Kerjasama Tim</td><td>Skala</td>
                    <td>
                        <button class="btn btn-success btn-sm">Update</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td><td>Keahlian di Bidang TI</td><td>Skala</td>
                    <td>
                        <button class="btn btn-success btn-sm">Update</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td><td>Kemampuan Bahasa Asing </td><td>Skala</td>
                    <td>
                        <button class="btn btn-success btn-sm">Update</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td><td>Kemampuan Berkomunikasi</td><td>Skala</td>
                    <td>
                        <button class="btn btn-success btn-sm">Update</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td><td>Pengembangan Diri</td><td>Skala</td>
                    <td>
                        <button class="btn btn-success btn-sm">Update</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>6</td><td>Kepemimpinan</td><td>Skala</td>
                    <td>
                        <button class="btn btn-success btn-sm">Update</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                </tr>
                    <tr>
                    <td>7</td><td>Etos Kerja</td><td>Skala</td>
                    <td>
                        <button class="btn btn-success btn-sm">Update</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
</div>

@endsection