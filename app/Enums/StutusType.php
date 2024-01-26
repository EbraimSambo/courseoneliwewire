<?php

namespace App\Enums;

enum StutusType: string 
{
    case STARTED = "started";
    case IN_PROGRESS = "in_progress";
    case DONE = "done";
}