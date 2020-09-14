<h1>Administrer les articles</h1>

<p>
  <a class="btn btn-success" href="?p=admin.posts.add" >Ajouter un article</a>
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
        <!-- Lister tous les articles et les afficher -->
        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?= $post->id; ?></td>
                <td><?= $post->titre; ?></td>
                <td>
                    <a class="btn btn-primary" href="?p=admin.posts.edit&id=<?= $post->id; ?>" >Editer</a>

                    <!-- Mettre le bouton supprimer dans un formulaire pour éviter les problèmes de sécurité -->
                    <form action="?p=admin.posts.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $post->id; ?>">
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

    <?php foreach ($posts as $post): ?>

    <?php
      $string[] = $post->prix;
      $string2[] = "'" . $post->titre . "'";
    ?>

    <?php
    //print_r($string1)
    //echo $string2;
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
    //labels: ['Electroménager','Jardinage', 'dhfjdhfjdjf', 'errytuiii', 'msztfdhjghm', 'xslfjdshgjh'],
    datasets: [{
      label: 'Prix des articles en €',
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
