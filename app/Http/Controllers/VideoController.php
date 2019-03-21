<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//librerias
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

//Models
use App\Video;
use App\Comment;
class VideoController extends Controller
{
    public function createVideo(){
        return view('video.createVideo');
    }
}
