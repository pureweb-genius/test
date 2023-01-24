@section('content')
<table>
            <tr>
                <th>Name</th>
                <th>Author</th>
                <th>Description</th>
                <th>Page Count</th>
            </tr>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->page_count }}</td>
                </tr>
            @endforeach
        </table>
@endsection





