<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    
    <title>PHP Exercise 1</title> <!-- Title of the webpage -->

    <!-- Link to External CSS File -->
    <link rel="stylesheet" href="exercise1.css">
</head>
<body>

    <!-- Container for the PHP-generated text -->
    <div class="content">
        <?php
            // Define an array containing different types of weather
            $weather = ['rain', 'sunshine', 'clouds', 'hail', 'sleet', 'snow', 'wind'];
            
            // Create a formatted string describing the weather using array elements
            $str = "We've seen all kinds of weather this month. <br>
                    At the beginning of the month, we had {$weather[2]} and {$weather[4]}. <br>
                    Then came {$weather[6]} with a few {$weather[1]} and some {$weather[0]}. <br>
                    At least we didn't get any {$weather[3]} or {$weather[5]}.";

            // Output the generated weather description
            echo $str;
        ?>
    </div>

</body>
</html>
