<table>
    @foreach($items as $item)
        <tr>
            <td>{{$item->id }}</td>
            <td>{{$item->title }}</td>
            <td>{{$item->content_raw}}</td>
        </tr>
    @endforeach
</table>
