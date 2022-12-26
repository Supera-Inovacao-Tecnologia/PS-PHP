<div class="form-group">
    <label for="model">Modelo:</label>
    <input type="text" class="form-control form-control-user" id="model" name="model"
        placeholder="Modelo" value="{{$vehicle->model?? old('brand')}}">
</div>
<div class="form-group row">
    <div class="col-sm-12 mb-3 mb-sm-0">
        <label for="brand">Marca:</label>
        <input type="text" class="form-control form-control-user" id="brand" name="brand"
            placeholder="Marca" value="{{$vehicle->brand ?? old('brand')}}">
    </div>
</div>
<div class="form-group">
    <label for="version">Versão:</label>
    <input type="text" class="form-control form-control-user" id="version" name="version"
        placeholder="Versão" value="{{$vehicle->version ?? old('version')}}">
</div>
<div class="form-group row">
    <div class="col-sm-12 mb-3 ">
        <label for="year">Ano:</label>
        <input type="number" class="form-control form-control-user" name="year" placeholder="Ano"
         value="{{$vehicle->year ?? old('year') }}">
    </div>
</div>
<button type="submit" class="btn btn-primary btn-user btn-block">
    Salvar
</button>
<hr>