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

                    <form method="POST" action="{{ route('comments.store') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        <div class="form-group">
                        <label for="comment-content">Comment:</label>
                        <textarea class="form-control" id="comment-content" name="content" rows="3" required></textarea>
                    </div>
                        <button type="submit" class="btn btn-primary">Submit Comment</button>
                    </form>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
