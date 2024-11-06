<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee User</title>
</head>
<body>

<h1>Employee User</h1>

<?php if (session()->getFlashdata('errors')): ?>
    <ul>
        <?php foreach (session()->getFlashdata('errors') as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form action="/employee/store" method="post">
    <?= csrf_field() ?>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?= old('name') ?>"><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?= old('email') ?>"><br>

    <label for="position">Position:</label>
    <input type="text" name="position" id="position" value="<?= old('position') ?>"><br>

    <label for="salary">Salary:</label>
    <input type="text" name="salary" id="salary" value="<?= old('salary') ?>"><br>

    <button type="submit">Save</button>
</form>

</body>
</html>
