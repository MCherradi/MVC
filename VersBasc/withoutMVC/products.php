<?php

  require_once './conn.php';

  $req = $conn->prepare('SELECT * FROM produit');
  $req->execute();
  $result = $req->fetchAll(PDO::FETCH_ASSOC);
  // var_dump($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>MVC PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>La liste des produits</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
     
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Date de création</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($result as $prd){ ?> 
          <tr>
          <td><?= $prd['id']; ?></td>
          <td><?= $prd['name']; ?></td>
          <td><?= $prd['description']; ?></td>
          <td><?= $prd['price']; ?></td>
          <td><?= $prd['created']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

</body>
</html>
