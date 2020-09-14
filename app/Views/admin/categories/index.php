<h1>Administrer les catégories</h1>

<p>
  <a class="btn btn-success" href="?p=admin.categories.add" >Ajouter une catégorie</a>
</p>

<table class="table">
    <thead>
        <tr>
            <td>Id</td>
            <td>Titre</td>
            <td>Actions</td>
        </tr>
    </thead>

    <tbody>
        <!-- Lister toutes les catégories et les afficher -->
        <?php foreach ($items as $category): ?>
            <tr>
                <td><?= $category->id; ?></td>
                <td><?= $category->titre; ?></td>
                <td>
                    <a class="btn btn-primary" href="?p=admin.categories.edit&id=<?= $category->id; ?>" >Editer</a>

                    <!-- Mettre le bouton supprimer dans un formulaire pour éviter les problèmes de sécurité -->
                    <form action="?p=admin.categories.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $category->id; ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div class="row">
  <div class="col-sm-8">
    <hr>

    <canvas id="myChart" height="100"></canvas>

    <?php foreach ($items as $category2): ?>

      <?php
        $string[] = $category2->id;
        $string2[] = "'" . $category2->titre . "'";
        ?>

    <?php endforeach; ?>

  </div>
  <div class="col-sm-4">
  </div>

</div>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [<?php echo implode(",", $string2); ?>],
    datasets: [{
      label: 'Nombre d\'articles par catégorie',
      data: [<?php echo implode(",", $string); ?>],
      backgroundColor: poolColors([<?php echo implode(",", $string2); ?>].length),
      borderColor: poolColors([<?php echo implode(",", $string2); ?>].length),
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

//random color rgba
      function dynamicColors() {
          var r = Math.floor(Math.random() * 255);
          var g = Math.floor(Math.random() * 255);
          var b = Math.floor(Math.random() * 255);
          return "rgba(" + r + "," + g + "," + b + ", 0.5)";
      }
      //color with array.lenght for graph
      function poolColors(a) {
          var pool = [];
          for(i =0 ; i <= a; i++) {
              pool.push(dynamicColors());
          }
          return pool;
      }
</script>

<?php
// print_r($string);
// echo '<br>';
// print_r($string2);
// ?>
