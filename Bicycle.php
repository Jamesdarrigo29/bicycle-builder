<?php
class Bicycle
{
    private $handlebars = false;
    private $wheels = false;
    private $chains = false;
    private $pedals = false;
    private $seat = false;
    private $running = false;

    public function addPart($partName)
    {
        if ($this->handlebars && $this->wheels && $this->chains && $this->pedals && $this->seat) {
            echo "\nAll parts are already added.\n";
            return;
        }
        // Check if the part name is singular or plural //
        $isPlural = (substr($partName, -1) === 's');

        switch ($partName) {
            case 'handlebars':
                if ($this->handlebars) {
                    echo "\nHandlebars are already added.\n";
                } else {
                    $this->handlebars = true;
                    echo "\nHandlebars have been added.\n";
                }
                break;
            case 'wheels':
                if ($this->wheels) {
                    echo "\nWheels are already added.\n";
                } else {
                    $this->wheels = true;
                    echo "\nWheels have been added.\n";
                }
                break;
            case 'chains':
                if ($this->chains) {
                    echo "\nChains are already added.\n";
                } else {
                    $this->chains = true;
                    echo "\nChains have been added.\n";
                }
                break;
            case 'pedals':
                if ($this->pedals) {
                    echo "\nPedals are already added.\n";
                } else {
                    $this->pedals = true;
                    echo "\nPedals have been added.\n";
                }
                break;
            case 'seat':
                if ($this->seat) {
                    echo "\nSeat is already added.\n";
                } else {
                    $this->seat = true;
                    echo "\nSeat has been added.\n";
                }
                break;
            default:
                echo "\nInvalid part: $partName\n";
                return;
        }


        // Use "has" for singular, and "have" for plural //
        $verb = $isPlural ? 'have' : 'has';
    }

    public function run()
    {
        if (!$this->running) {
            $missingParts = array();
            if (!$this->handlebars) $missingParts[] = "handlebars";
            if (!$this->wheels) $missingParts[] = "wheels";
            if (!$this->chains) $missingParts[] = "chains";
            if (!$this->pedals) $missingParts[] = "pedals";
            if (!$this->seat) $missingParts[] = "seat";

            if (empty($missingParts)) {
                $this->running = true;
                echo "Bicycle is running!\n";
            } else {
                echo "\nThe bicycle is missing the following parts: " . implode(", ", $missingParts) . "\n";
            }
        } else {
            echo "The bicycle is already running.\n";
        }
    }

    public function isRunning()
    {
        return $this->running;
    }
}
