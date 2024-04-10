@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="comments">
    @foreach($comments as $comment)
        <div class="comment {{ $comment->dislikes > 10 ? 'high-dislikes' : '' }}">
            <p>{{ $comment->content }}</p>
            <span>{{ $comment->likes }} Likes</span>
            <span>{{ $comment->dislikes }} Dislikes</span>
            <!-- Reply Form -->
            <form method="POST" action="{{ route('comments.reply', $comment->id) }}">
                @csrf
                <div class="form-group">
                    <label for="reply-content">Reply:</label>
                    <textarea class="form-control" id="reply-content" name="content" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Reply</button>
            </form>
            <!-- Display Replies -->
            @foreach($comment->replies as $reply)
                <div class="reply">
                    <p>{{ $reply->content }}</p>
                    <!-- Display other reply details -->
                </div>
            @endforeach
        </div>
    @endforeach
</div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
