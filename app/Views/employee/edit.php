<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>
<body>

<h1>Edit Employee</h1>

<?php if (session()->getFlashdata('errors')): ?>
    <ul>
        <?php foreach (session()->getFlashdata('errors') as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form action="/employee/update/<?= $employee['id'] ?>" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="_method" value="PUT">

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?= esc($employee['name']) ?>"><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?= esc($employee['email']) ?>"><br>

    <label for="position">Position:</label>
    <input type="text" name="position" id="position" value="<?= esc($employee['position']) ?>"><br>

    <label for="salary">Salary:</label>
    <input type="text" name="salary" id="salary" value="<?= esc($employee['salary']) ?>"><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
