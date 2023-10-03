<form action="/api/organisators/{{$organisator->org_id}}" method="post">
    {{csrf_field()}}
    {{method_field('put')}}
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="description" placeholder="Description">
    <input type="submit" value="Ok">
</form>