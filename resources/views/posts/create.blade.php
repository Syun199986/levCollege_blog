<!DOCTYPE html>
<html lang="ja">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Blog</title>
	</head>

	<body>
	    <h1>Blog Name</h1>
	    <form action="/posts" method="POST">
	        <div class="title">
	        	@csrf
	            <h2>Title</h2>
	            <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
	            <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
	        </div>
	        <div class="body">
	            <h2>Body</h2>
	            <textarea name="post[body]" placeholder="内容">{{ old('post.body') }}</textarea>
	            <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
	        </div>
	        <input type="submit" value="store"/>
	    </form>
	    <div class="back">
	        [<a href="/">back</a>]
	    </div>
	</body>

</html>