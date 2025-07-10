<?php

// Ensure the script is run from the command line (CLI)
if (PHP_SAPI !== 'cli') {
    die("Please run this script from your terminal (command line) to see the intended effect.\n");
}

$y = 0; // Initialize a variable for demonstration

echo "Starting task...\n"; // An initial message on its own line

// --- Phase 1: Show "PROCESSING" with a changing number ---
for ($i = 0; $i < 6; $i++) { // Loop for 6 seconds
    $y = $i * 10 + 10; // Simulate some increasing value (10, 20, 30, 40, 50, 60)

    // Build the "PROCESSING" string
    // Use str_pad to ensure the output line is consistent in length,
    // which helps prevent artifacts when overwriting.
    $processing_message = " PROCCESSING " . str_pad($y . "%", 4, ' ', STR_PAD_RIGHT);

    // Use \r to move the cursor to the beginning of the line
    echo "\r" . $processing_message;

    sleep(1); // Wait for 1 second before the next update
}

// --- Phase 2: Overwrite with "COMPLETE" after the 6 seconds ---

// Use \r to move the cursor to the beginning of the line again
// Then print " COMPLETE" and add spaces to ensure it completely overwrites the longer
// " PROCCESSING XX%" message, followed by a newline for clarity.
echo "\rCOMPLETE      \n"; // Added spaces to clear any previous longer text

echo "Task finished.\n"; // Final message on a new line

?>