<form action="{{ route($routeName) }}" method="post">
    @method($methodName)
    @csrf

    <div>
        <label for="title">Title</label>
        <input type="text" name="title">
        @include('comics.includes.errors', [
            'errorType' => 'title',
        ])
    </div>

    <div>
        <label for="description">Description</label>
        <textarea class="w-textarea" name="description" id="description" cols="30" rows="10">
            
        </textarea>
        @include('comics.includes.errors', [
            'errorType' => 'description',
        ])
    </div>

    <div>
        <label for="thumb">Thumb</label>
        <input type="text" name="thumb">
        @include('comics.includes.errors', [
            'errorType' => 'thumb',
        ])
    </div>

    <div>
        <label for="price">Price</label>
        <input type="text" name="price">
        @include('comics.includes.errors', [
            'errorType' => 'price',
        ])
    </div>

    <div>
        <label for="series">Series</label>
        <input type="text" name="series">
        @include('comics.includes.errors', [
            'errorType' => 'series',
        ])
    </div>

    <div>
        <label for="sale-date">Sale Date</label>
        <input type="date" name="sale-date">
        @include('comics.includes.errors', [
            'errorType' => 'sale-date',
        ])
    </div>

    <div>
        <label for="type">Type</label>
        <input type="text" name="type">
        @include('comics.includes.errors', [
            'errorType' => 'type',
        ])
    </div>

    <input type="submit" value="send">
</form>