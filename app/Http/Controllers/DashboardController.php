<?php

namespace App\Http\Controllers;

use App\Models\Content_data;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function community()
    {
        return view('community');
    }

    public function help()
    {
        return view('button.help');
    }

    public function page()
    {
        return view('button.page2');
    }

    // public function button() {
    //     return view('button.button');
    // }

    public function about()
    {
        return view('about');
    }

    public function search()
    {
        return view('search');
    }

    public function results1()
    {
        return view('results1');
    }

    public function results2()
    {
        return view('results2');
    }

    public function test()
    {
        return view('test');
    }

    public function article()
    {
        return view('article');
    }

    public function sample()
    {
        return view('sample');
    }

    public function DataInsert(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $category = $request->input('category');
        $tags = $request->input('tags');
        $reference = $request->input('reference');
        $isInsertSuccress = Content_data::insert(['title' => $title,
            'description' => $description,
            'category' => $category,
            'tags' => $tags,
            'reference' => $reference]);
        return redirect('button');
    }
    public function android1(Request $request)
    {

        $data = [
            'sub_posts' => Content_data::where('category', 'Android')->get(),
            'android_table' => Content_data::where('id', $request->id)->where('category', $request->category)->first()
        ];

        // if ($request->category === 'Android') {
        //     // Fetch data for Android category
        //     $data = [
        //         'sub_posts' => Content_data::where('category', 'Android')->get(),
        //         'android_table' => Content_data::where('id', $request->id)->where('category', $request->category)->first()
        //     ];
        // } else if ($request->category === 'Android') {
        //     // Fetch data for Hardware category
        //     $data = [
        //         'sub_posts' => Content_data::where('category', 'Android')->get(),
        //         'hardware_table' => Content_data::where('id', $request->id)->where('category', $request->category)->first()
        //     ];
        // } else {
        //     // Invalid category parameter
        //     abort(404);
        // }
        return view('android.android1', compact('data'));
    }
}
