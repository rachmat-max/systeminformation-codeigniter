<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
</head>
<body>

<h1>Employee List</h1>
<a href="/employee/create">Create New Employee</a>

<?php if (session()->getFlashdata('errors')): ?>
    <ul>
        <?php foreach (session()->getFlashdata('errors') as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?= esc($employee['id']) ?></td>
                <td><?= esc($employee['name']) ?></td>
                <td><?= esc($employee['email']) ?></td>
                <td><?= esc($employee['position']) ?></td>
                <td><?= esc($employee['salary']) ?></td>
                <td>
                    <a href="/employee/edit/<?= $employee['id'] ?>">Edit</a> |
                    <a href="/employee/delete/<?= $employee['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
