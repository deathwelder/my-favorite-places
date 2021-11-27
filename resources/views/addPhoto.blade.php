<form action="{{ route('addPhoto') }}" method="post">
  @csrf
<p>Загрузите фото:<br>
<input type="file" name="image">
<button type="submit">Отправить</button>
</form>
