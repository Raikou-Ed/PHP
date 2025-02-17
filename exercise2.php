<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 2</title>
    <link rel="stylesheet" href="exercise2.css">
</head>
    <body>
            <?php
                $cities = [ 'Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul',
                            'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London' ];
                
                function getUnorderedList($list) {
                    echo "<ul class='card'>";
                    foreach ($list as $item) {
                        echo "<li>$item</li>";
                    }
                    echo "</ul>";
                }
            ?>
                    <?php
                        foreach ($cities as $city) {
                            echo $city;
                            if ($city != end($cities)) {
                                echo ", ";
                            }
                        }
                    ?>
                </p>
                <?php
                    sort($cities);
                    getUnorderedList($cities);
                    array_push($cities, 'Los Angeles', 'Calcutta', 'Osaka', 'Beijing');
                    sort($cities);
                    getUnorderedList($cities);
                ?>
    </body>
</html>
