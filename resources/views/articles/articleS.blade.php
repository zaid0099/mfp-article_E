 @extends('layout')

@section("contantr")
    <div id="wrapper">
	<div id="page" class="container">
	<div id="content">
	<div class="title">
         @foreach($articles as $article)
        	<h3><a href="/articles/{{$article->id}}">{{ $article->title }}</a></h3>
        	<p>{{$article->excerpt}}</p>
        @endforeach
	</div>
    </div>
    </div>
    </div>
@endsection

@section("contant")
<div id="wrapper">
	<div id="page" class="container">
         @foreach($articles as $article)
			<div id="content">
				<div class="title">
					<h2><a href="/articles/{{$article->id}}">{{ $article->title }}</a></h2>
					<br>
                	<p><img src="/tamplet/images/banner.jpg" alt="" class="image image-full" /> </p>
			    	<p>{{ $article->body }}</p>
				</div>
        	</div>
         @endforeach
    </div>
</div>
@endsection
