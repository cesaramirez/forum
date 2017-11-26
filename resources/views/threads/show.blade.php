@extends('layouts.app') 

@section('content')
<div class="uk-container uk-margin">
	<div class="uk-card uk-card-default uk-width-1-1">
		<div class="uk-card-header">
			<h3 class="uk-card-title">{{ $thread->title }}</h3>
		</div>
		<div class="uk-card-body">
			{{ $thread->body }}
		</div>
	</div>
</div>
@endsection