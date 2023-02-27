<?php
include_once('person.php');
$person = new Person();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $person->setName($_POST['name']);
    $person->setEmail($_POST['email']);

    echo <<<HEREDOC
    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Assainment 5</title>
            <script src="https://cdn.tailwindcss.com"></script>
        </head>
        <body>
            <div class="w-2/6 mx-auto bg-white p-8 mt-10 rounded-lg border-2">
                <div class="mb-4">
                    <p>
                    <span class="font-bold">Name:</span> {$person->getName()}
                    </p>
                </div>
                <div class="mb-6">
                    <p>
                    <span class="font-bold">Email:</span> {$person->getEmail()}
                    </p>
                </div>
                <a href="index.php" class="bg-blue-500 mx-aute text-white font-bold py-2 px-4 rounded">
                    Back
                </a>
            </div>
        </body>
    </html>
    HEREDOC;
}
