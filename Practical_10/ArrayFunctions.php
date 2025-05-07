<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Array Functions - Harshvardhan Patil</title>
</head>
<body>
    <h1>PHP Array Functions - Assignment</h1>

    <?php
        // Initial Array
        $arr = array("PHP", "Java", "Python");
        echo "<h3>1. Original Array</h3>";
        print_r($arr);

        // Add element at end
        array_push($arr, "C++");
        echo "<h3>2. After Adding 'C++' at End (array_push)</h3>";
        print_r($arr);

        // Remove last element
        array_pop($arr);
        echo "<h3>3. After Removing Last Element (array_pop)</h3>";
        print_r($arr);

        // Add element at beginning
        array_unshift($arr, "HTML");
        echo "<h3>4. After Adding 'HTML' at Beginning (array_unshift)</h3>";
        print_r($arr);

        // Remove first element
        array_shift($arr);
        echo "<h3>5. After Removing First Element (array_shift)</h3>";
        print_r($arr);

        // Count elements
        echo "<h3>6. Total Number of Elements (count)</h3>";
        echo "Count: " . count($arr);

        // Sort array
        sort($arr);
        echo "<h3>7. Sorted Array (sort)</h3>";
        print_r($arr);

        // Reverse array
        $reversed = array_reverse($arr);
        echo "<h3>8. Reversed Array (array_reverse)</h3>";
        print_r($reversed);

        // Check value exists
        echo "<h3>9. Check if 'Java' Exists (in_array)</h3>";
        echo in_array("Java", $arr) ? "'Java' exists in the array." : "'Java' not found.";

        // Unique values
        echo "<h3>10. Unique Values (array_unique)</h3>";
        $unique = array_unique($arr);
        print_r($unique);

        // Merge with another array
        $newArr = array("Go", "Rust");
        $merged = array_merge($arr, $newArr);
        echo "<h3>11. Merged Array (array_merge)</h3>";
        print_r($merged);

        // Slice array
        $sliced = array_slice($arr, 1, 2);
        echo "<h3>12. Sliced Array from Index 1 (array_slice)</h3>";
        print_r($sliced);

        // Sum of numeric array
        $numbers = array(1, 2, 3, 4, 5);
        echo "<h3>13. Sum of Numbers (array_sum)</h3>";
        echo "Sum: " . array_sum($numbers);

        // Max element
        echo "<h3>14. Maximum Value (max)</h3>";
        echo "Max: " . max($numbers);

        // Min element
        echo "<h3>15. Minimum Value (min)</h3>";
        echo "Min: " . min($numbers);
    ?>

    <hr>
</body>
</html>
