<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    public function test(User $user)
    {
        $redis = new Redis();
        $redis->set();
        $client->set('foo', 'bar');
        $value = $client->get('foo');
        Redis::set('a', '233');
        $a = Redis::get('a');
        return [$user->id, $a];
    }
}
