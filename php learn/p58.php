<?php

// Make sure the script is run from the command line (CLI)
if (PHP_SAPI !== 'cli') {
    die("Please run this script from your terminal (command line).\n");
}

echo "First, we print 'Loading...'";
sleep(2); // Wait 2 seconds so you can see it

// Now, use \r to move the cursor back to the start of the line
echo "\r";
sleep(1); // Wait 1 second

// Then, print 'Done.' which will overwrite 'Loading...'
echo "Done.     \n"; // Added spaces to clear any leftover characters from "Loading..."

echo "This message appears on a new line.\n";

?>