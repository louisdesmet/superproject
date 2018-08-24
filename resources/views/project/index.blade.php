@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Projects
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Title</th>
                </tr>
                @foreach ($projects as $project)
                    <tr>
                        <td><a href="{{ route('projects.edit', [$project])}}">{{ $project->title }}</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection