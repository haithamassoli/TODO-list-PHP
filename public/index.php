<?php
session_start();
if (!isset($_SESSION["arr"])) {
  $_SESSION["arr"] = [];
}
if (isset($_POST["add"])) {
  $todo = $_POST["todo"];
  array_push($_SESSION["arr"], $todo);
}
if (isset($_POST["del"])) {
  $_SESSION["arr"] = [];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body class="h-screen flex justify-center items-center">
  <div class="w-full max-w-xs">
    <form method="POST" action="index.php" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="mb-4">
        <label class="block text-center text-gray-700 text-sm font-bold mb-2">
          Todo List
        </label>
      </div>
      <div>
        <?php foreach ($_SESSION["arr"] as $key => $value) { ?>
          <label class="block text-gray-700 text-sm font-bold mb-2" for="todo">
            <?php echo $_SESSION["arr"][$key];  ?>
          </label>
        <?php  } ?>
        <input class="
              shadow
              appearance-none
              border
              rounded
              w-full
              py-2
              px-3
              text-gray-700
              leading-tight
              focus:outline-none focus:shadow-outline
            " id="todo" type="text" name="todo" placeholder="" />

      </div><br>
      <div class="flex items-center justify-between">
        <button class="
              bg-blue-500
              hover:bg-blue-700
              text-white
              font-bold
              py-2
              px-4
              rounded
              focus:outline-none focus:shadow-outline
            " type="submit" name="add">
          Add
        </button>
        <button class="
              bg-red-500
              hover:bg-red-700
              text-white
              font-bold
              py-2
              px-4
              rounded
              focus:outline-none focus:shadow-outline
            " type="submit" name="del">
          Delete All
        </button>
      </div>
    </form>
    <p class="text-center text-gray-500 text-xs">
      &copy;2021 Haihtam. All rights reserved.
    </p>
  </div>
</body>

</html>