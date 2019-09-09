@extends('layouts.layout')


@section('title','Portfolio')

@section('content')


<h1>@lang('Portfolio')</h1>



<ul>
	@forelse($projects as $project)
	<li><a href="{{ route('projects.show', $project) }}">{{ $project->title }}<br><small>{{ $project->description }}</small> <br>{{ $project->updated_at->diffForHumans() }}</a></li>

	@empty

	<li>No hay productos para mostrar</li>

	@endforelse

	{{ $projects->links() }}
</ul>
@endsection
