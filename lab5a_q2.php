<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Question 2</title>
</head>
<body>
    <div class="container">
    <table border="1" style="border-collapse:collapse">
        <thead>
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $students = [
            [
                'name' => 'Alice',
                'program' => 'BIP',
                'age' => 21
            ],
            [
                'name' => 'Bob',
                'program' => 'BIS',
                'age' => 20
            ],
            [
                'name' => 'Raju',
                'program' => 'BIT',
                'age' => 22
            ],
        ];

        foreach ($students as $info) {
            echo "<tr>";
            echo "<td>{$info['name']}</td>";
            echo "<td>{$info['program']}</td>";
            echo "<td>{$info['age']}</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    </div>
</body>
</html>
