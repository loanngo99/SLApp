<?php

namespace App\Services;

interface YoutubeGatewayInterface
{
    public function get(string $type, array $part);
}