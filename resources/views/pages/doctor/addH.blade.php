   
   
              <!-- Button trigger modal -->
              <button  class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
             Ajouter Horraire de travaille
                </button>
              <!-- Modal -->
              <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">    Ajouter Horraire de travaille</h4>
                    </div>
                    <div class="modal-body">
             <form action="{{url('sotre/travaille')}}" method="post" class="form-horizontal ">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <label class="control-label">Nom du doctor</label>
                           <select name="nom" class="form-control">
                               @foreach ($list as $item)
                       
                            <option value="{{$item->id}}"> {{$item->name}} </option>

                               @endforeach
                           </select>
                    </div>
               
                    
                   <div class="form-group">
                   <label class="control-label ">date de debut </label>
                 
                    <div class="input-group bootstrap-timepicker">
                      <input type="text" name="hd" class="form-control timepicker-24">
                      <span class="input-group-btn">
                        <button class="btn btn-theme04" type="button"><i class="fa fa-clock-o"></i></button>
                        </span>
                    </div>
                  
                </div>

                  <div class="form-group">
                 <label class="control-label ">date de debut </label>
                  
                    <div class="input-group bootstrap-timepicker">
                      <input type="text" name="hf" class="form-control timepicker-24">
                      <span class="input-group-btn">
                        <button class="btn btn-theme04" type="button"><i class="fa fa-clock-o"></i></button>
                        </span>
                    </div>
                  
                </div>

                     <div class="form-group">
                         <label class="control-label ">Nombre de jour </label>
                      
                        <input class="form-control" name="jours" size="16" type="text" value="{{old('prenom')}}">
                        @if ($errors->get('prenom'))
                        @foreach ($errors->get('prenom') as $item)
                     <p style="color:red"> {{$item}}</p>         
                        @endforeach     
                    @endif
                       
                    </div>

                        </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="cancel" class="btn btn-primary">Save changes</button>
                    </div>
                        </form>
  
                  </div>
                </div>
              </div>
        



           