<?php
$title = "Session 07 Retrieve";

include_once "database.php";

// Check if the request was a POST and that SAVE button Pressed
if($_SERVER["REQUEST_METHOD"]=== "POST" && isset($_POST['save'])){

    //set the error message
    $message['given_name'] = "Given Name is required.".
                             "It must be at least 1 character long,".
                             "and less than 192 characters";

    //Check if the given name is set
    $nameLength = strlen($_POST["given_name"] ?? '');
    if($nameLength > 0 && $nameLength <= 192){
        //Retrieve the GIven Name from the POST data & sanitise
        $givenName = htmlspecialchars($_POST['given_name']);
        unset($message['given_name']);
    }

    // Set the error message for email
    $messages['email'] = "Invalid email Address";
    $emailLength = strlen($_POST['email'] ?? '');
    if($emailLength > 6 && $emailLength <512){
        // Retrieve the Email from the Post data & sanitise
        $email = htmlspecialchars($_POST['email']);
        unset($messages['email']);
    }


    // If there is only one error message(Successful database connection)
    if(count($messages??[]===1)){
        // Set photo to null
        $photo = "avatar.png";
        //Create the SQL to add the user
        $sql = "INSERT INTO users(given_name, email, photogragh)".
            "VALUES( :given, :mail, :photograph)";

        $parameters = [
            "given_name"=>$givenName,
            "email"=>$email,
            "photo"=>$photo
        ];
        // Prepare the SQL statement
        $statement = $pdo->prepare($sql);

        // try executing the prepaed statement
        try{

        }
        // catch any PDO errors
       catch(PDOException $error){
            // Add PDO errors to the messages
            $errorInfo = $error -> errorInfo;
            $errorMessage = $errorInfo[2]??"UNKNOWN ERROR";
            $messages['error'] = $errorMessage;
       }

       // if the prepared statement error code is 0
        if($statement->errorCode()===0){
            //redirect to the index.php page
            header('Location:index.php');
            //exit the script
            exit;
        }
    }



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

    <?php
    if(isset($messages)){
        foreach ($messages as $key=>$message){

            ?>
            <section class="bg-green-200 rounded-lg shadow-sm shadow-black/30 p-2">
                <?php
                echo "<p>{$message}</p>";
                ?>
            </section>
            <?php
        } //end foreach
    }  // end if
    ?>

    <article class="bg-white rounded-lg shadow-md shadow-black/30 p-6">
        <header>
            <h2 class="text-2xl font-semibold mb-4">CRUD: Users</h2>
        </header>
        <section>
            <header class="pb-4">
                <h3 class="text-xl">Users</h3>
            </header>
            <form class="flex flex-wrap flex-col gap-8" action="create.php" method="POST">
                <div class="flex flex-col md:flex-row">
                    <label for="given" class="w-40">Given Name *</label>
                    <input type="text" id="given" name="given_name" class="grow bg-gray-50 p-1 border-gray-700/25 rounded">
                </div>

                <!--Family Name -->

                <div class="flex flex-col md:flex-row">
                    <label for="email" class="w-40">Email Address</label>
                    <input type="email" id="email" name="email" class="grow bg-gray-50 p-1 border-gray-700/25 rounded">
                </div>

                <!--Password input Here-->

                <!--Confirm Password-->

                <!--- Photo input(file) here-->

                <div class="flex flex-col md:flex-row gap-4">
                    <label class="w-32 -m-2"></label>
                    <button type="submit" name="save" class="px-4 py-1 bg-green-800 text-gray-200 shadow shadow-black/50 rounded-md
                            hover:bg-green-300 hover:text-gray-800 hover:shadow-none
                            transition duration-500">Save
                    </button>
                    <button type="reset" name="clear" class="px-4 py-1 bg-gray-800 text-gray-200 shadow shadow-black/50 rounded-md
                            hover:bg-gray-300 hover:text-gray-800 hover:shadow-none
                            transition duration-500">
                            Reset
                    </button>
                    <a href="index.php" class="px-4 py-1 bg-blue-800 text-gray-200 shadow shadow-black/50 rounded-md
                            hover:bg-blue-300 hover:text-gray-800 hover:shadow-none text-center
                            transition duration-500">Cancel</a>
                </div>

                <?php

                if (isset($pdo)) {
                    $statement = $pdo->prepare('SELECT * FROM users');
                    $statement->execute();
                    $results = $statement->fetchAll();


                        ?>
<!--            </form>-->
<!--                        <section class="w-1/5 rounded shadow shadow-black/30">-->
<!--                            <div class="bg-black text-gray p-2 m-0 rounded-t flex flex-row justify-between">-->
<!--                                <h4 class="text-gray-200 font-semibold ">-->
<!--                                    --><?php //= $user['given_name'] ?>
<!--                                    --><?php //= $user['family_name'] ?>
<!--                                </h4>-->
<!--                                <ul class="flex flex-row gap-1">-->
<!--                                    <li><a href="#"-->
<!--                                           class="text-sm font-semibold bg-blue-500 text-gray-800 px-1 rounded ">Show</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="#"-->
<!--                                           class="text-sm font-semibold bg-amber-500 text-gray-800 px-1 rounded ">Edit</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="#"-->
<!--                                           class="text-sm font-semibold bg-red-500 text-gray-800 px-1 rounded ">Delete</a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!---->
<!--                            <p>-->
<!--                                <img src="uploads/avatars/--><?php //= trim($user['photo'] ?? 'avatar.png') ?><!--"-->
<!--                                     alt="Photo of --><?php //= $user['given_name'] ?><!--"-->
<!--                                     class="mx-auto">-->
<!--                            </p>-->
<!--                            <p class="mx-auto w-auto px-2 pb-2">--><?php //= $user['email'] ?><!--</p>-->
<!--                        </section>-->
                        <?php
                }
                ?>

            </form>

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
