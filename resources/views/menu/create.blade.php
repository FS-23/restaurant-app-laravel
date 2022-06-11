<form action="/menus/store" method="post">

    <input type="text" name="title">
    <textarea name="ingredient"></textarea>
    <input type="number" name="price">
    <button>Save</button>

    @csrf
</form>