<x-app-layout>
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
			<h1>認証済みユーザー</h1>
			<div class="user">
			    {{ Auth::user()->name }}
			</div>
			<a href='/posts/create'>create</a>
			<hr>
			<div class="posts">
	            @foreach ($posts as $post)
	                <div class='post'>
	                    <h2 class='title'>
	                    	<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
	                    </h2>
	                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
	                    <p class='body'>{{ $post->body }}</p>
	                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
	                    	@csrf
	                    	@method('DELETE')
	                    	<button type="button" onclick="deletePost({{ $post->id }})">delete</button>
	                    </form>
	                    <script>
	                    	function deletePost(id) {
	                    		'use strict'
	                    		
	                    		if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
	                    			document.getElementById(`form_${id}`).submit();
	                    		}
	                    	}
	                    </script>
	                </div>
	            @endforeach
	        </div>
	        <div class="paginate">{{ $posts->links() }}</div>
		</body>
	
	</html>
</x-app-layout>