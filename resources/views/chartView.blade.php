@extends('layouts.primary')

@section('content')

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hewan Qurban

                </div>

                <div class="panel-body">
                  <canvas id="chart"></canvas>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

        <script>
          var chart = document.getElementById('chart');
          var data = {
            labels: ["al-hikmah", "Nurul mustaqin", "Darussalam", "Nurul Iman", "Tuna Netra PH", "PA Mafaza"],
            datasets: [
              {
                label: 'Jumlah Distribsui',
                yAxisID: 'a',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(1, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,1,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            },
            {
              label:'Biaya Operasional',
              yAxisID: 'b',
              data: [20,10,10, 10,20, 30]

            }

          ]
          }
          var barchart = new Chart(chart, {
            type:'bar',
            data: data,
            options:{
                scales: {
                    yAxes: [
                      {
                        id:'a',
                        type: 'linear',
                        position: 'left'
                      },
                      {
                        id:'b',
                        type: 'linear',
                        position: 'right',
                        ticks: {
                         beginAtZero:false
                       }
                      }

               ]
              }
            }
          });
        </script>

@endsection
