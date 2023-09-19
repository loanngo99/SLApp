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

    /**
     * @param string $type
     * @param string $query
     * @return array|mixed
     */
    public function get(string $type = Youtube::SEARCH, string $query = '')
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ',
            'Accept'        => 'application/json',
        ])->get($this->endPoint . $type . '?key=' . $this->apiKey . '&' . $query);
        return $response->json();
    }
}
