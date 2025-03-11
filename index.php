<?php require_once 'controller.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Slugifier PHP</title>
</head>
<body>
    <main>
        <header>
            <h1>Slugifier PHP</h1>
        </header>
        <section>
            <form action="" method="POST">
                <input type="text" name="palavra" id="palavra" placeholder="Palavra ou frase" value="<?= $palavra ?? '' ?>">
                <input type="submit" value="Converter">
            </form>
        </section>
        <section>
            <p><strong>Seu slug é:</strong></p>
            <p><?= $slug ?? '' ?></p>
        </section>
    </main>
</body>
</html>