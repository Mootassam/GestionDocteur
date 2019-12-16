

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
             <form action="{{url('doctor/store')}}" method="post" class="form-horizontal ">
@csrf
            <div class="form-group">
            <label class="control-label ">Nom du doctor</label>
                <select name="user_id" class="form-control" id="">
                @foreach ($user as $users)
                                <option value="{{$users->id}}"> {{$users->name}}</option>
                @endforeach
                </select>
            </div>

                            <div class="form-group">
                                <label class="control-label ">Specialité du doctor</label>
                               <select name="spec" class="form-control" id="">

                               @foreach ($names as $item)


                               <option value="{{$item->id}}"> {{$item->nom}}</option>
                                         @endforeach
                                         </select>
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




