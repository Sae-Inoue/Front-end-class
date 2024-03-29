<?php
/**
 * echo exercise
 *

 * Author:    Sae Inoue <Student Email>20103543@tafe.wa.edu.au
 * Version:   1.0
 * Completed: 2024-02-20
 *
 * The first holds your given name.
 * The second will have your family name.
 * The last one will contain your favourite food.
 * Finally, add the required PHP to output the values on separate lines in the "card" area.
 * Make sure that the output appears on one line in the form:
 * GIVEN_NAME FAMILY_NAME and I like FAVOURITE_FOOD
 * NB: the names and other values do not have to be all upper case.
 */

$given = 'Sae';
$family = 'Inoue';
$food = 'Salmon';


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
        <p class="text-3xl font-semibold">Session 02, Exercise 02</p>
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
