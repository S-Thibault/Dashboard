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

                <br>

                <div class="row">
                  <div class="col-sm-8">
                    <hr>
                    <canvas id="myChart" height="100"></canvas>
                    <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                      type: 'bar',
                      data: {
                        labels: ['bricolage', 'éléctroménager', 'multimedia', 'tv-hifi', 'voiture'],
                        datasets: [{
                          label: 'Prix moyen des produits en € par catégorie',
                          data: [49, 120, 60, 89, 66],
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
                  <div class="col-sm-4">
                  </div>

                </div>

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
    </body>
</html>
