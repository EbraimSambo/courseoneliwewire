<?php

namespace App\Enums;

enum StutusType: string 
{
    case STARTED = "started";
    case IN_PROGRESS = "in_progress";
    case DONE = "done";


    public function color(): string {
        return match ($this) {
            self::STARTED => 'color:blue',
            self::IN_PROGRESS => 'color:yellow',
            self::DONE => 'color:green',
        };
    }
}