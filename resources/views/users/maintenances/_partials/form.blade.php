<div class="form-group">
    <label for="model">Data da manutenção:</label>
    <input type="date" class="form-control form-control-user" id="appointment_to" name="appointment_to"
        placeholder="Data" value="{{old('appointment_to')}}">
</div>
<div class="form-group">
    <label for="observation">Obsevação:</label>
        <input type="text" class="form-control form-control-user" id="observation" name="observation" placeholder="observação"
         value="{{old('year') }}">
</div>
<div class="form-group row">
    <div class="col-sm-12 mb-3 mb-sm-0">
        <label for="brand">Veículo:</label>
        <select class="form-control " name="vehicle_id" id="vehicle_id" placeholder="Selecione">
            <option value="" selected>Selecione</option>
            @foreach($vehicle as $v)
            <option value="{{$v->id}}">{{$v->model}}</option>
            @endforeach
            </select>
    </div>
</div>

<button type="submit" class="btn btn-primary btn-user btn-block">
    Salvar
</button>
<hr>