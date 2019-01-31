<h1> Hallo {{ $user->name }} || no. Passport : {{ $user->passport->no_pass }}</h1>

<h3>Daftar Forum</h3>

@foreach($user->forums as $forum)
<li>{{ $forum->title }}</li>  
@endforeach
