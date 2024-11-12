<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Simple PHP Lightwegiht MVC</title>
</head>

<body>

      <h1>Simple PHP Lightwegiht MVC</h1>

      <table border="1">
            <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
            </tr>
            <?php foreach ($data as $row) : ?>

                  <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                  </tr>

            <?php endforeach; ?>
      </table>

</body>

</html>