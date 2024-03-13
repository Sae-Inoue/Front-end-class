<?php
/**
 * Session 04 - Practice Exercise 5
 *
 * Divisible by 5
 *
 * Author:      Sae Inoue <20103543@tafe.wa.edu.au>
 * Version:     1.0
 *
 *
 * Follow the instructions carefully.
 *
 */


function DivisibleByFive($number){
    if($number % 5 === 0){
        return True;
    }else{
        return False;
    }
}


$number1 = 5;
$number2 = -55;
$number3 = 37;

$result = DivisibleByFive($number1);
$result2 = DivisibleByFive($number2);
$result3 = DivisibleByFive($number3);
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
        <h2 class="text-2xl">TOPIC: Exercise 05</h2>
    </div>
</header>
<main class="container mx-auto p-4 mt-4 gap-4 flex flex-col">
    <article class="bg-white rounded-lg shadow-md shadow-gray-500/20 p-6">
        <header>
            <h2 class="text-2xl font-semibold mb-4">Divisible by 5</h2>
        </header>
        <section>
            <?php
            if($result === True){
                echo  $number1. ' is divisible by 5';
            }else{
                echo $number1. ' is not divisible by 5';
            }

            echo '<br>';
            if($result2 === True){
                echo  $number2. ' is divisible by 5';
            }else{
                echo $number2. ' is not divisible by 5';
            }

            echo '<br>';
            if($result3 === True){
                echo  $number3. ' is divisible by 5';
            }else{
                echo $number3. ' is not divisible by 5';
            }
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
                your page stating "Used with permission from <strong>MY NAME HERE</strong>. Original located at <a
                        href="#HTTP_LINK_TO_SOURCE">HTTP_LINK_TO_SOURCE</a>." with a link to the source.
            </p>
        </div>
    </section>
</body>

</html>
