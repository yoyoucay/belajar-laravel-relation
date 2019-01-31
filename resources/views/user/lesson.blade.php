<h3>Daftar User</h3>

@foreach($lesson->users as $user)
<li>{{ $user->name }} - {{ $user->pivot->created_at }} - {{ $user->pivot->data }}</li>
@endforeach

<h3>Daftar Like</h3>

<p>
  {{ $lesson->likes->count() }}
</p>
