<?php

namespace App\Http\Controllers\Announcement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function api(Request $request) {
        $title = env('ANNOUNCEMENT_TITLE', '公告');
        $content = env('ANNOUNCEMENT_CONTENT', '<p>有任何问题，请加QQ群:462530805</p>');
        $show = env('ANNOUNCEMENT_SHOW', true);
        $res = [
            'id' => env('ANNOUNCEMENT_ID', 1),
            'show' => $show,
            'title' => $title,
            'content' => $content
        ];
        return RJM($res, 1, 'ok');
    }
}
