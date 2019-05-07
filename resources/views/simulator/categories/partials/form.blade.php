<label for="">Название</label>
<input type="text" class="form-control" name="title" placeholder="Название тренажера" value="{{$category->title or ""}}" required>
{{--<label for="">Дисциплина</label>--}}
{{--<input type="text" class="form-control" name="simulator_discipline_id" placeholder="Дисциплины" value="{{$category->simulator_discipline_id or ""}}" required>--}}
<label for="">Класс</label>
<input type="text" class="form-control" name="class" placeholder="Класс" value="{{$category->class or ""}}" required>

<label for="">Статус</label>
<select class="form-control" name="active" id="">
    @if (isset($category->id))
        <option value="0" @if ($category->active == 0) selected="" @endif> Не активна </option>
        <option value="1" @if ($category->active == 1) selected="" @endif> Активна </option>
    @else
        <option value="0">Не активна </option>
        <option value="1"> Активна </option>
    @endif
</select>
<hr>
<input class="btn btn-primary" type="submit" value="Сохранить">