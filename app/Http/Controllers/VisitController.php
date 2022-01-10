<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Models\Link;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function store(Link $link, Request $request)
    {
        if ($link->link !== $request->input('link')) {
            return abort(403);
        }

        return $link->visits()
            ->create([
                'user_agent' => $request->userAgent()
            ]);
    }
}
