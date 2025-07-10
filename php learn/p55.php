<?php
echo "Starting a long process...\n"; // Newline for the starting message

$total_items = 100;
for ($i = 1; $i <= $total_items; $i++) {
    // Simulate some work
    usleep(50000); // Wait for 50 milliseconds

    $percentage = round(($i / $total_items) * 100);

    // Use \r to move the cursor to the beginning of the line
    // Use str_pad to ensure the line is long enough to cover previous output
    echo "\rProcessing: " . str_pad($percentage . "%", 5, ' ', STR_PAD_RIGHT);

    // You might also add a specific character to show progress visually
    // echo "\rProgress: [" . str_repeat("#", $i / 10) . str_repeat(" ", 10 - ($i / 10)) . "] " . $percentage . "%";

    // If it's the last iteration, print a newline to ensure the next output starts on a new line
    if ($i === $total_items) {
        echo "\n";
    }
}

echo "Process completed!\n";
?>