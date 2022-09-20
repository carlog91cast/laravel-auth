@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">Author</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->author }}</th>
                        <td><a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a></td>
                        <td>{{ $post->post_content }}</td>
                        <td>{{ $post->post_date }}</td>
                        <td><button class="btn btn-primary"><a class="text-decoration-none text-white"
                                    href="{{ route('admin.posts.edit', $post->id) }}">Edit</a></button></td>
                        {{-- <td>
                        <form class="form-delete" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><a class="text-decoration-none text-white"
                                    href="">Delete</a></button>
                        </form>
                    </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
