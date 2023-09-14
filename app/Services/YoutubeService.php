<?php

namespace App\Services;

use App\Models\Youtube;
use Illuminate\Support\Facades\Http;

class YoutubeService implements YoutubeGatewayInterface
{

    public $apiKey;
    public $accessToken = 'oauth2-token';

    public $endPoint = 'https://www.googleapis.com/youtube/v3/';

    public function __construct()
    {
        $this->apiKey = env('GG_API_KEY');
    }

    public function get(string $type = Youtube::VIDEO, array $part = [])
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer oauth2-token',
            'Accept'        => 'application/json',
        ])->get($this->endPoint . $type . '?access_token=oauth2-token&part=snippet&id=BFflHDlTeHw&id=zH_SjIezX5I&id=ViBXz_2deCQ' . '&key=' . $this->apiKey);
        return $response->json();
    }
}
