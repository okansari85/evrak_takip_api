<?php

namespace App\Interfaces;

interface ILogos
{
    public function uploadLogo($file);
    public function updateLogo($file,$file_id);
}
