@extends('Layouts.admin')

@section('content')

<h1 class="page-header"></h1>
<div class="row">
            
                <div class="col-lg-12">
                            
                </div>
            <canvas id="myChart"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Category', 'Items', 'Request List', 'User List'],
        datasets: [{
            label: 'Data of MSS',
            data: [{{$cate}}, {{$item}}, {{$reqq}}, {{$user}}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<hr>
@endsection