<?php

$par = "Gregorio Samsa, svegliandosi una mattina da sogni agitati, si trovò trasformato, nel suo letto, in un enorme insetto immondo. Riposava sulla schiena, dura come una corazza, e sollevando un poco il capo vedeva il suo ventre arcuato, bruno e diviso in tanti segmenti ricurvi, in cima a cui la coperta da letto, vicina a scivolar giù tutta, si manteneva a fatica. Le gambe, numerose e sottili da far pietà, rispetto alla sua corporatura normale, tremolavano senza tregua in un confuso luccichio dinanzi ai suoi occhi.";
$bad_word = $_GET["bad-word"];
$censorship = "***";

echo "<h2>Stampa in PHP</h2>";
echo "ECCO IL PARAGRAFO: " . $par;
echo "<br>";
echo "<br>";
echo "La lunghezza del paragrafo è " . strlen($par) . " parole";
echo "<br>";
echo "<br>";
echo "PARAGRAFO CENSURATO: " . str_replace($bad_word, $censorship, $par);

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>PHP Bad Words</title>
</head>
<body>
<hr>
  <div class="container mt-5">
    <h2>Stampa in HTML</h2>
    <p>ECCO IL PARAGRAFO: <?php echo $par ?></p>
    <p>La lunghezza del paragrafo è <?php echo strlen($par) ?> parole</p>
    <p class="text-danger">PARAGRAFO CENSURATO: <?php echo str_replace($bad_word, $censorship, $par) ?> parole</p>
  </div>
</body>
</html>