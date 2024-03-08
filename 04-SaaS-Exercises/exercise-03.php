<?php
/**
 * Session 04 - Practice Exercise 3
 *
 * counting the total of animals legs
 *
 * Author:      Sae Inoue<20103543@tafe.wa.edu.au>
 * Version:     1.0
 *
.
 *
 * Follow the instructions carefully.
 *
 */

function TotallLegs($chicken,$cow,$pig){
    return $chicken * 2 + $cow * 4 + $pig * 4;
}

$chicken1 = 2;
$chicken2 = 1;
$chicken3 = 5;

$cow1 = 3;
$cow2 =2;

$pig1 = 5;
$pig2 = 3;
$pig3 = 8;

$totalLegs1 = TotallLegs($chicken1,$cow1,$pig1);
$totalLegs2 = TotallLegs($chicken2,$cow2,$pig3);
$totalLegs3 = TotallLegs($chicken3,$cow2,$pig3);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Session 04</title>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
<header class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex flex-row justify-between">
        <h1 class="text-3xl font-semibold">Sae Inoue</h1>
        <h2 class="text-2xl">TOPIC: Exercise 03</h2>
    </div>
</header>
<main class="container mx-auto p-4 mt-4 gap-4 flex flex-col">
    <article class="bg-white rounded-lg shadow-md shadow-gray-500/20 p-6">
        <header>
            <h2 class="text-2xl font-semibold mb-4">Counting Legs</h2>
        </header>
        <section>
            <?php
            echo '<p>'. $chicken1. 'Chickens, '.$cow1.'Cows and'.$pig1.'Pigs have'.'<strong>'.$totalLegs1. ' legs'.'</strong></p>';
            echo '<p>'. $chicken2. 'Chickens, '.$cow2.'Cows and'.$pig2.'Pigs have'.'<strong>'.$totalLegs2. ' legs'.'</strong></p>';
            echo '<p>'. $chicken3. 'Chickens, '.$cow2.'Cows and'.$pig3.'Pigs have'.'<strong>'.$totalLegs3. ' legs'.'</strong></p>';

            ?>

        </section>
    </article>

</main>
<footer class="bg-gray-900 text-gray-500 mt-auto h-auto py-8 px-8 mt-8 w-full">
    <section class="container mx-auto flex flex-row flex-wrap justify-between">
        <div class="w-1/2">
            <p>
                &copy; Copyright 2024 Sae Inoue, All rights Reserved
            </p>
        </div>
        <div class="w-1/2">
            <p class="text-sm">
                Before using any content on this page, and any associated pages, files or other materials, must be
                sought from the author. Once permission is provided to use said content, a notice must be appended to
                your page stating "Used with permission from <strong>Sae Inoue</strong>. Original located at <a
                        href="#HTTP_LINK_TO_SOURCE">HTTP_LINK_TO_SOURCE</a>." with a link to the source.
            </p>
        </div>
    </section>
</body>

</html>
