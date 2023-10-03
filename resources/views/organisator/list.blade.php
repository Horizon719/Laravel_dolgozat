@foreach ($organisators as $organisator)
    <form action="/api/organisators/{{$organisator->org_id}}" method="post">
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$organisator->name}}">
            <input type="submit" value="{{$organisator->description}}">
        </div>
    </form>
@endforeach