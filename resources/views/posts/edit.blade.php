<x-app-layout>
<!DOCTYPE html>
<html lang="ja">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Edit</title>
	</head>

	<body>
	    <h1 class="title">Edit</h1>
	    <div class="content">
    	    <form action="/posts/{{ $post->id }}" method="POST">
    	        @csrf
    	        @method('PUT')
    	        <div class="content__title">
    	            <h2>Title</h2>
    	            <input type="text" name="post[title]" value="{{ $post->title }}"/>
    	            <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
    	        </div>
    	        <div class="content__body">
    	            <h2>Body</h2>
    	            <textarea name="post[body]">{{ $post->body }}</textarea>
		            <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
    	        </div>
    	        <input type="submit" value="update"/>
    	    </form>
	    </div>
	</body>

</html>
</x-app-layout>