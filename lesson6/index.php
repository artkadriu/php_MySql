
<?php

$dogs = array (
    array('Chihauna','Mexico',20),
    array('Husky','Siberia',15),
    array('bulldog','England',10),
);
echo $dogs[0][0]. "Origin:" .$dogs[0] [1].  " ,life span:". $dogs[0] [2]. "<br>";
echo $dogs[1][0]. "Origin:" .$dogs[1] [1]. " ,life span:". $dogs[1] [2]. "<br>";
echo $dogs[2][0]. "Origin:" .$dogs[2] [1].  " ,life span:". $dogs[2] [2]."<br>";


for ($row = 0; $row<3; $row++){
    echo "<p><b>Row number $row </b></p>";
    echo "<ul>";
    for ($col = 0; $col<3; $col++){
        echo "<li>". $dogs [$row] [$col]. "</li>";
    }
}


?>


<?php

<




$data = [
    ['iphones' => '16', 'Stock' => 25, 'sold' => '5'],
    ['iphones' => '12', 'Stock' => 30, 'sold' => '25'],
    ['iphones' => '14', 'Stock' => 35, 'sold' => '4'],
];


echo '<table border="1">';
echo '<tr><th>Iphones</th><th>Stock</th><th>Sold</th></tr>';


foreach ($data as $row) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($row['iphones']) . '</td>';
    echo '<td>' . htmlspecialchars($row['Stock']) . '</td>';
    echo '<td>' . htmlspecialchars($row['sold']) . '</td>';
    echo '</tr>';
}




echo '</table>';
?>







