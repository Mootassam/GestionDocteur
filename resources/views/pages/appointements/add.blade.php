   
   
              <!-- Button trigger modal -->
              <button  class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Ajouter dossier 
                </button>
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Ajouter nouveaux Doctor</h4>
                    </div>
                    <div class="modal-body">
             <form action="{{url('appointements/store')}}" method="post" class="form-horizontal ">
                 
                        {{ csrf_field() }}
             
                            <div class="form-group">
                                <label class="control-label "> Nom du doctor</label>
                              
                               <select name="idD" class="form-control" id="">
                              @foreach ($doctor as $doctor)
                                    <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                @endforeach
                            
                                         </select>
                                </div>
                                    <div class="form-group">
                                <label class="control-label ">Nom du Patient</label>
                               <select name="pid" class="form-control" id="">
                            
                               @foreach ($patient as $patient)
                                    <option value="{{$patient->id}}">{{$patient->name}}</option>
                                @endforeach
                                         </select>
                                </div>
                                    <div class="form-group">
                                <label class="control-label ">Description du dossier</label>
                               <select name="fid" class="form-control" id="">
                            
                             @foreach ($fiche as $fiche)
                                    <option value="{{$fiche->id}}">{{$fiche->observation}}</option>
                                @endforeach
                                         </select>
                                </div>
                              
                           
                                    <div class="form-group">
                                        <label class="control-label *">Etat</label>
                                      <select name="etat" class="form-control" id="">
                            
                            <option value="accepter">Accepter</option>
                            <option value="attente">Attente</option>
                            <option value="refusee">Refusee</option>

                                         </select>
                                    
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
        



           