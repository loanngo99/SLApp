<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\YoutubeService;
use App\Http\Controllers\Exception;

use function PHPUnit\Framework\throwException;

class VideoController extends Controller
{

    private $videoService;

    public function __construct(
        private YoutubeService $youtubeVideoService
    ) {
        $this->videoService = $youtubeVideoService;
    }

    public function index()
    {
        try {
            $videos = $this->videoService->get('videos');
            dd($videos);
        } catch (Exception $e) {
            throwException($e);
        }
    }
}
