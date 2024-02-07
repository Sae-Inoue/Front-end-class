<?php

//single line comment

/**
 * ToDo: Variables
 * todo:
 * TODO:
 */

$total = 5;
//$8total = 5; <-- invalid
$_reserved = 6;
$aString =  "camelCase is lower first word, capital subsequent";
$userId = 1234567;

const PI = 3.141;
const MAX_AGE = 77;
const TITLE = "Welcome to ....";

echo "this is output";
print "this is output";
print $aString;
echo $aString, $userId;
echo $aString," ", $userId;
echo $aString." ". $userId;

echo "The ID : $userId";
echo 'The ID : $userId';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--TODO: Demo in HTML Comment-->
    <meta charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>TITLE GOES HERE</title>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">

<header class="bg-gray-800 text-white p-4">
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold">YOUR NAME GOES HERE</h1>
    </div>
</header>
<main class="container mx-auto p-4 mt-4 gap-4 flex flex-col">
    <article class="bg-white rounded-lg shadow-md shadow-gray-500/20 p-6">
        <header>
            <h2 class="text-2xl font-semibold mb-4">PAGE TITLE HERE</h2>
        </header>
        <section>
            <p>OUTPUT GOES HERE</p>
        </section>
    </article>
    <article class="bg-white rounded-lg shadow-md shadow-gray-500/20 p-6">
        <header>
            <h3 class="text-2xl font-semibold mb-4">Section Title</h3>
        </header>
        <section>
            <p>OUTPUT GOES HERE - YOU SHOULD REMOVE UNWANTED COMPONENTS OF THE PAGE</p>
            <p>For example remove this second article.</p>
            <p>Update the header and the footer as required.</p>
        </section>
    </article>
</main>
<footer class="bg-gray-900 text-gray-500 mt-auto h-32 py-4 px-8 mt-8 w-full">
    <section class="container mx-auto flex flex-row flex-wrap justify-between">
        <div class="w-1/2">
            <p>
                © Copyright 2024 YOUR NAME HERE, All rights Reserved
            </p>
        </div>
        <div class="w-1/3">
            <p class="text-sm">
                Before using any content on this page, and any associated pages, files or other materials, must be
                sought from the author. Once permission is provided to use said content, a notice must be appended to
                your page stating "Used with permission from <strong>MY NAME HERE</strong>. Original located at <a href="https://blackboard.northmetrotafe.wa.edu.au/bbcswebdav/pid-4098591-dt-content-rid-52245001_1/institution/NMTAFE/Int%20Tech%20and%20Auto/PIN%20Information%20Tech/ICT50220%20-%20Dip%20IT%20Adv%20Programming/C-SaaS-1-FED/1-Learning-Materials/starter.html#HTTP_LINK_TO_SOURCE">HTTP_LINK_TO_SOURCE</a>." with a link to the source.
            </p>
        </div>
    </section>



</footer></body></html>