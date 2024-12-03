<?php

# inicializar sesion cURL; ch = cURL handle
const API_URL = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL);
//indicar que el resultado no se muestre en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//ejhecutamos la peticion
$result = curl_exec($ch);
$data = json_decode($result, true);
// cerramos conexion
curl_close($ch);
// vemos contenido obtenido
//var_dump($data);

?>

<head>
  <meta charset="UTF-8" />
  <title>La próxima pelicula de Marvel</title>
  <meta name="description" content="La próxima pelicula de Marvel">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>

<main>
  <!--   <pre style="font-size: 8px; overflow: scroll; height: 250px;">
    <?php var_dump($data); ?>
  </pre> -->
  <section>
    <img src="<?php echo $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"]; ?>" style="border-radius: 16px" />
  </section>

  <hgroup>
    <h2><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h2>
    <h2>Fecha de estreno: <?= $data["release_date"]; ?></h2>
    <h3>La siguente será: <?= $data["following_production"]["title"] ?></h3>
  </hgroup>
</main>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: flex;
    place-content: center;
  }

  section {
    display: grid;
    place-content: center;
    text-align: center;
  }

  hgroup {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
  }

  img {
    margin: 0 auto;
  }
</style>