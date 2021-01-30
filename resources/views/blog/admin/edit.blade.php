@extends('layouts.guest')

@section('body')
    <form method="post" action="{{ route('blog.admin.categories.update',$item->id) }}">
        @method('PUT')

        @csrf
  <input type="text" name="title" value="{{ $item->title }}">
  <input type="text" name="category_id" value="{{$item->category_id}}">
  <input type="submit" value="update">
    </form>
@endsection
