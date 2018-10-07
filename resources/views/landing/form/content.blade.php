
{!! Form::open(['method'=>'POST','url'=>'/landing/guestQueries','class'=>'row m-0','role'=>'search'])  !!}
      @csrf

  <div class="col-xs-12  col-md-3">

    {!! Form::Label('cities', 'Origen:') !!}
    <select  class="custom-select" name="Origen">
      @foreach($cities as $city)
        <option value="{{$city->ZIPCode}}">{{$city->city}}</option>
      @endforeach
    </select>
  </div>
  <div class="col-xs-12  col-md-3">
    {!! Form::Label('cities', 'Destino:') !!}
    <select  class="custom-select" name="Destino">
      @foreach($cities as $city)
        <option value="{{$city->ZIPCode}}" class="form-control">{{$city->city}}</option>
      @endforeach
    </select>
  </div>
  <div class="col-xs-12  col-md-2">
    <label for="date">Fecha</label>
    <input type="date" class="form-control" data-date-format="mm/dd/yyyy">
  </div>
  <div class="col-xs-12  col-md-2">
    {!! Form::Label('types', 'Tipo:') !!}
    <select  class="custom-select" name="Tipo">

    @foreach($types as $type)
      <option value="{{$type->name}}" class="form-control">{{$type->name ." ".$type->max_size}}</option>

    @endforeach
      ])}}


    </select>
  </div>
  <div class="col-xs-12 col-md-1 text-center">
      <button class="btn m-btn--pill m-btn--air btn-warning" type="button" name="search" onclick="window.location.href='./landing/guestQueries'">
        BUSCAR
      </button>


  </div>
  {{ Form::close()}}
