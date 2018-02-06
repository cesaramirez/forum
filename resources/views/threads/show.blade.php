@extends('layouts.app') 

@section('content')
<div class="uk-container uk-margin">
	<div class="uk-card uk-card-default uk-width-1-1">
		<div class="uk-card-header">
			<h3 class="uk-card-title">{{ $thread->title }}</h3>
		</div>
		<div class="uk-card-body">
			{{ $thread->body }}
			<hr>
			<ul class="uk-list uk-list-divider">
				@foreach($thread->replies as $reply)
				<li>
					<article class="uk-comment">
						<header class="uk-comment-header uk-position-relative">
							<p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">{{ $reply->user->name }} said {{ $reply->created_at->diffForHumans() }}</a></p>
						</header>
						<div class="uk-comment-body">{{ $reply->body }}</div>
					</article>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
@endsection