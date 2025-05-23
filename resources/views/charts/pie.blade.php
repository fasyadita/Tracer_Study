
<div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-5">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
    #myPieChart {
        max-width: 601px;
        max-height: 403px;
    }
    </style>
    <canvas id="myPieChart" width="100px" height="100px"></canvas>

    <script>
        const ctx = document.getElementById('myPieChart').getContext('2d');
        const myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Lulus', 'Belum Lulus', 'Cuti'],
                datasets: [{
                    label: 'Status Mahasiswa',
                    data: [55, 30, 15], // <-- data statis
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(255, 206, 86, 0.7)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'right',
                    },
                    title: {
                        display: true,
                        text: 'DATA PEKERJAAN MAHASISWA'
                    }
                }
            },
        });
    </script>
    </div>
</div>
