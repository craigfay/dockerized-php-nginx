<?php
$animals = [
  "dog" => "bark",
  "cat" => "meow",
  "cow" => "moo",
];
?>

<ul>
  <?php foreach ($animals as $animal => $noise): ?>
    <li>
      <?php echo "$animal says $noise" ?>
    </li>
  <?php endforeach ?>
</ul>