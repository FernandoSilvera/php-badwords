<?php

$par = "Gregorio Samsa, svegliandosi una mattina da sogni agitati, si trovò trasformato, nel suo letto, in un enorme insetto immondo. Riposava sulla schiena, dura come una corazza, e sollevando un poco il capo vedeva il suo ventre arcuato, bruno e diviso in tanti segmenti ricurvi, in cima a cui la coperta da letto, vicina a scivolar giù tutta, si manteneva a fatica. Le gambe, numerose e sottili da far pietà, rispetto alla sua corporatura normale, tremolavano senza tregua in un confuso luccichio dinanzi ai suoi occhi.";
$badWord = $_GET["badWord"];

echo "<h2>Stampa in PHP</h2>";
echo "ECCO IL PARAGRAFO: " . $par;
echo "<br>";
echo "<br>";
echo "La lunghezza del paragrafo è " . strlen($par) . " parole";

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Bad Words</title>
</head>
<body>
  <hr>
  <h2>Stampa in HTML</h2>
  <p>ECCO IL PARAGRAFO: <?php echo $par ?></p>
  <p>La lunghezza del paragrafo è <?php echo strlen($par) ?> parole</p>
</body>
</html>