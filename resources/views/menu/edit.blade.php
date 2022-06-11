<form action="/menus/edit/{{$id }}" method="post">

    <input type="text" name="title" value="{{  $title }}">
    <textarea name="ingredient">{{ $ingredient }}</textarea>
    <input type="number" value="{{ $price }}" name="price">
    <button>Save</button>

    @csrf
</form>