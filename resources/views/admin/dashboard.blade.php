@extends('admin.template')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <h4 class="fw-bold mb-4">Dashboard</h4>
    </div>
</div>

<!-- Stats Cards -->
<div class="row">
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="fw-semibold d-block mb-1">Data Lulusan</span>
                        <h3 class="card-title mb-0">1,234</h3>
                    </div>
                    <div class="avatar flex-shrink-0">
                        <i class="ri-graduation-cap-line text-primary fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="fw-semibold d-block mb-1">Total Survei Lulusan</span>
                        <h3 class="card-title mb-0">100</h3>
                    </div>
                    <div class="avatar flex-shrink-0">
                        <i class="ri-graduation-cap-line text-primary fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="fw-semibold d-block mb-1">Data Instansi</span>
                        <h3 class="card-title mb-0">304</h3>
                    </div>
                    <div class="avatar flex-shrink-0">
                        <i class="ri-graduation-cap-line text-primary fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="fw-semibold d-block mb-1">Total Survei Instansi</span>
                        <h3 class="card-title mb-0">14</h3>
                    </div>
                    <div class="avatar flex-shrink-0">
                        <i class="ri-graduation-cap-line text-primary fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection