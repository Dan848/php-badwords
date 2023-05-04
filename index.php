<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <header class="container text-center mt-3 mb-5">
        <h1 class="mb-3">Badwords</h1>
        <h3>Censura la parola di un paragrafo</h3>
    </header>
    <main class="container">
        <div class="row">
            <form action="paragraph" method="POST" class="col py-4 px-3 bg-success rounded-4">
                <div class="mb-3">
                    <div class="h6">Inserisci la parola che vuoi censurare</div>
                    <input class="form-control" name='censor' />
                </div>
                <div>
                    <div class="h6">Inserisci il paragrafo</div>
                    <textarea class="form-control" name='paragraph'></textarea>
                </div>
                <div class="mt-4" >
                <button class="btn btn-warning w-100 fw-bold text-uppercase">Invia</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>