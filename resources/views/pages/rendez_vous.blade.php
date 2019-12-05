@extends('layouts.menue')
@section('content')
    

<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Gerrer la date de rendez vous </h3>
      <div class="row mt">
        <!--  DATE PICKERS -->
        <div class="col-lg-12">
          <div class="form-panel">
                <form class="form-horizontal style-form" method="post"   action="{{url('storeRendue_vous')}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                            <label class="control-label col-md-3">Observation</label>
                            <div class="col-md-4">
                            <div class="input-group bootstrap-timepicker">
                <textarea name="obser" id="" cols="30" class="form-control" rows="3">
                        please taper un text 
                    </textarea>
                            </div>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Ordonnace</label>
                        <div class="col-md-4">
                        <div class="input-group bootstrap-timepicker">
                <textarea name="ord" id="" cols="30" class="form-control" rows="3">
                    please taper un text 
                </textarea>
                        </div>
                        </div>
                </div>
            
                        <br>
                        <div class="form-group">
                      <div class="col-md-3 col-xs-11">
                                <button class="btn btn-danger">cancel</button>

                            </div>
                            <div class="col-md-3 col-xs-11">
                                <button class="btn btn-success">Ajouter</button>

                            </div>
                        </div>  
                      </form>

          </div></div>
      </div></section></section>

      <h2></h2>



@endsection