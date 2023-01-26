@extends('layouts.app');

@section('content')
    <div class="container">
        <table class="table table-dark table-hover">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Slag</th>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->slag }}</td>
                            <td>{{ $post->title }}</td>
                            <td>
                                {{-- <a href="/posts/{{ $post->id }}" class="btn btn-primary">Visita</a> --}}
                                <a href="{{ route('admin.posts.show', ['post' => $post->id])}}" class="btn btn-primary">Visit</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.posts.edit', ['post' => $post->id])}}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                              <form action="{{ route('admin.posts.destroy', ['post' => $post])}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                              </form>
                          </td>
                        </tr>
                    @endforeach 
                </tbody>
              </table>
            </table>
        
            {{ $posts->links() }}
    </div>
@endsection