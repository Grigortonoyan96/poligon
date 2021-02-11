@extends('layouts.guest')
@section('body')
    <a href="{{route('blog.admin.categories.create')}}" class="btn btn-primary">ADD</a>
<table style="text-align: center">
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Title
            </th>
            <th>
                Category ID
            </th>
            <th>
                Edit
            </th>
            <th>
                Delete
            </th>
        </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td>{{$item->id }}</td>
            <td>{{$item->title }}</td>
            <td>{{$item->category_id}}</td>
            <td>
                <a href="{{route('blog.admin.categories.edit',$item->id)}}" class="btn btn-primary">edit</a>
            </td>
            <td>
                <form action="{{ route('blog.admin.categories.destroy', $item->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <input class="btn btn-danger" type="submit" value="Delete" />
                </form>
            </td>
        </tr>


    @endforeach
{{--        {{ $items->links() }}--}}
    </tbody>
</table>

@endsection
