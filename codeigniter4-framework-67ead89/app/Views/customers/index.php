<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title; ?></title>
</head>
<body>
    <?= view('templates/nav'); ?>
    <h1>Customer Accounts</h1>
    
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= $customer['name']; ?></td>
                    <td><?= $customer['email']; ?></td>
                    <td><?= $customer['phone']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
