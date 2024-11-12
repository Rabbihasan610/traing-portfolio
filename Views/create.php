<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Simple PHP Lightwegiht MVC</title>
</head>

<body>

      <h1>Simple PHP Lightwegiht MVC</h1>

      <form action="<?php \Pecee\SimpleRouter\SimpleRouter::post(BASE_DIR . '/store', [My\Portfolio\Controllers\Frontend\HomeController::class, 'store']); ?>" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <button type="submit">Submit</button>
      </form>
</body>

</html>