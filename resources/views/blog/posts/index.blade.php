@extends('layouts.guest')
@section('body')

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
        </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td>{{$item->id }}</td>
            <td>{{$item->title }}</td>
            <td>{{$item->category_id}}</td>
        </tr>
    @endforeach
        {{ $items->links() }}
    </tbody>
</table>

@endsection
