<?php

namespace App\DesignPatterns\Command;

interface CommandInterface
{
   public function execute();

   public function redo();

   public function undo();

}
