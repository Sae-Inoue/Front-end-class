<?php
/**
 * echo exercise
 *

 * Author:    Sae Inoue <Student Email>20103543@tafe.wa.edu.au
 * Version:   1.0
 * Completed: 2024-02-20
 *
 *Create a variable for each line of the following rhyme:
 * For want of a nail the shoe was lost.
 * For want of a shoe the horse was lost.
 * For want of a horse the rider was lost.
 * For want of a rider the message was lost.
 * For want of a message the battle was lost.
 * For want of a battle the kingdom was lost.
 * And all for the want of a nail.
 * Using PHP echo statements, and embedding HTML, output the values of each variable in a separate paragraph.
 * DO NOT USE any variable type or other constructs beyond what you have learned to date.
 */

$given = 'Sae';
$family = 'Inoue';
$food = 'Salmon';

$nail = 'For want of a nail the shoe was lost.';
$shoe = 'For want of a shoe the horse was lost.';
$horse = 'For want of a horse the rider was lost.';
$rider = 'For want of a rider the message was lost.';
$message = 'For want of a message the battle was lost.';
$battle = 'For want of a battle the kingdom was lost.';
$all = 'And all for the want of a nail.';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Use SCRIPT as we are using the Tailwind CDN for now -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Session 02 Exercises</title>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
<header class="bg-amber-950 text-pink-400 p-4">
    <div class="container mx-auto flex flex-row gap-8">
        <h1 class="text-3xl font-semibold grow">Sae Inoue</h1>
        <p class="text-3xl font-semibold">Session 02, Exercise 03</p>
    </div>
</header>
<main class="container mx-auto p-4 mt-6 flex flex-col gap-12 ">

    <article class="bg-white rounded-lg shadow-md shadow-gray-500/20 p-6">
        <header>
            <h3 class="text-2xl font-semibold mb-4">Exercise 02</h3>
        </header>
        <section>
            <p><?php echo $given . ' '.$family .' and I like '. $food ?></p>
            <p>For example remove this second article.</p>
            <p>Update the header and the footer as required.</p>
        </section>
    </article>
    <article class="bg-white rounded-lg shadow-md shadow-gray-500/20 p-6">
        <header>
            <h3 class="text-2xl font-semibold mb-4">Exercises 03</h3>
        </header>
        <section>
            <p><?php echo $nail.'<br>'.$shoe.'<br>'.$horse.'<br>'.$rider.'<br>'.$message.'<br>'.$battle.'<br>'.$all ?></p>
            <p>For example remove this second article.</p>
            <p>Update the header and the footer as required.</p>
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
                sought from the author. Once permission is provided to use said content, a notice must be appended to
                your page stating "Used with permission from <strong>Sae Inoue</strong>. Original located at <a
                        href="#HTTP_LINK_TO_SOURCE">HTTP_LINK_TO_SOURCE</a>." with a link to the source.
            </p>
        </div>
    </section>
</footer>
</body>

</html>
<?php
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Person</th>";
echo "<th>Salary</th>";
echo "</tr>";
echo "</thead>";
echo "</table>";
echo "<tbody>";
echo "<tr>";
echo "<td>James</td>";
echo "<td>$1000</td>";
echo "</tr>";
echo "</tbody>";

?>
