<!DOCTYPE html>
<html>
<head>
    <title>Traffic Light Simulation</title>
</head>
<body>
    <h2>Traffic Light Simulation</h2>

    <form method="post">
        <label for="color">Enter traffic light color (red, yellow, green):</label><br><br>
        <input type="text" name="color"  required>
        <input type="submit" value="Submit">
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $color = strtolower(trim($_POST["color"]));

        switch ($color) {
            case "red":
                echo "<strong>Action:</strong> Stop";
                break;
            case "yellow":
                echo "<strong>Action:</strong> Wait";
                break;
            case "green":
                echo "<strong>Action:</strong> Go";
                break;
            default:
                echo "<strong>Error:</strong> Invalid input. Please enter red, yellow, or green.";
        }
    }
    ?>
</body>
</html>
