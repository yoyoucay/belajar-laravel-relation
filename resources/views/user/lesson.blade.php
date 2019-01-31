<h3>Daftar User</h3>

@foreach($lesson->users as $user)
<li>{{ $user->name }}</li>
@endforeach
