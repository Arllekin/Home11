@extends('layout')

@section('title', 'Посты')

@section('body')
    <h1 style="font-weight: bold; color: blue; margin-left: 500px " >POST_TAG</h1>
    <div><a href="create.php" class="btn btn-primary" style="margin-top: 10px; font-size: larger; font-weight: bold">Add</a></div>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Post Id</th>
                <th scope="col">Index Id</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
        @foreach($posts as $postsC)
            <tr>
                <th scope="row">{{$postsC->id}}</th>
                <td>{{$postsC->title}}</td>
                <td>{{$postsC->body}}</td>
                <td>{{$postsC->slug}}</td>
                <td>{{ $postsC->category->title }}</td>
                <td>
                    @foreach($postsC->tags as $tag)
                        {{ $tag->title . ' ' }}
                    @endforeach
                </td>
                <td>{{$postsC->created_at}}</td>
                <td>{{$postsC->updated_at}}</td>
                <td>
                    <a href="update.php?id={{$postsC->id}}" class="btn btn-success">Edit</a>
                    <a href="delete.php?id={{$postsC->id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </table>
    </div>
@endsection