<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc')->paginate(10);
        return view('comments.answer', compact('comments'));
    }
    public function answer()
    {
        return view('comments.answer');
    }
    public function comments($id)
    {
        $parent=Comment::with('user')->find($id);
        $comments = Comment::with('user')->where('parent_id',$id)->get();
        return view('comments.comments', compact('comments','parent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CommentRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CommentRequest $request)
    {
        $arr =$request->all();
        $arr['user_id']=auth()->id();
        $comment = Comment::create($arr);
      
        return redirect()->route('comments.list',$request->parent_id);
    }
    public function answerStore(Request $request)
    {
        // $this->validate($request, [
        //     'content' => 'required|string|min:2|max:1000',
        // ]);
        // $arr =$request->all();
        // $arr['user_id']=auth()->id();
        // $comment = Comment::create($arr);
        // // $request->session()->flash('status', '<strong>Успешно.</strong> Вопрос #' . $comment->id . ' добавлен');
        // return back();
    }

    public function like(Comment $comment)
    {
        $comment->increment('likes');
        return redirect()->back();
    }

    public function dislike(Comment $comment)
    {
        $comment->increment('dislikes');
        return redirect()->back();
    }


    public function reply(Request $request, Comment $comment)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $reply = new Comment();
        $reply->content = $request->input('content');
        $reply->parent_id = $comment->id;
        $reply->save();

        return redirect()->back()->with('success', 'Reply added successfully.');
    }






    /**
     * @OA\Get(
     ** path="/api/user",
     *   tags={"Users"},
     *   summary="Users",
     *   operationId="user",
     *
     *   @OA\Response(
     *      response=201,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=401,
     *       description="Unauthenticated"
     *   ),
     *   @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *)
     **/

    public function show()
    {
        $comment = Comment::all();
        return $comment;
    }


}
