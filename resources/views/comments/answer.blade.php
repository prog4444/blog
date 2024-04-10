@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="margin-top:100px; ">
                <div class="card-header">{{ __('comments') }}</div>

                <div class="card-body">
                
    <div class="row">
        <div class="col-12">

            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                       
                    </div>
                    <div class="row">

                        <form action="{{ route('answer.store') }}" method="POST" accept-charset="utf-8" >
                            @csrf
                            <div class="col-12">
                                <!-- Input -->
                                <div class="mt-1">
                                    <label class="sr-only">Вопрос...</label>
                                    <textarea class="form-control form-control-flush" name="content"   rows="5" placeholder="Вопрос" maxlength="1000"></textarea>
                                </div>
                              
                            </div>
                            <div class="col-12">
                                <!-- Icons -->
                                <button type="submit" class="text-reset btn-primary">
                                    Сохронить
                                </button>
                            </div>
                        </form>
                    </div> <!-- / .row -->
                </div>
            </div>
        </div>
    </div>



    

                    @foreach ($comments as $comment)
                    <div class="comment">
                    <div class="col-auto">
                                            <!-- Time -->
                                            <time class="comment-time">
                                                {{$comment->created_at}}
                                            </time>

                                        </div>
                    <p>{{ $comment->content }}</p>
                    <p>Likes: {{ $comment->likes }}</p>
                    <p>Dislikes: {{ $comment->dislikes }}</p>
                    <form action="{{ route('comments.like', $comment) }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit">Like</button>
                    </form>
                    <form action="{{ route('comments.dislike', $comment) }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit">Dislike</button>
                    </form>
                </div>
                <form method="POST" action="{{ route('comments.reply', $comment->id) }}">
                @csrf
                <div class="form-group">
                    <label for="reply-content">Reply:</label>
                    <textarea class="form-control" id="reply-content" name="content" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">ответ</button>
            </form>
            @endforeach





</div>
</div>
</div>
</div>
</div>



@endsection
