<?php
$age = 18;
$name = 'Blas';

$outputAge = match (true) {
  $age < 2 => "Eres un bebe, $name",
  $age < 10 => "Eres un niño, $name",
  $age < 18 => "Eres un adolescente, $name",
  $age == 18 => "Eres mayor de edad, $name",
};

$bestLanguages = ["PHP", "JavaScript", "Python"];
$bestLanguages[3] = "Java";
$bestLanguages[] = "TypeScript";

$person = [
  "name" => "San",
  "age" => 31,
  "isDev" => false,
  "languages" => ["Español", "Valenciano"],
];

$person["name"] = "Sandra";
$person["languages"][] =  "Ingles";

?>

<ul>
  <?php foreach ($bestLanguages as $lang) : ?>
    <li><?php echo $lang; ?></li>
  <?php endforeach; ?>
</ul>
<ul>
  <?php foreach ($bestLanguages as $key => $lang) : ?>
    <li><?php echo $key . '-' . $lang; ?></li>
  <?php endforeach; ?>
</ul>

<h2>
  <?= $outputAge; ?>
</h2>
<h2>
  <?= var_dump($person); ?>
</h2>

<h1>
  <?= 'Hola mundo'; ?>
</h1>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>