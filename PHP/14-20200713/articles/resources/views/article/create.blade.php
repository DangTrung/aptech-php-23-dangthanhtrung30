<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('article.store')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
            
        </div>
        <div>
            <label for="categories">Categories:</label>
            <select name="categories" id="catogeries">
                @foreach($errors as $category)
                    <option value="{{$category}}">{{$category}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Save</button>
        <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    </form>
</body>
</html>