<form method="POST" action="{{ route('comments.store') }}">
    @csrf
    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
    <div class="form-group">
        <label for="comment-content">Comment:</label>
        <textarea class="form-control" id="comment-content" name="content" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit Comment</button>
</form>