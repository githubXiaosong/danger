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

        // 获取最新的10条和点赞最好的15条记录挂到 $categories
        $categories = Category::where(['status' => STATUS_ON_LINE])->get();

        foreach ($categories as $category) {
            $newList = Video::where(['category_id' => $category->id])
                ->latest('updated_at')->take(10)->get();

            $popList = Video::where(['category_id' => $category->id])
                ->orderBy('pop_num', 'desc')->take(14)->get();

            $category['newList'] = $newList;
            $category['popList'] = $popList;

        }

        return view('index')->with(compact('categories'));
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
        $category = Category::find($category_id);

        $videoList = Video
            ::where(['category_id' => $category_id, 'status' => STATUS_ON_LINE])
            ->latest('updated_at')
            ->paginate(10);

        $popList = Video::where(['category_id' => $category_id])
            ->orderBy('pop_num', 'desc')->take(14)->get();


        return view('video-list')->with(['videoList'=>$videoList,'popList'=>$popList,'category'=>$category]);
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
