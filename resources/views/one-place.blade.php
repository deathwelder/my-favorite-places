<table width = "50%" border = "1">
  <tr><th>id</th><th>Название</th><th>Тип</th></tr>

  <tr><td>{{ $places->id }}</td><td><a href="">{{ $places->name }}</a></td><td>{{ $places->type }}</td></tr>

</table>
<br>
<a href="{{ route('addPhoto', $places->id) }}" name="image">Добавьте фото</a>
