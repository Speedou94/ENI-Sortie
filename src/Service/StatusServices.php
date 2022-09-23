<?php

namespace App\Service;

use App\Command\AutoStatusCommands;
use App\Entity\Campus;

class StatusServices
{
    public function __construct(private AutoStatusCommands $commands)
    {
    }

    public function verifyActiveStatus(Campus $campus): void
    {
        $this->commands->autoUpdatedStatus($campus);
        $this->commands->verifyCheckRegistration();
    }
}
