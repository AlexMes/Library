    <table class="table table-bordered">
        <thead>
        <tr>
            <th width="100px">Id</th>
            <th>Name</th>
            <th>Author</th>
            <th>Publishing Office</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->title }}</td>
                <td>
                    @foreach ($value->authors as $author)
                        {{ $author->name }}<br>
                    @endforeach
                </td>
                <td>
                    @foreach ($value->publishingOffices as $publishingOffice)
                        {{ $publishingOffice->name }}<br>
                    @endforeach</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $books->render() !!}





