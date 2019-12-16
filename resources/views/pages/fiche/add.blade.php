

              <!-- Button trigger modal -->
              <button  class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Ajouter
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
             <form action="{{url('fiche/store')}}" method="post" class="form-horizontal ">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <label class="control-label">Observation</label>
<textarea name="obser" class="form-control" id="" cols="10" rows="5"></textarea>                             @if ($errors->get('nom'))
                                 @foreach ($errors->get('nom') as $item)
                              <p style="color:red"> {{$item}}</p>
                                 @endforeach
                             @endif
                    </div>
                    <div class="form-group">

             <label class="control-label ">Ordonnance</label>
            <textarea name="ord" class="form-control" id="" cols="10" rows="5"></textarea>
                        @if ($errors->get('prenom'))
                        @foreach ($errors->get('prenom') as $item)
                     <p style="color:red"> {{$item}}</p>
                        @endforeach
                    @endif

                    </div>





                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-default"   data-dismiss="modal">Close</button>
                      <button type="cancel" class="btn btn-primary">Save changes</button>
                    </div>
                        </form>

                  </div>
                </div>
              </div>


