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
            <h5 class="mb-0">Rekap Hasil Survei Kepuasan</h5>
            <button class="btn btn-info btn-sm">Export Data</button>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama Atasan</th>
                        <th>Instansi</th>
                        <th>Nama Lulusan</th>
                        <th>Program Studi</th>
                        <th>Tahun Lulus</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Annisa</td>
                        <td>PT. OTSUKA</td>
                        <td>Annisa</td>
                        <td>D4 - SIB</td>
                        <td>2025</td>
                        <td><button class="btn btn-warning btn-sm">Detail</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Kirana Salsabila</td>
                        <td>PT. Juragan 99</td>
                        <td>Fasya Dita Nasahah</td>
                        <td>D4 - SIB</td>
                        <td>2026</td>
                        <td><button class="btn btn-warning btn-sm">Detail</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Hezakiel Ahmad</td>
                        <td>PT. Niko Elektronik</td>
                        <td>Adam Nur Alifi</td>
                        <td>D4 - SIB</td>
                        <td>2027</td>
                        <td><button class="btn btn-warning btn-sm">Detail</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
