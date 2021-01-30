<head>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<tbody>
<table>
    @foreach($items as $item)
        <tr>
            <td>{{$item->id }}</td>
            <td>{{$item->title }}</td>
            <td>{{$item->parent_id}}</td>
        </tr>
    @endforeach
        {{ $items->links() }}
</table>
</tbody>
