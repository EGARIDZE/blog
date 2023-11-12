 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/main.css">
</head>

<body>

    <div class="wrapper">

        <?php require_once 'incs/header.php' ?>

        <main class="main py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <?php foreach ($posts as $post) : ?>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $post['title']; ?></h5>
                                    <p class="card-text"><?= $post['description']; ?></p>
                                    <a href="post?id=<?= $post['id'] ?>">Go</a>
                                </div>
                            </div>

                        <?php endforeach ?>

                    </div>

                    <?php require_once 'incs/sidebar.php' ?>

                </div>
            </div>
        </main>

        <?php require_once 'incs/footer.php' ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>