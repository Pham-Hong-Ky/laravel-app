<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Bàn cờ</title>
  <style>
    .board {
      display: grid;
      grid-template-columns: repeat(<?= $n ?>, 40px);
      width: fit-content;
      border: 2px solid #333;
    }

    .cell {
      width: 40px;
      height: 40px;
    }

    .white {
      background-color: #fff;
    }

    .black {
      background-color: #000;
    }
  </style>
</head>

<body>

  <div class="board">
    <?php
    foreach (range(1, $n) as $i) {
      foreach (range(1, $n) as $j) {
        $class = (($i + $j) % 2 == 0) ? "white" : "black";
        echo "<div class='cell $class'></div>";
      }
    }
    ?>
  </div>

</body>

</html>