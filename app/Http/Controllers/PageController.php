<?php

namespace App\Http\Controllers;

use App\Category;
use App\Video;

class PageController extends Controller
{
    /**
     * 测试
     */
    public function test()
    {



    }

    /**
     * 首页
     * @param null
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $categories = Category::where(['status' => STATUS_ON_LINE])->get();


        foreach($categories as $category){

            //todo 获取最新的10条和点赞最好的15条记录挂到 $categories
        }



        return view('index')->with(compact('$categories'));
    }

    /**
     * 播放页面
     * @param $video_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function play($video_id)
    {
        $video = Video::find($video_id);

        return view('play', compact('video'));
    }

    /**
     * 详情页面
     * @param $video_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail($video_id)
    {
        $video = Video::with('category')->find($video_id);

        return view('detail', compact('video'));
    }

    /**
     * 视频列表页面
     * @param $category_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function videoList($category_id)
    {
        $videoList = Video
            ::where(['category_id' => $category_id, 'status' => STATUS_ON_LINE])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('video-list', compact('videoList'));
    }

    /**
     * 教程页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tutorial()
    {
        return view('tutorial');
    }
}
