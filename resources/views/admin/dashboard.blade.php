@extends('admin.template')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <h4 class="fw-bold mb-4">Dashboard</h4>
    </div>
</div>

<a class="ri-circle-fill"> Grafik Sebaran Pekerjaan Alumni dan Jenis Instansi</a>
<br><br>

<div class="row">
    <!-- Chart 1: Data Pekerjaan Alumni -->
    <div class="col-md-6 mb-4">
        <div class="card p-4">
            <span class="fw-bold fs-5 mb-2">Data Pekerjaan Alumni</span>
            <div class="d-flex align-items-center">
                <canvas id="chartPekerjaan" width="250" height="250"></canvas>
            </div>
        </div>
    </div>

    <!-- Chart 2: Data Jenis Instansi -->
    <div class="col-md-6 mb-4">
        <div class="card p-4">
            <span class="fw-bold fs-5 mb-2">Data Jenis Instansi</span>
            <div class="d-flex align-items-center">
                <canvas id="chartInstansi" width="250" height="250"></canvas>
            </div>
        </div>
    </div>
</div>

<br><br>
<a class="ri-circle-fill"> Tabel Sebaran Lingkup Tempat Kerja dan Kesesuaian Profesi dengan Infokom</a>
<br><br>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="table-responsive">
  <table class="table table-bordered text-center align-middle">
    <thead class="table-primary">
      <tr>
        <th>Tahun Lulus</th>
        <th>Jumlah Lulusan</th>
        <th>Jumlah Lulusan yang Terlacak</th>
        <th>Profesi Kerja Bidang Infokom</th>
        <th>Profesi Kerja Bidang Non Infokom</th>
        <th>Multinasional/Internasional</th>
        <th>Nasional</th>
        <th>Wirausaha</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2021</td><td>213</td><td>64</td><td>46</td><td>18</td><td>0</td><td>63</td><td>1</td>
      </tr>
      <tr>
        <td>2022</td><td>188</td><td>115</td><td>73</td><td>42</td><td>4</td><td>108</td><td>3</td>
      </tr>
      <tr>
        <td>2023</td><td>233</td><td>98</td><td>70</td><td>28</td><td>2</td><td>98</td><td>6</td>
      </tr>
      <tr>
        <td>2024</td><td>200</td><td>112</td><td>82</td><td>30</td><td>3</td><td>112</td><td>2</td>
      </tr>
    </tbody>
    <tfoot class="table-secondary fw-bold">
      <tr>
        <td>Jumlah</td><td>834</td><td>389</td><td>271</td><td>118</td><td>9</td><td>368</td><td>12</td>
      </tr>
    </tfoot>
  </table>
</div>

<br><br>
<a class="ri-circle-fill"> Tabel Rata Rata Masa Tunggu</a>
<br><br>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="table-responsive">
  <table class="table table-bordered text-center align-middle">
    <thead class="table-primary">
      <tr>
        <th>Tahun Lulus</th>
        <th>Jumlah Lulusan</th>
        <th>Jumlah Lulusan yang Terlacak</th>
        <th>Rata Rata waktu Tunggu dalam Bulan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2021</td><td>213</td><td>64</td><td>4.92</td>
      </tr>
      <tr>
        <td>2022</td><td>188</td><td>115</td><td>4.77</td>
      </tr>
      <tr>
        <td>2023</td><td>233</td><td>98</td><td>3.38</td>
      </tr>
      <tr>
        <td>2024</td><td>200</td><td>112</td><td>6.01</td>
      </tr>
    </tbody>
    <tfoot class="table-secondary fw-bold">
      <tr>
        <td>Jumlah</td><td>834</td><td>389</td><td>4.77</td>
      </tr>
    </tfoot>
  </table>
</div>

<br><br>
<a class="ri-circle-fill"> Tabel Penilaian Kepuasan Pengguna Lulusan</a>
<br><br>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="table-responsive">
  <table class="table table-bordered text-center align-middle">
    <thead class="table-primary">
      <tr>
        <th>No</th>
        <th>Jenis Kemampuan</th>
        <th>Sangat Baik</th>
        <th>Baik</th>
        <th>Cukup</th>
        <th>Kurang</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td><td>Kerjasama Tim</td><td>36,32%</td><td>51,58%</td><td>9,47%</td><td>2,63%</td>
      </tr>
      <tr>
        <td>2</td><td>Keahlian di Bidang IT</td><td>41,05%</td><td>49.47%</td><td>7,37%</td><td>2,11%</td>
      </tr>
      <tr>
        <td>3</td><td>Kemampuan Berbahasa Asing</td><td>25,79%</td><td>55,79%</td><td>12,11%</td><td>6,32%</td>
      </tr>
      <tr>
        <td>4</td><td>Kemampuan Berkomunikasi</td><td>57,37%</td><td>35,26%</td><td>4,74%</td><td>2,63%</td>
      </tr>
      <tr>
        <td>4</td><td>Pengembangan Diri</td><td>40,53%</td><td>46,32%</td><td>9,47%</td><td>3,68%</td>
      </tr>
      <tr>
        <td>4</td><td>Kepemimpinan</td><td>43,68%</td><td>45,26%</td><td>7,89%</td><td>3.16%</td>
      </tr>
      <tr>
        <td>4</td><td>Etos Kerja</td><td>34,21%</td><td>57,37%</td><td>6,32%</td><td>2,11%</td>
      </tr>
    </tbody>
    <tfoot class="table-secondary fw-bold">
      <tr>
        <td></td><td>Jumlah</td><td>39,85%</td><td>48,72</td><td>8,20%</td><td>3,23%</td>
      </tr>
    </tfoot>
  </table>
</div>

<br><br>
<a class="ri-circle-fill"> Grafik Penilaian Kepuasan Pengguna Lulusan</a>
<br><br>

