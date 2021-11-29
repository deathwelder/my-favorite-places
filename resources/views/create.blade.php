@if($errors->any())
<div>
  <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form action="{{ route('submit') }}" method="post" enctype="multipart/form-data">
  @csrf
<p>Введите название места:<br>
<input type="text" name="firstname" value="{{ old('firstname') }}" /></p>
<p>Выберите тип места: <br>
<select name="user_type">
    <option value="Город">Город</option>
    <option value="Мегаполис">Мегаполис</option>
    <option value="Деревня">Деревня</option>
    <option value="Село">Село</option>
    <option value="Посёлок городсткого типа">Посёлок городсткого типа</option>
</select></p>


</form>

<a href="{{ route('places') }}">Назад</a>
