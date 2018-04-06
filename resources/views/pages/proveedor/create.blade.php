@extends ('layouts.admin')
@section ('contenido')
      <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <h3>Nuevo Proveedor</h3>
                  @if (count($errors)>0)
                  <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                              <li>{{$error}}</li>
                        @endforeach
                        </ul>
                  </div>
                  @endif
            </div>
      </div>





                  {!!Form::open(array('url'=>'compras/proveedor','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}

<div class="row">

       <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">             
                  <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre...">
                  </div>
       </div>

    

<!--
       <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                                    <label for="tipo_persona">tipo_persona</label>
                                    <input type="text" name="tipo_persona" required value="{{old('tipo_persona')}}" class="form-control" placeholder="tipo_persona..">
                         </div>
        </div>
-->


                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">       
                                     <div class="form-group">
                                           <label for="tipo_documento">Tipo documento</label>
                                           <input type="text" name="tipo_documento" class="form-control" required value="{{old('tipo_documento')}}"  placeholder="tipo_documento...">
                                     </div>
                  </div>

 <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">   
            <div class="form-group">
                  <label for="num_documento">Numero documento</label>
                  <input type="text" name="num_documento" class="form-control" required value="{{old('num_documento')}}"  placeholder="num_documento...">
            </div>
 </div>

 <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">   
            <div class="form-group">
                  <label for="direccion">direccion</label>
                  <input type="text" name="direccion" class="form-control" required value="{{old('direccion')}}"  placeholder="direccion...">
            </div>
 </div>


 <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">   
            <div class="form-group">
                  <label for="num_documento">Telefono</label>
                  <input type="text" name="telefono" class="form-control" required value="{{old('telefono')}}"  placeholder="telefono...">
            </div>
 </div>

 <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">   
            <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" class="form-control" required value="{{old('email')}}"  placeholder="email...">
            </div>
 </div>

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">           
            <div class="form-group">
                  <button class="btn btn-primary" type="submit">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
       </div>
 </div>
            
            

                  {!!Form::close()!!}           
      
@endsection