<?php
/**
 * Session 04 - Practice Exercise 6
 *
 * Short Changed
 *
 * Author:      Sae Inoue <20103543@tafe.wa.edu.au>
 * Version:     1.0
 *
 *
 * Follow the instructions carefully.
 *
 */

// TODO: Create a solution for the following problem:
//       ...
//       You have been asked to design a machine that will
//       calculate the combination of Australian coins and notes
//       to be given to a customer as change so that they
//       are given the smallest number of coins and/or notes
//       ...
//       Australian denominations for currency are:
//       $100, $50, $20, $10, $5 (notes) and
//       $2, $1, 50c, 20c, 10c and 5c (coins)

function ShortChanged($change){

    $notes = [100,50,20,10,5];
    $coins = [2,1,is_float(0.5),is_float(0.2),is_float(0.1),is_float(0.05)];
    $countNote = array();
    $countCoin = array();

    foreach($notes as $note){
        if($change >= $note){
            $restNote = floor($change / $note) ;
            $change = $change - $restNote * $note;
            $countNote[] = $restNote;
        }else{
            $countNote[] = 0;
        }
    }

    foreach($coins as $coin){
        if($change >= $coin){
            $restCoin = floor($change / $coin) ;
            $change = $change - $restCoin * $coin;
            $countCoin[] = $restCoin;
        }else{
            $countCoin[] = 0;
        }
    }

    var_dump($countNote);
    var_dump($countCoin);
}




$change = 32;
$result = ShortChanged($change);

echo $result;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> Session 04</title>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
<header class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex flex-row justify-between">
        <h1 class="text-3xl font-semibold">Sae Inoue</h1>
        <h2 class="text-2xl">TOPIC: Exercise 06</h2>
    </div>
</header>
<main class="container mx-auto p-4 mt-4 gap-4 flex flex-col">
    <article class="bg-white rounded-lg shadow-md shadow-gray-500/20 p-6">
        <header>
            <h2 class="text-2xl font-semibold mb-4">Short Changed</h2>
        </header>
        <section>
            <?php
            // TODO: Using a suitable method to output the starting value
            //       followed by the result in the form shown in plain HTML below
            echo 'For change of'. $change . ' hand the customer';
            ?>
            <p>For change of $32 hand the customer 1×$20, 1×$10, 1×$2  </p>
            <p>For change of $3.24 hand the customer 1×$2, 1×$1, 1×20c, 1x5c  </p>
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
<!-- TODO: Test your solution with the values below:
           Change: $32 becomes 1×$20, 1×$10, 1×$2
           Change: $3.24 becomes 1×$2, 1×$1, 1×20c, 1x5c
           Change: $73.76 becomes 1×$50, 1×$20, 1×$2, 1×$1, 1×50c, 1×20c, 1x5c
-->
<!-- TODO: Resolve any errors, if they exist. -->
<!-- TODO: Remove the comment from the top of the document that starts
            * Within this file you ...
           and ends with
            * and save your work.
-->
<!-- TODO: Update the version to 1.0 -->
<!-- TODO: Finally remove all TODO comments from the code. -->
</html>
