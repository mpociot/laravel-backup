<?php

namespace Spatie\Backup\Events;

use Spatie\Backup\BackupDestination\BackupDestination;

class BackupWasSuccessful
{
    /** @var \Spatie\Backup\BackupDestination\BackupDestination */
    public $backupDestination;

    public function __construct(BackupDestination $backupDestination)
    {
        $this->backupDestination = $backupDestination;
    }
}
