@extends('layouts.app') 

@section('content')
<div class="uk-container uk-margin">
	<div class="uk-card uk-card-default uk-width-1-1">
		<div class="uk-card-header">
			<h3 class="uk-card-title">Threads</h3>
		</div>
		<div class="uk-card-body">
			<dl class="uk-description-list">
				@foreach($threads as $thread)
					<dt><a href="{{ route('threads.show', $thread->id) }}">{{ $thread->title }}</a></dt>
					<dd>{{ $thread->body }}</dd>
					<hr> 
				@endforeach
			</dl>
		</div>
	</div>
</div>
@endsection