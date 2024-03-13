<?php
$title = "Session 07 Retrieve";

// Define database configuration
define('DB_TYPE', 'mysql');
const DB_HOST = '127.0.0.1';
const DB_PORT = 3306;
const DB_NAME = 'INITIALS_saas_fed';
const DB_USER = 'INITIALS_saas_fed';
const DB_PASS = 'Password1';

// Create database connection (Database Source Name)
$dsn = DB_TYPE.':host='.DB_HOST.';port='.DB_PORT.
    ";dbname=".DB_NAME.';charset=utf8;';

try {
    $pdo = new PDO($dsn, DB_USER, DB_PASS);
    // Error mode will be exception based
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Retrieve data as associative array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $message = "Connected to DB";
} catch (PDOException $error) {
    echo "<h2>ERROR</h2>";
    echo "<p>Database Connection Issue: {$error->getMessage()}</p>";
    die();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col justify-between min-h-screen">

<header class="bg-black text-gray-200 p-4">
    <div class="container mx-auto flex flex-row gap-8">
        <h1 class="text-3xl font-semibold grow">YOUR NAME GOES HERE</h1>
        <p class="text-3xl font-semibold">
            <a href="index.php">
                <?= $title ?>
            </a>
        </p></div>
</header>

<main class="container mx-auto p-4 mt-6 flex flex-col gap-4 my-12">

        <section class="bg-green-200 rounded-lg shadow-sm shadow-black/30 p-2">
            <?php
            echo "<p>$message</p>";
            ?>
        </section>

    <article class="bg-white rounded-lg shadow-md shadow-black/30 p-6">
        <header>
            <h2 class="text-2xl font-semibold mb-4">CRUD: Users</h2>
        </header>
        <section>
            <header class="pb-4">
                <h3 class="text-xl">Users</h3>
            </header>
            <div class="flex flex-wrap gap-8">
                <?php

                if (isset($pdo)) {
                    $statement = $pdo->prepare('SELECT * FROM users');
                    $statement->execute();
                    $results = $statement->fetchAll();

                    foreach ($results as $user) {
                        ?>
                        <section class="w-1/5 rounded shadow shadow-black/30">
                            <div class="bg-black text-gray p-2 m-0 rounded-t flex flex-row justify-between">
                                <h4 class="text-gray-200 font-semibold ">
                                    <?= $user['given_name'] ?>
                                    <?= $user['family_name'] ?>
                                </h4>
                                <ul class="flex flex-row gap-1">
                                    <li><a href="#"
                                           class="text-sm font-semibold bg-blue-500 text-gray-800 px-1 rounded ">Show</a>
                                    </li>
                                    <li><a href="#"
                                           class="text-sm font-semibold bg-amber-500 text-gray-800 px-1 rounded ">Edit</a>
                                    </li>
                                    <li><a href="#"
                                           class="text-sm font-semibold bg-red-500 text-gray-800 px-1 rounded ">Delete</a>
                                    </li>
                                </ul>
                            </div>

                            <p>
                                <img src="uploads/avatars/<?= trim($user['photo'] ?? 'avatar.png') ?>"
                                     alt="Photo of <?= $user['given_name'] ?>"
                                     class="mx-auto">
                            </p>
                            <p class="mx-auto w-auto px-2 pb-2"><?= $user['email'] ?></p>
                        </section>
                        <?php
                    }
                }
                ?>

            </div>

        </section>
    </article>

</main>

<footer class="bg-gray-900 text-gray-500 mt-auto h-32 py-4 px-8 mt-8 w-full h-auto">
    <section class="container mx-auto flex flex-row flex-wrap justify-between">
        <div class="w-1/2">
            <p>
                &copy; Copyright 2024 YOUR NAME HERE, All rights Reserved
            </p>
        </div>
        <div class="w-2/6 min-h-32">
            <p class="text-sm">
                Before using any content on this page, and any associated pages, files or other materials, must be
                sought from the author. Once permission is provided to use said content, a notice must be appended
                to
                your page stating "Used with permission from <strong>MY NAME HERE</strong>. Original located at <a
                        href="#HTTP_LINK_TO_SOURCE">HTTP_LINK_TO_SOURCE</a>." with a link to the source.
            </p>
        </div>
    </section>
</footer>
</body>
</html>