<!-- Bootstrap & Chart.js CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>

<!-- Carousel Container -->
<div id="carouselChart" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5 mb-4">
          <div class="card text-center shadow-sm">
            <div class="card-body">Kerja Sama Tim
              <h5 class="fw-bold mb-3">Kerja Sama Tim</h5>
              <canvas id="chartTim"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 mb-4">
          <div class="card text-center shadow-sm">
            <div class="card-body">Keahlian di Bidang IT
              <h5 class="fw-bold mb-3">Keahlian di Bidang IT</h5>
              <canvas id="chartIT"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5 mb-4">
          <div class="card text-center shadow-sm">
            <div class="card-body">Kemampuan Berbahasa Asing
             <h5 class="fw-bold mb-3">Kemampuan Berbahasa Asing</h5>
              <canvas id="chartSing"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 mb-4">
          <div class="card text-center shadow-sm">
            <div class="card-body">Kemampuan Berkomunikasi
              <h5 class="fw-bold mb-3">Kemampuan Berkomunikasi</h5>
              <canvas id="chartKom"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5 mb-4">
          <div class="card text-center shadow-sm">
            <div class="card-body">Pengembangan Diri
              <h5 class="fw-bold mb-3">Pengembangan Diri</h5>
              <canvas id="chartDir"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 mb-4">
          <div class="card text-center shadow-sm">
            <div class="card-body">Kepemimpinan
              <h5 class="fw-bold mb-3">Kepemimimpinan</h5>
              <canvas id="chartNan"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 4 -->
    <div class="carousel-item">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5 mb-4">
          <div class="card text-center shadow-sm">
            <div class="card-body">Etos Kerja
              <h5 class="fw-bold mb-3">Etos Kerjas</h5>
              <canvas id="chartJa"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselChart" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselChart" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Script Chart -->
<script>
Chart.register(ChartDataLabels);

function createPieChart(canvasId, data, labels, colors) {
  new Chart(document.getElementById(canvasId), {
    type: 'pie',
    data: {
      labels: labels,
      datasets: [{
        data: data,
        backgroundColor: colors
      }]
    },
    options: {
      plugins: {
        legend: { display: false },
        datalabels: {
          formatter: (value, ctx) => {
            let sum = ctx.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
            return ((value * 100 / sum).toFixed(1) + "%");
          },
          color: "#000",
          anchor: 'end',
          align: 'start',
          offset: 10
        }
      }
    }
  });
}

createPieChart('chartTim', [2, 9, 51, 36], ['Kurang', 'Cukup', 'Baik', 'Sangat Baik'], ['#FFD93D', '#A0E9FF', '#FF884B', '#26577C']);
createPieChart('chartIT', [2, 7, 49, 41], ['Kurang', 'Cukup', 'Baik', 'Sangat Baik'], ['#FFD93D', '#A0E9FF', '#FF884B', '#26577C']);
createPieChart('chartSing', [3, 8, 40, 49], ['Kurang', 'Cukup', 'Baik', 'Sangat Baik'], ['#FFD93D', '#A0E9FF', '#FF884B', '#26577C']);
createPieChart('chartKom', [4, 6, 50, 40], ['Kurang', 'Cukup', 'Baik', 'Sangat Baik'], ['#FFD93D', '#A0E9FF', '#FF884B', '#26577C']);
createPieChart('chartDir', [1, 9, 45, 45], ['Kurang', 'Cukup', 'Baik', 'Sangat Baik'], ['#FFD93D', '#A0E9FF', '#FF884B', '#26577C']);
createPieChart('chartNan', [2, 5, 52, 41], ['Kurang', 'Cukup', 'Baik', 'Sangat Baik'], ['#FFD93D', '#A0E9FF', '#FF884B', '#26577C']);
createPieChart('chartJa', [3, 7, 40, 50], ['Kurang', 'Cukup', 'Baik', 'Sangat Baik'], ['#FFD93D', '#A0E9FF', '#FF884B', '#26577C']);
</script>


<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

<script>
Chart.register(ChartDataLabels);

// CHART 1: Data Pekerjaan Alumni
const chartPekerjaan = new Chart(document.getElementById('chartPekerjaan'), {
    type: 'doughnut',
    data: {
        labels: ['Web Developer', 'Database Administrator', 'Network Engineer', 'System Analyst', 'Cybersecurity Analyst'],
        datasets: [{
            data: [20, 20, 15, 15, 30],
            backgroundColor: ['#FFA726', '#42A5F5', '#66BB6A', '#7E57C2', '#EF5350'],
            borderWidth: 1,
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'right',
                labels: {
                    boxWidth: 12,
                    padding: 15
                }
            },
            datalabels: {
                color: '#000',
                formatter: (value, context) => {
                    const total = context.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
                    const percentage = (value / total * 100).toFixed(0);
                    return `${percentage}%`;
                }
            }
        },
        cutout: '60%',
    }
});

// CHART 2: Data Jenis Instansi
const chartInstansi = new Chart(document.getElementById('chartInstansi'), {
    type: 'doughnut',
    data: {
        labels: ['Perusahaan Swasta', 'Pendidikan Tinggi', 'Instansi Pemerintah', 'BUMN'],
        datasets: [{
            data: [25, 30, 20, 25],
            backgroundColor: ['#EC407A', '#BA68C8', '#26A69A', '#FDD835'],
            borderWidth: 1,
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'right',
                labels: {
                    boxWidth: 12,
                    padding: 15
                }
            },
            datalabels: {
                color: '#000',
                formatter: (value, context) => {
                    const total = context.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
                    const percentage = (value / total * 100).toFixed(0);
                    return `${percentage}%`;
                }
            }
        },
        cutout: '60%',
    }
});
</script>
@endsection
