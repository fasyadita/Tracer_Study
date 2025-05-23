@extends('admin.template')

@section('content')
<div class="container mt-4">
    <h2>Rekap Belum Mengisi</h2>
    <div class="card">
        <div class="card-header">
            Daftar Data Lulusan
            <button class="btn btn-success btn-sm float-end">Export Data</button>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama Atasan</th>
                        <th>Instansi</th>
                        <th>Nama Lulusan</th>
                        <th>Program Studi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Annisa</td>
                        <td>PT. OTSUKA</td>
                        <td>Fasya Dita Nasahah</td>
                        <td>D4 - SIB</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Kirana Salsabila</td>
                        <td>PT. Juragan 99</td>
                        <td>Annisa</td>
                        <td>D4 - SIB</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Hezakled Ahmad</td>
                        <td>PT. Niko Elektronik</td>
                        <td>Saria Fauzani</td>
                        <td>D4 - SIB</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection