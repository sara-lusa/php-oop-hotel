<?php
require_once(__DIR__ . '/Room.php');

$stanza_uno = new Room(1, 100, 1, 2);
$array_data = $stanza_uno->getRoomData();
?>
<h3>Rooms</h3>
<ul>
  <li><h3>Room n. <?php echo $array_data['number']; ?></h3></li>
  <li>Id: <?php echo $array_data['id']; ?></li>
  <li>Floor: <?php echo $array_data['floor']; ?></li>
  <li>Beds: <?php echo $array_data['beds']; ?></li>
<?php

$stanza_due = new Room(2, 101, 1, 3);
$array_data = $stanza_due->getRoomData();
?>
<li><h3>Room n. <?php echo $array_data['number']; ?></h3></li>
<li>Id: <?php echo $array_data['id']; ?></li>
<li>Floor: <?php echo $array_data['floor']; ?></li>
<li>Beds: <?php echo $array_data['beds']; ?></li>
<?php

$stanza_tre = new Room(3, 102, 1, 3);
$array_data = $stanza_tre->getRoomData();
?>
<li><h3>Room n. <?php echo $array_data['number']; ?></h3></li>
<li>Id: <?php echo $array_data['id']; ?></li>
<li>Floor: <?php echo $array_data['floor']; ?></li>
<li>Beds: <?php echo $array_data['beds']; ?></li>
</ul>
<?php


?>
