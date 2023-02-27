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

    <form class="w-2/6 mx-auto bg-white p-8 mt-10 rounded-lg border-2" action="global.php" method="POST">
        <div class="mb-4">
            <label class="block font-bold mb-2" for="name">
                Name
            </label>
            <input class="border rounded w-full py-2 px-3" id="name" name="name" type="text" placeholder="Name" required>
        </div>
        <div class="mb-6">
            <label class="block font-bold mb-2" for="email">
                Email
            </label>
            <input class="border rounded w-full py-2 px-3" id="email" name="email" type="email" placeholder="Email" required>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 w-full text-white font-bold py-2 px-4 rounded" type="submit">
                Submit
            </button>
        </div>
    </form>

</body>

</html>