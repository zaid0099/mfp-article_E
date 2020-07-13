@extends('layout')

@section("contant")
<div id="wrapper">	
	<div id="page" class="container">
		<div id="content">
			<div class="title">

				<h2>{{ $article->title }}</h2>
				<br>
                <p><img src="/tamplet/images/banner.jpg" alt="" class="image image-full" /> </p>
                
				<p>{!! $article->body  !!}</p>

				<p>
					@foreach ($article->tags as $tag)
						<a herf="#"> {{ $tag->name }} </a>
					@endforeach
			   </p>
			   
			   <p> try 1 </p>

		    </div>
        </div>
    </div>
</div>
@endsection