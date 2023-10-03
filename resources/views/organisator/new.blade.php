<form action="/api/organisators" method="post">
    {{csrf_field()}}
    {{method_field('post')}}
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="description" placeholder="Description">
    <input type="submit" value="Ok">
</form>