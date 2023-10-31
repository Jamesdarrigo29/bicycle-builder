<?php
require 'Bicycle.php';

$bicycle = new Bicycle();

while (true) {
    echo "\nChoose an option:\n";
    echo "1. Add Part\n";
    echo "2. Run Bicycle\n";
    echo "3. Exit\n";
    echo "\n"; 
    echo "Enter your choice: ";
    $choice = trim(fgets(STDIN));

    if ($choice === '1') {
        echo "\n"; 
        echo "Enter the part name (e.g., handlebars, wheels, chains, pedals, seat): ";
        $partName = trim(fgets(STDIN));
        $bicycle->addPart($partName);
    } elseif ($choice === '2') {
        echo "\n"; 
        if (!$bicycle->isRunning()) {
            $bicycle->run();
        } else {
            echo "\nThe bicycle is already running.\n";
        }
    } elseif ($choice === '3') {
        echo "\nGoodbye!\n";
        break;
    } else {
        echo "\nInvalid choice. Please select 1, 2, or 3.\n";
    }
}


