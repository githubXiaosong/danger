<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{


    /**
     * 视频删除
     */
    public function videoDelete()
    {
        $validator = Validator::make(
            rq(),
            [
                'video_id' => 'required|exists:videos,id'
            ],
            [
                'video_id.required' => '视频ID不存在',
                'video_id.exists' => '视频ID查找不到'
            ]
        );
        if ($validator->fails())
            return back()->withErrors($validator->messages());

        $video = Video::find(rq('video_id'));
        $video->delete();

        return back()->with('suc_msg', '删除成功');
    }

    /**
     * 更新视频刷新时间
     */
    public function videoUpdate(){

        $validator = Validator::make(
            rq(),
            [
                'video_id' => 'required|exists:videos,id'
            ],
            [
                'video_id.required' => '视频ID不存在',
                'video_id.exists' => '视频ID查找不到'
            ]
        );
        if ($validator->fails())
            return back()->withErrors($validator->messages());

        $video = Video::find(rq('video_id'));

        $video->updated_at = time();
        $video->save();

        return back()->with('suc_msg', '更新成功');

    }


    /**
     * 添加视频
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function videoAdd(Request $request)
    {

        $validator = Validator::make(
            rq(),
            [
                'title' => 'required|max:255',
                'category_id' => 'exists:categories,id',
                'cover_uri' => 'required|image',
                'video_uri' => 'active_url',//可以为空
                'img1' => 'required|image',
                'img2' => 'required|image',
                'img3' => 'required|image',
                'img4' => 'required|image'

            ],
            [

            ]
        );
        if ($validator->fails())
            return back()->withErrors($validator->messages());

        $video = new Video();
        $video->title = rq('title');

        $video->category_id = rq('category_id');

        $video->video_uri = rq('video_uri');

        $cover_path = $request->cover_uri->store('img', 'public');
        $video->cover_uri = $cover_path;

        $cover_path = $request->img1->store('img', 'public');
        $video->img1 = $cover_path;

        $cover_path = $request->img2->store('img', 'public');
        $video->img2 = $cover_path;

        $cover_path = $request->img3->store('img', 'public');
        $video->img3 = $cover_path;

        $cover_path = $request->img4->store('img', 'public');
        $video->img4 = $cover_path;

        $video->save();

        return back()->with('suc_msg', '添加成功');
    }
}
