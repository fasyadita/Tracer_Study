@extends('admin.template')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <h4 class="fw-bold mb-4">Data Instansi</h4>
    </div>
</div>

<div class="col-md-12 mb-4">
    <div class="card p-4">
        <span class="fw-bold fs-5 mb-2">Daftar Data Instansi</span>
        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
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
                        <td>D4 - TI</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Hezakiel Ahmad</td>
                        <td>PT. Niko Elektronik</td>
                        <td>Saria Fauzani</td>
                        <td>D4 - PPLS</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
