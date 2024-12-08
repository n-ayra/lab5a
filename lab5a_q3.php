<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Question 3</title>
</head>
<body>

<?php

function multiplication($multiplier){
    $results = [];
    for($i = 1; $i<13; $i++){
        $results[]= $i * $multiplier;
    }

    return $results;

}

$multiplier = 2;
$mResults = multiplication($multiplier);

?>
<div class="container">
<table border="1px" style="border-collapse: collapse;">
		<tr>
			<th>No</th>
			<th>Multiplier</th>
			<th>Answer</th>
		</tr>
		<?php
		foreach ($mResults as $index => $answer) {
			echo "<tr>";
			echo "<td>" . ($index + 1) . "</td>";
			echo "<td>$multiplier × " . ($index + 1) . "</td>";
			echo "<td>$answer</td>";
			echo "</tr>";
		}
		?>
	</table>
    </div>

</body>
</html>