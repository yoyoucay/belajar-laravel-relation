<h1> Hallo {{ $user->name }} || no. Passport : {{ $user->passport->no_pass }}</h1>

<h3>Daftar Forum</h3>



@foreach($user->forums as $forum)
<li>{{ $forum->title }}
  Tag :
  @foreach($forum->tags as $tag)
  {{ $tag->name }}
  @endforeach
</li>
@endforeach


<h3>Daftar Kelas</h3>

@foreach($user->lessons as $lesson)
<li>{{ $lesson->title }}</li>
@endforeach
