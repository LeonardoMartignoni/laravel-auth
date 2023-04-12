@extends('layouts.app')

@section('page-title', $project->title)
@section('content')
  {{-- @dump($project) --}}
  <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Back to all projects</a>
  <img src="{{ $project->thumbnail }}" alt="Project Thumbnail" width="240px" class="d-block my-4">
  <p><strong>Description:</strong><br> {{ $project->description }}</p>
@endsection
