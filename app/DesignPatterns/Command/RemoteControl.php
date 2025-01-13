<?php

namespace App\DesignPatterns\Command;

class RemoteControl
{
    public function submit(CommandInterface $command){
        $command->execute();
    }

}
