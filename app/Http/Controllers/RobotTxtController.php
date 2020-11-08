<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Healey\Robots\Robots;

class RobotTxtController extends Controller
{

    public function __invoke()
    {
        if (App::environment() == 'production') {
            $host = App::make('url')->to('/');
            Robots::addUserAgent('*');
            Robots::addAllow('/');
            Robots::addDisallow('/#!blank/c14jg');
            Robots::addDisallow('/#!blank/c1khh');
            Robots::addSitemap($host . '/sitemap.xml');
            Robots::addHost($host);
        } else {
            Robots::addDisallow('*');
        }

        return Response::make(Robots::generate(), 200, ['Content-Type' => 'text/plain']);
    }
}
