
<div class="form-control">
        @if(class_basename(Route::currentRouteAction())=='BookController@create')

            <form action="{{ route('book.store') }}" method="post">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="author_id">Author:</label>
                <select id="author_id" name="author_id" required>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
                <br>
                <label for="description">Description:</label>
                <textarea id="description" name="description"></textarea>
                <br>
                <label for="page_count">Page Count:</label>
                <input type="number" id="page_count" name="page_count" required>
                <br>
                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
            @else
        <form action="{{route('author.store')}}" method="post">
            @csrf
                <div class="form-group">
                    <input type="text" name="name" placeholder="Имя автора">
                </div>
            <button type="submit" class="btn btn-primary">Создать</button>

        </form>
            @endif()


</div>

