@extends('layouts.app')

@section('page-title', 'Projects')
@section('content')
  {{-- @dump($projects) --}}
  <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Create Project</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Thumbnail</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($projects as $project)
        <tr>
          <th scope="row">{{ $project->id }}</th>
          <td>{{ $project->title }}</td>
          <td>{{ $project->getAbstract() }}</td>
          <td>{{ $project->thumbnail }}</td>
          <td>
            <a href="{{ route('admin.projects.show', $project) }}">
              <i class="bi bi-box-arrow-in-up-right"></i>
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
