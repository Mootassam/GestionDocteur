@extends('layouts.menue')
@section('content')

<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Advanced Form Components</h3>
      <div class="row mt">
        <!--  DATE PICKERS -->
        <div class="col-lg-12">
          <div class="form-panel">
                <form class="form-horizontal style-form" method="post"   action="{{url('addtravaille')}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                            <label class="control-label col-md-3">Nom du doctor</label>
                            <div class="col-md-4">
                            <div class="input-group bootstrap-timepicker">
                     <select name="nom" class="form-control" id="">
                       @foreach ($list as $item)
                           
                     
                       <option value="{{$item->id}}"> {{$item->name}}</option>
                       @endforeach
                     </select>
                            </div>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Heure Début</label>
                        <div class="col-md-4">
                          <div class="input-group bootstrap-timepicker">
                            <input type="text" name="hd" class="form-control timepicker-24">
                            <span class="input-group-btn">
                              <button class="btn btn-theme04" type="button"><i class="fa fa-clock-o"></i></button>
                              </span>
                          </div>
                        </div>
                      </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Heure fin</label>
                          <div class="col-md-4">
                            <div class="input-group bootstrap-timepicker">
                              <input type="text" name="hf" class="form-control timepicker-24">
                              <span class="input-group-btn">
                                <button class="btn btn-theme04" type="button"><i class="fa fa-clock-o"></i></button>
                                </span>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                                <label class="control-label col-md-3">Jours</label>
                                <div class="col-md-4">
                                <div class="input-group bootstrap-timepicker">
                          <input type="text" name="jour" class="form-control" name="" id="" placeholder="">
                                </div>
                                </div>
                        </div>
                        <br>
                        <div class="form-group">
                     Visual Studio Code       <div class="col-md-3 col-xs-11">
                                <button class="btn btn-danger">cancel</button>

                            </div>
                            <div class="col-md-3 col-xs-11">
                                <button class="btn btn-success">Ajouter</button>

                            </div>
                        </div>  
                      </form>

          </div></div>
      </div></section></section>






            
    
@endsection