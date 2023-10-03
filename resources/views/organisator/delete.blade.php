@foreach ($organisators as $organisator)
    <form action="/api/organisators/{{$organisator->org_id}}" method="post">
        @csrf
        @method('delete')
        <div class="form-group">
            <input type="submit" value="{{$organisator->name}}">
        </div>
    </form>

@endforeach