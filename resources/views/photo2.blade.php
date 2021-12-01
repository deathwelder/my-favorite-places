<form action="{{ route('photo') }}" method="post" enctype="multipart/form-data">
  @csrf
<p>Загрузите фото:<br>
<input type="file" name="image">
<button type="submit">Отправить</button>
</form>

@isset($file)
    <img src="{{ asset('/storage/' . $file) }}">
@endisset
