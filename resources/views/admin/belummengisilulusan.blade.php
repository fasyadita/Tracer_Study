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
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Program Studi</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2341760032</td>
                        <td>Annisa</td>
                        <td>D-II Pengembangan Piranti Perangkat Lunak Situs</td>
                        <td>annisaachan18@gmail.com</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2341760132</td>
                        <td>Kirana Salsabila</td>
                        <td>D-IV Teknik Informatika/td>
                        <td>kiranasls52@gmail.com</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2341760160</td>
                        <td>Hezakled Ahmad</td>
                        <td>D-IV Sistem Informasi Bisnis</td>
                        <td>ahmadhzl14@gmail.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection