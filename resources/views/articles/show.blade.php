@extends('layout')

@section("contant")
<div id="wrapper">	
	<div id="page" class="container">
		<div id="content">
			<div class="title">

				<h2>{{ $article->title }}</h2>
				<br>
                <p><img src="/tamplet/images/banner.jpg" alt="" class="image image-full" /> </p>
                
			    <p>{!! $article->body  !!}}</p>

				<p>
				@foreach ($article->tags as $tag)
					<a href="#">{{ $tag->name }}</a>
				@endforeach
				</p>
			  
		    </div>
        </div>
    </div>
</div>
@endsection