<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Character encoding and viewport settings for responsiveness -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title of the page displayed in the browser tab -->
    <title>PHP Exercise 2</title>
    
    <!-- Link to external CSS file for styling -->
    <link rel="stylesheet" href="exercise2.css">
</head>
<body>
    <!-- PHP Block to define cities array -->
    <?php
        // Define an array of cities
        $cities = [ 
            'Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul',
            'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London' 
        ];
        
        // Function to display the cities as an unordered list
        function getUnorderedList($list) {
            // Start unordered list
            echo "<ul class='card'>";
            // Loop through the cities and display each as a list item
            foreach ($list as $item) {
                echo "<li>$item</li>";
            }
            // End unordered list
            echo "</ul>";
        }
    ?>

    <!-- PHP Block to display cities as a comma-separated string -->
    <?php
        // Loop through the cities array and display each city, separated by commas
        foreach ($cities as $city) {
            echo $city;
            // Add a comma between cities, but not after the last city
            if ($city != end($cities)) {
                echo ", ";
            }
        }
    ?>
    
    <!-- Another PHP block for sorting and adding more cities -->
    <?php
        // Sort cities alphabetically
        sort($cities);
        // Call function to display sorted cities as an unordered list
        getUnorderedList($cities);
        
        // Add more cities to the array
        array_push($cities, 'Los Angeles', 'Calcutta', 'Osaka', 'Beijing');
        
        // Sort the updated list of cities
        sort($cities);
        // Call function to display the updated sorted cities
        getUnorderedList($cities);
    ?>
</body>
</html>
