<h3>Daftar Tag</h3>

@foreach($forum->tags as $tag)
<li>{{ $tag->name }}</li>
@endforeach
