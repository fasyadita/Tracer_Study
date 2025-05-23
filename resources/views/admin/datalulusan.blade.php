@extends('admin.template')

@section('content')
<div class="container mt-4">
    <h2>Data Lulusan</h2>
    <div class="card">
        <div class="card-header">
            Daftar Data Lulusan
            <button class="btn btn-success btn-sm float-end">Import Data</button>
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
                        <td>2341706032</td>
                        <td>Annisa</td>
                        <td>D-II Pengembangan Piranti Lunak Situs</td>
                        <td>annisasachan18@gmail.com</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2341706132</td>
                        <td>Kirana Sakabita</td>
                        <td>D-IV Teknik Informatika</td>
                        <td>kiranasls520@gmail.com</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2341706160</td>
                        <td>Hezakiel Ahmad</td>
                        <td>D-IV Sistem Informasi Bisnis</td>
                        <td>ahmadhzl14@gmail.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection