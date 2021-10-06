@extends('layout')

@section('title', 'Пост')

@section('body')
    <h2 style="font-weight: bold; color: blue; margin-left: 500px ">Update Post</h2>
    <form method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" @isset($post) value="{{$post->title}}"
                    @endisset>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control" id="slug" @isset($post) value="{{$post->slug}}"
                    @endisset>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input type="text" name="body" class="form-control" id="body" @isset($post) value="{{$post->body}}"
                    @endisset>
        </div>
        <div>
            <label for="category_id" class="form-label">Category Id</label>
            <select name="category_id" id="category_id" class="form-select" aria-label="Default select example">
                @php
                    $postCategories = $post->category->id
                @endphp
                @foreach($categories as $category)
                    <option
                        @if (isset($post) && $post->category_id == $category->id) selected @endif
                        value="{{ $category->id }}">{{ $category->title }}
                    </option>
                @endforeach
{{--                <option selected> {{\Hillel\Models\Category::find($post->category_id)->title}}</option>--}}
{{--                @foreach($categories as $category)--}}
{{--                    @if ($category->id !== $post->category_id)--}}
{{--                        <option value="{{ $category->id }}">{{ $category->title }}</option>--}}
{{--                    @else @continue--}}
{{--                    @endif--}}
{{--                @endforeach--}}
            </select>
        </div>
        <div>
            <input type="submit" class="btn btn-success" value="Save" style="margin-top: 20px">
            <a href="index.php" class="btn btn-danger" style="margin-top: 20px">Back</a>
        </div>

        <input type="hidden" name="id" value="{{$post->id}}">
    </form>
@endsection