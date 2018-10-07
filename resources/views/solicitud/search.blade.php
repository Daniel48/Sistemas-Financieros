{!! Form::open(array('url'=>'solicitud','method'=>'GET','','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
    <div class="input-group">
        <input class="form-control" name="searchText" placeholder="Buscar..." type="text" value="">
        <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                    Buscar
                </button>
            </span>
        </input>
    </div>
</div>
{{Form::close()}}
