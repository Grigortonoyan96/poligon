@extends('layouts.guest')

@section('body')
    @php                                        @endphp
    <form method="post" action="{{ route('blog.admin.categories.update',$item->id) }}">
        @method('PUT')
        @csrf
  <input type="text" name="title" value="{{ old('title',$item->title) }}">
  <input type="text" name="category_id" value="{{$item->category_id}}">
  <input type="submit" value="update">
    </form>
@endsection
