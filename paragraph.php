<?php
if (!empty(trim($_POST["censor"])) && !empty($_POST["paragraph"])) {
    $cens = trim($_POST["censor"]);
    $parag = $_POST["paragraph"];
    $paragLength = strlen($parag);
    $paragCensored = str_replace($cens, "***", $parag);
    $title = "Lunghezza paragrafo " . $paragLength . " caratteri";
}
else if (!empty($_POST["paragraph"])) {
    $title = "ERRORE: inserisci la parola da censurare";
}
else if (!empty(trim($_POST["censor"]))) {
    $title = "ERRORE: inserisci il testo";

}
else {
    $title = "ERRORE entrambi i campi sono vuoti";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragraph</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <header class="container text-center mt-3 mb-5">
        <h1 class="mb-3">Badwords</h1>
        <h3><?php echo $title?></h3>
    </header>
    <main class="container">
        <?php if (!empty(trim($_POST["censor"])) && !empty($_POST["paragraph"])):?>
        <!-- Censored -->
        <h2 class="mb-3">Censurato</h2>
        <div class="row  mb-5">
            <div class="col bg-success py-4 px-3 rounded-4">
                <?php echo $paragCensored?>
            </div>
        </div>
        <!-- Not Censored -->
        <h2 class="mb-3">Non censurato</h2>
        <div class="row">
            <div class="col bg-success py-4 px-3 rounded-4">
                <?php echo $parag?>
            </div>
        </div>
        <?php endif?>
    </main>
</body>
</html>