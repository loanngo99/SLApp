<?php
namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Services\YoutubeService;

use function PHPUnit\Framework\throwException;

class VideoController extends Controller
{

    private $videoService;

    public function __construct(
        YoutubeService $youtubeVideoService
    ) {
        $this->videoService = $youtubeVideoService;
    }

    public function index()
    {
        try {
            $videos = $this->videoService->get('videos', 'part=snippet&id=BFflHDlTeHw&id=zH_SjIezX5I&id=ViBXz_2deCQ');
            dd($videos);
        } catch (Exception $e) {
            throwException($e);
        }
    }
}
