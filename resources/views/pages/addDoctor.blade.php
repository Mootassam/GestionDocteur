   
   
              <!-- Button trigger modal -->
              <button  class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Ajouter Doctor
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
             <form action="{{url('store')}}" method="post" class="form-horizontal ">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <label class="control-label">Nom du doctor</label>
                             <input class="form-control" name="nom" size="16" type="text" value="{{old('nom')}}">
                             @if ($errors->get('nom'))
                                 @foreach ($errors->get('nom') as $item)
                              <p style="color:red"> {{$item}}</p>         
                                 @endforeach     
                             @endif
                    </div>
                    <div class="form-group">
                         <label class="control-label ">Prénom du doctor</label>
                      
                        <input class="form-control" name="prenom" size="16" type="text" value="{{old('prenom')}}">
                        @if ($errors->get('prenom'))
                        @foreach ($errors->get('prenom') as $item)
                     <p style="color:red"> {{$item}}</p>         
                        @endforeach     
                    @endif
                       
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label ">Email du doctor</label>
                            <input class="form-control" name="email" size="16" type="text" value="{{old('email')}}">
                            @if ($errors->get('email'))
                            @foreach ($errors->get('email') as $item)
                         <p style="color:red"> {{$item}}</p>         
                            @endforeach     
                        @endif
                    
                        </div>
                        <div class="form-group">
                            <label class="control-label ">Password</label>
                            
                                <input class="form-control" name="pass" size="16" type="text" value="{{old('pass')}}">
                                @if ($errors->get('pass'))
                                @foreach ($errors->get('pass') as $item)
                             <p style="color:red"> {{$item}}</p>         
                                @endforeach     
                            @endif
                        
                            
                            </div>
                        <div class="form-group">
                            <label class="control-label ">Avatar du doctor</label>
                        
                                <input class="form-control" name="avatar" size="16" type="text" value="{{old('avatar')}}">
                                @if ($errors->get('avatar'))
                                @foreach ($errors->get('avatar') as $item)
                             <p style="color:red"> {{$item}}</p>         
                                @endforeach     
                            @endif
                        
                            </div>
                            <div class="form-group">
                                <label class="control-label ">Specialité du doctor</label>
                               <select name="" class="form-control" id=""></select>
                                @if(Route::has('addDoctor'))
                               @foreach ($names as $item)
                                   
                    
                               <option value="{{$item->id}}"> {{$item->nom}}</option>
                                         @endforeach
                                </div>
                                @endif
                                <div class="form-group">
                                    <label class="control-label ">tel</label>
                                  
                                        <input class="form-control" name="tel" size="16" type="tel" value="{{old('tel')}}">
                                        @if ($errors->get('tel'))
                                        @foreach ($errors->get('tel') as $item)
                                     <p style="color:red"> {{$item}}</p>         
                                        @endforeach     
                                    @endif
                                
                                
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label *">N°cin du doctor</label>
                                     
                                            <input class="form-control" name="cin" size="16" type="text" value="{{old('cin')}}">
                                            @if ($errors->get('cin'))
                                            @foreach ($errors->get('cin') as $item)
                                         <p style="color:red"> {{$item}}</p>         
                                            @endforeach     
                                        @endif
                                    
                                        </div>
                                        <div class="form-group last">
                                            <label class="control-label ">Image Upload</label>
                                           
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img " src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                <div>
                                                    <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input name="pic" type="file" class="default" />
                                                    </span>
                                                    <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                                </div>
                                                </div>
                                                <span class="label label-info">NOTE!</span>
                                                <span>
                                                Attached image thumbnail is
                                                supported in Latest Firefox, Chrome, Opera,
                                                Safari and Internet Explorer 10 only
                                                </span>
                                           
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label ">prix Visite</label>
                                                <div class=" ">
                                                    <input class="form-control"  name="prix" size="16" type="text" value="{{old('prix')}}">
                                                    @if ($errors->get('prix'))
                                                    @foreach ($errors->get('prix') as $item)
                                                 <p style="color:red"> {{$item}}</p>         
                                                    @endforeach     
                                                @endif
                                            
                                                </div>
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
        



           