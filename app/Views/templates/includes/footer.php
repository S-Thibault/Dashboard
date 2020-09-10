                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container" style="min-height: 100vh;">
            <div class="starter-template" style="padding-top: 100px; padding-bottom: 70px;">
                <?php
                /**
                 * variable qui contient le contenu des pages
                 */
                echo $content;
                ?>
                <hr>

<canvas id="myChart1" height="75"></canvas>
<script>
var ctx = document.getElementById('myChart1').getContext('2d');
var chart = new Chart(ctx, {
  // The type of chart we want to create
  type: 'line',

  // The data for our dataset
  data: {
      labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin'],
      datasets: [{
          label: 'Evolution des ventes sur le premier semestre 2020',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: [8, 10, 7, 8, 17, 24]
      }]
  },

  // Configuration options go here
  options: {}
});
</script>

</script>
                <hr>

                <canvas id="myChart" height="75"></canvas>
      <script>
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['0-50 €', '50-100 €', '100-250 €', '250-500 €', '500-1000 €', '1000-2500 €'],
        datasets: [{
            label: 'Prix des produits',
            data: [1, 2, 3, 1, 2, 1],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
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

            </div>
        </div><!-- /.container -->


        <div class="container-fluid" style="background-color: black; color: grey;">
          <div class="container">
            <div class="row">
              <div class="col" style="padding: 15px 15px 50px 15px;">
                  <span style="font-weight: bold; font-size: 16px;">ACS Dasboard - MVC/POO</span>
                  <br>
                <span style="font-size: 12px;">&copy; 2020 - Emma, Sylvain, Olivier</span>
              </div>
            </div>
          </div>
        </div>
        <script src="../public/js/script.js"></script>
    </body>
</html>
