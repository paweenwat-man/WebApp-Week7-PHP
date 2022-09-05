<!DOCTYPE html>
<html>
<head>
  <title>Product List</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
<?php 

$products = array(
  array(
    'id'=> 1,
    'name'=> "Toy Story 3 (2010)",
    'price'=> 180,
    'img'=> "https://images-na.ssl-images-amazon.com/images/M/MV5BMTgxOTY4Mjc0MF5BMl5BanBnXkFtZTcwNTA4MDQyMw@@._V1_UY268_CR3,0,182,268_AL_.jpg",
  ),
  array(
    'id'=> 2,
    'name'=> "The Jungle Book (2016)",
    'price'=> 200,
    'img'=> "https://images-na.ssl-images-amazon.com/images/M/MV5BMTc3NTUzNTI4MV5BMl5BanBnXkFtZTgwNjU0NjU5NzE@._V1_UX182_CR0,0,182,268_AL_.jpg",
  ),
  array(
    'id'=> 3,
    'name'=> "Titanic (1997)",
    'price'=> 120,
    'img'=> "https://images-na.ssl-images-amazon.com/images/M/MV5BMDdmZGU3NDQtY2E5My00ZTliLWIzOTUtMTY4ZGI1YjdiNjk3XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_UX182_CR0,0,182,268_AL_.jpg",
  ),
  array(
    'id'=> 4,
    'name'=> "Ratatouille (2007)",
    'price'=> 150,
    'img'=> "https://images-na.ssl-images-amazon.com/images/M/MV5BMTMzODU0NTkxMF5BMl5BanBnXkFtZTcwMjQ4MzMzMw@@._V1_UX182_CR0,0,182,268_AL_.jpg",
  ),
  array(
    'id'=> 5,
    'name'=> "Jurassic World (2015)",
    'price'=> 160,
    'img'=> "https://images-na.ssl-images-amazon.com/images/M/MV5BMTQ5MTE0MTk3Nl5BMl5BanBnXkFtZTgwMjczMzk2NTE@._V1_UX182_CR0,0,182,268_AL_.jpg",
  ),
  array(
    'id'=> 6,
    'name'=> "John Wick (2014)",
    'price'=> 140,
    'img'=> "https://images-na.ssl-images-amazon.com/images/M/MV5BMTU2NjA1ODgzMF5BMl5BanBnXkFtZTgwMTM2MTI4MjE@._V1_UX182_CR0,0,182,268_AL_.jpg",
  ),
  array(
    'id'=> 7,
    'name'=> "Furious 6 (2013)",
    'price'=> 160,
    'img'=> "https://images-na.ssl-images-amazon.com/images/M/MV5BMTM3NTg2NDQzOF5BMl5BanBnXkFtZTcwNjc2NzQzOQ@@._V1_UX182_CR0,0,182,268_AL_.jpg",
  ),
  array(
    'id'=> 8,
    'name'=> "Furious 7 (2015)",
    'price'=> 170,
    'img'=> "https://images-na.ssl-images-amazon.com/images/M/MV5BMTQxOTA2NDUzOV5BMl5BanBnXkFtZTgwNzY2MTMxMzE@._V1_UX182_CR0,0,182,268_AL_.jpg",
  ),
  array(
    'id'=> 9,
    'name'=> "Rango (2011)",
    'price'=> 160,
    'img'=> "https://images-na.ssl-images-amazon.com/images/M/MV5BMjE5ODg1NTk3OF5BMl5BanBnXkFtZTcwNzA5NTMyNA@@._V1_UX182_CR0,0,182,268_AL_.jpg",
  ),
  array(
    'id'=> 10,
    'name'=> "Harry Potter and the Deathly Hallows: Part 1 (2010)",
    'price'=> 180,
    'img'=> "https://images-na.ssl-images-amazon.com/images/M/MV5BMTQ2OTE1Mjk0N15BMl5BanBnXkFtZTcwODE3MDAwNA@@._V1_UX182_CR0,0,182,268_AL_.jpg",
  ),
  array(
    'id'=> 11,
    'name'=> "Harry Potter and the Deathly Hallows: Part 2 (2011)",
    'price'=> 180,
    'img'=> "https://images-na.ssl-images-amazon.com/images/M/MV5BMTY2MTk3MDQ1N15BMl5BanBnXkFtZTcwMzI4NzA2NQ@@._V1_UX182_CR0,0,182,268_AL_.jpg",
  ),
  array(
    'id'=> 12,
    'name'=> "Star Wars: Episode VII - The Force Awakens (2015)",
    'price'=> 170,
    'img'=> "https://images-na.ssl-images-amazon.com/images/M/MV5BOTAzODEzNDAzMl5BMl5BanBnXkFtZTgwMDU1MTgzNzE@._V1_UX182_CR0,0,182,268_AL_.jpg",
  ),
);
?>
<div class="container-fluid">
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">name</th>
          <th scope="col">price</th>
          <th scope="col">img</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
      <?php foreach($products as $i => $product): ?>
        <?php
          $r = rand(0,256);
          $g = rand(0,256); 
          $b = rand(0,256);
          $style = "color:rgb($r,$g,$b)"
        ?>
        <tr>
          <th scope="row" style="<?= $style ?>"><?= $product['id'] ?></th>
          <td style="<?= $style ?>"><?= $product['name'] ?></td>
          <td style="<?= $style ?>"><?= $product['price'] ?></td>
          <td style="<?= $style ?>"><img src="<?= $product['img'] ?>" width="300" height="400"></td>
        </tr>
      <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
</body>
</html>