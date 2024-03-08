<?php
/**
 * Session 04 - Practice Exercise 2
 *
 * Problem Description
 *
 * Author:      Student Name <student email>
 * Version:     0.0
 *
 * Within this file you will find a number of TO DO statements
 * that will describe what needs to be completed in this exercise.
 *
 * Follow the instructions carefully.
 *
 */

// TODO: Create a function that converts meters per second to kilometers per hour

function ConvertMToKm($metersPerSec){
    return $metersPerSec * 3600 / 1000;
}

function ConvertKmToM($kilometersPerHour){
    return $kilometersPerHour * 1000 / 3600;
}

$metersPerSec = 10.2;
$kilometersPerHour = 65.3;

$metersPerSec1 = 0;
$kilometersPerHour1 = 0;

$metersPerSec2 = 1;
$kilometersPerHour2 = 3.6;

$metersPerSec3 = 30.55;
$kilometersPerHour3 = 110;
//TODO: Test your solution with the values below:
//            Test 1: 0m/s = 0km/h, 0km/h = 0m/s
//            Test 2: 1m/s = 3.6km/h, 3.6kph = 1m/s
//            Test 3: 30.55m/s = 109.98km/h, 110km/h = 30.56m/s


$mps2kph = ConvertMToKm($metersPerSec);
$kph2mps = ConvertKmToM($kilometersPerHour);

$mps2kph1 = ConvertMToKm($metersPerSec1);
$kph2mps1 = ConvertKmToM($kilometersPerHour1);

$mps2kph2 = ConvertMToKm($metersPerSec2);
$kph2mps2 = ConvertKmToM($kilometersPerHour2);

$mps2kph3 = ConvertMToKm($metersPerSec3);
$kph2mps3 = ConvertKmToM($kilometersPerHour3);
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
        <h2 class="text-2xl">TOPIC: Exercise 04</h2>
    </div>
</header>
<main class="container mx-auto p-4 mt-4 gap-4 flex flex-col">
    <article class="bg-white rounded-lg shadow-md shadow-gray-500/20 p-6">
        <header>
            <h2 class="text-2xl font-semibold mb-4">Velocity Conversion</h2>
        </header>
        <section>
            <?php

            echo '<p>'. $metersPerSec.'m/s is '.$mps2kph .' km/h</p>';
            echo '<p>'. $kilometersPerHour.'km/h is '.$kph2mps .' m/s</p>';

            echo '<p>'. $metersPerSec1.'m/s is '.$mps2kph1 .' km/h</p>';
            echo '<p>'. $kilometersPerHour1.'km/h is '.$kph2mps1 .' m/s</p>';

            echo '<p>'. $metersPerSec2.'m/s is '.$mps2kph2 .' km/h</p>';
            echo '<p>'. $kilometersPerHour2.'km/h is '.$kph2mps2 .' m/s</p>';

            echo '<p>'. $metersPerSec3.'m/s is '.$mps2kph3 .' km/h</p>';
            echo '<p>'. $kilometersPerHour3.'km/h is '.$kph2mps3 .' m/s</p>';
            ?>

        </section>
    </article>

</main>
<footer class="bg-gray-900 text-gray-500 mt-auto h-auto py-8 px-8 mt-8 w-full">
    <section class="container mx-auto flex flex-row flex-wrap justify-between">
        <div class="w-1/2">
            <p>
                &copy; Copyright 2024 YOUR NAME HERE, All rights Reserved
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
