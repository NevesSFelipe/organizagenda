<?php $base = $_ENV['BASE_PATH']; ?>

<!doctype html>

<html lang="pt-BR">
    
    <head>
    
        <meta charset="UTF-8" />
        <title><?= $title ?> - Organizagenda</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta
            name="description"
            content="Clínica estética especializada em beleza, saúde e bem-estar. Agende seu procedimento online."
        />

        <!-- CSS GLOBAL -->
        <link rel="stylesheet" href="<?= $base ?>assets/css/home/global.css" />

        <!-- CSS DA PÁGINA -->
        <?php if (!empty($css)) : ?>
            <link rel="stylesheet" href="<?= $base ?>assets/css/home/<?= $css ?>" />
        <?php endif; ?>

    </head>

    <body class="<?= $bodyClass ?? '' ?>">
        <header>
            <div class="logo">
                <a href="<?= $base ?>" style="text-decoration: none; color: inherit"> Sua Estética </a>
            </div>

            <div class="actions">
                <a href="#" class="btn-agendar"> Agendar Procedimento </a>

                <div class="icon-login">
                    <a href="<?= $base ?>funcionarios/login">👤</a>
                </div>
            </div>
        </header>
    </body>
</html>