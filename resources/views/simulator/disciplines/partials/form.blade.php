<label for="">Название</label>
<input type="text" class="form-control" name="title" placeholder="Название дисциплины" value="{{$discipline->title or ""}}" required>
<label for="">Статус</label>
<select class="form-control" name="active" id="">
    @if (isset($discipline->id))
        <option value="0" @if ($discipline->active == 0) selected="" @endif> Не активна </option>
        <option value="1" @if ($discipline->active == 1) selected="" @endif> Активна </option>
    @else
        <option value="0">Не активна </option>
        <option value="1"> Активна </option>
    @endif
</select>
<hr>
<input class="btn btn-primary" type="submit" value="Сохранить">