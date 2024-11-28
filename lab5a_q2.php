<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
    $student = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21,
        ],
        [
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20,
        ],
        [
            'name' => 'Raju',
            'program' => 'BIT',
            'age' => 22,
        ],
    ];

    echo "<table>";
    echo "<tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
          </tr>";

    foreach ($student as $x) {
        echo "<tr>";
        foreach ($x as $z) {
            echo "<td>$z</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>

