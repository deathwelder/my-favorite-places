<table width = "50%" border = "1">
  <tr><th>id</th><th>Название</th><th>Тип</th></tr>
  @foreach($places as $place)
  <tr><td>{{ $place->id }}</td><td><a href="{{ route('info', $place->id) }}">{{ $place->name }}</a></td><td>{{ $place->type }}</td></tr>
  @endforeach
</table>
<br>
<a href="{{ route('create') }}">Добавить место</a>
