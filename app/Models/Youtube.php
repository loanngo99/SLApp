<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Youtube extends Model {
    // activities
    const ACTIVITY = 'activities';

    // Channels
    const CHANNEL = 'channels';

    // Members
    const MEMBER = 'members';

    // Play list Items
    const PLAYLIST_ITEMS = 'playlistItems';

    // Play lists
    const PLAYLIST = 'playlists';

    // Search
    const SEARCH = 'search';

    // Videos
    const VIDEO = 'videos';
    const VIDEO_CATEGORY = 'videoCategories';
}
