<?php
$title = "Session 07 Index";
include_once "database.php";
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
        </p>
    </div>
</header>

<main class="container mx-auto p-4 mt-6 flex flex-col gap-4 my-12">
    <section class="bg-green-200 rounded-lg shadow-sm shadow-black/30 p-2">
        <?php
        echo "<p>{$message}</p>";
        ?>
    </section>

    <article class="bg-white rounded-lg shadow-md shadow-black/30 p-6">
        <header>
            <h2 class="text-2xl font-semibold mb-4">CRUD</h2>
        </header>
        <section>
            <header class="pb-4">
                <h3 class="text-xl">It's not all CRUD</h3>
            </header>
            <div class="flex flex-wrap gap-8">

                <a href="create.php"
                   class="shadow shadow-black/50 rounded-2xl flex items-center text-xl grow h-16 tracking-widest border text-white font-bold bg-blue-500 p-4 justify-center border border-4 border-blue-500 hover:bg-blue-100 hover:text-black hover:shadow-none duration-500">Create</a>
                <a href="retrieve.php"
                   class="shadow shadow-black/50 rounded-2xl flex items-center text-xl grow h-16 tracking-widest border text-white font-bold bg-green-500 p-4 justify-center border border-4 border-green-500 hover:bg-green-100 hover:text-black hover:shadow-none duration-500">Retrieve</a>
                <a href="update.php"
                   class="shadow shadow-black/50 rounded-2xl flex items-center text-xl grow h-16 tracking-widest border text-white font-bold bg-yellow-500 p-4 justify-center border border-4 border-yellow-500 hover:bg-yellow-100 hover:text-black hover:shadow-none duration-500">Update</a>
                <a href="delete.php"
                   class="shadow shadow-black/50 rounded-2xl flex items-center text-xl grow h-16 tracking-widest border text-white font-bold bg-red-500 p-4 justify-center border border-4 border-red-500 hover:bg-red-100 hover:text-black hover:shadow-none duration-500">Delete</a>

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
