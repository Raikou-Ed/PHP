<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 1</title>
    <link rel="stylesheet" href="https://sntleq.github.io/phpstuff/style.css">
</head>
<body>
    <section>
        <div class="marquee center">
            <div>
                <h2>EXERCISE 1</h2>
                <h2>EXERCISE 1</h2>
                <h2>EXERCISE 1</h2>
                <h2>EXERCISE 1</h2>
                <h2>EXERCISE 1</h2>
            </div>
        </div>
        <div class="content cut">
            <div class="bg"></div>
            <p class="card btn">
                <?php
                    $weather = ['rain', 'sunshine', 'clouds', 'hail', 'sleet', 'snow', 'wind'];
                    $str = "We've seen all kinds of weather this month. <br>
                            At the beginning of the month, we had {$weather[2]} and {$weather[4]}. <br>
                            Then came {$weather[6]} with a few {$weather[1]} and some {$weather[0]}. <br>
                            At least we didn't get any {$weather[3]} or {$weather[5]}.";
                    echo $str;
                ?>
            </p>
        </div>
    </section>
</body>
</html>
