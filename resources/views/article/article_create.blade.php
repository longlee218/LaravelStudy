<div class="container">
    <form action="{{ route('article.store') }}" method="post">
        <div class="form-group">
            @csrf
            <label>Title</label>
            <input  type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" name="content_article"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>
</div>
