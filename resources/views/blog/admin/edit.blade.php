@extends('layouts.guest')

@section('body')
    @php /** @var \Illuminate\Support\ViewErrorBag $errors */                                       @endphp
     @if($errors->any())
         {{  $errors->first() }}
         @endif
    @if(session('success'))
        <div>
            {{ session()->get('success') }}
        </div>


        @endif
    <form method="post" action="{{ route('blog.admin.categories.update',$item->id) }}">
        @method('PUT')
        @csrf
  <input type="text" name="title" value="{{ old('title',$item->title) }}">
  <input type="text" name="category_id" value="{{$item->category_id}}">
  <input type="submit" value="update">
    </form>
@endsection
