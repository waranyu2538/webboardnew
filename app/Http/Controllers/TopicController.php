<?php
namespace App\Http\Controllers;
use App\Comment;
use App\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = Topic::orderBy('created_at', 'desc')->get();
        return view('topic.index')->withTopics($topics);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::guest()) {
            App::abort(403, 'Unauthorized action.');
        }
        return view('topic.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::guest()) {
            App::abort(403, 'Unauthorized action.');
        }
        $topic = new Topic($request->all());
        $topic->user()->associate(Auth::user());
        $topic->save();
        return redirect()->action('TopicController@show', $topic->id);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topic = Topic::findOrFail($id);
        $comments = $topic->comments->sortBy('created_at');
        return view('topic.show')
            ->withTopic($topic)
            ->withComments($comments);

    }


    /**
     * Store a newly created comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function comment($id, Request $request)
    {
        if (Auth::guest()) {
            App::abort(403, 'Unauthorized action.');
        }
        $topic = Topic::findOrFail($id);
        $comment = new Comment($request->all());
        $comment->topic()->associate($topic);
        $comment->user()->associate(Auth::user());
        $comment->save();
        return redirect()->action('TopicController@show', $topic->id);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}