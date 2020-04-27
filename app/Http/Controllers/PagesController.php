<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller {
    private $pages;

    public function __construct()
    {
        $this->pages = array();
}
    public function index(){
        $data['title'] = "index - laracms";
        $data['page'] = DB::selectOne("SELECT * FROM t_posts WHERE id=?",
        ['home']);
        $data['blog'] = DB::select("SELECT * FROM t_posts WHERE category=?",
        ['blog']);

    return view('pages_index', $data);
    }

    public function singlePage($id) {
        $data['title'] = "single - laracms";
        $data['page'] = DB::selectOne("SELECT * FROM t_posts WHERE id=?",
        ['home']);

    return view('pages_index', $data);
    }

    public function blog(){
        $data['title'] = "blog - laracms";
        $data['blog'] = DB::select("SELECT * FROM t_posts WHERE category=?",
        ['blog']);

        return view('blog_index', $data);
    }

    public function singleBlog($id) {
        $data['blog'] = DB::selectOne("SELECT * FROM t_posts WHERE id=?",
        [$id]);
        $data['title'] = $data['blog']->title .  ' - laracms';

    return view('blog_single', $data);
    }

    public function singleBlogDelete($id) {
        DB::delete("DELETE FROM t_posts WHERE id=?", [$id]);

    return redirect('/blog');
    }

    public function singleBlogEdit($id) {
        $data['blog'] = DB::selectOne("SELECT * FROM t_posts WHERE id=?",
        [$id]);
        $data['title'] = $data['blog']->title .  ' - laracms';
    return view('blog_edit', $data);
    }

    public function singleBlogEditSave(Request $request) {
        $method = $request->method();
        if ($method == "POST") {
            DB::update("UPDATE t_posts SET content=? WHERE id=?", [
                $request->input('content'),
                $request->input('id')
            ]);
            return redirect('/blog');
        }else {
            return redirect('/blog');
        }
    }

    public function singleBlogAddPost() {
        $data['title'] = "Form Add Post";
        return view('blog_add', $data);
    }

    public function singleBlogAddSave(Request $request) {
        $method = $request->method();
        if ($method == "POST") {
            DB::insert("INSERT INTO t_posts (id, title, content, category) VALUES (?, ?, ?, 'blog')", [
                $request->input('id'),
                $request->input('title'),
                $request->input('content')
            ]);
            return redirect('/blog');
        }else {
            return redirect('/blog');
        }
    }
}