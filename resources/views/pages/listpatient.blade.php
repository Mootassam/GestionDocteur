<table class="table table-striped table-advance table-hover">
          <div class="form-group">
          <div class="col-md-4"><h4><i class="fa fa-angle-right"></i> liste des patients   </h4> </div>
          <div class="col-md-4">
            <form action="{{url('cherhcerM')}}" method="post">
               {{ csrf_field() }}
              <input name="nom" type="text" class="form-control">
              @if ($errors->get('nom'))
              @foreach ($errors->get('nom') as $item)
              <p style="color:red"> {{$item}} </p>

              @endforeach

              @endif

              </div>
          <div class="col-md-4">
               <input class="btn btn-success" type="submit" value="Chercher">
            </form>

            <div class="col-md-6">

              <!-- Button trigger modal -->
              <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
               Ajouter Patient
                </button>
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Ajouter Patient</h4>
                    </div>
                    <div class="modal-body">





<form action="{{url('storePatient')}}" method="post" class="form-horizontal  ">
@csrf

            <div class="form-group">
                <label class="control-label col-md-4">Nom du patient</label>
                <select name="user_id" class="form-control" id="">
                @foreach ($user as $users)
                <option value="{{$users->id}}">{{$users->name}}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label class="control-label col-md-4">Nom du patient</label>
                <input class="form-control" name="nom" size="16" type="text" value="{{old('nom')}}">
                @if ($errors->get('nom'))
                @foreach ($errors->get('nom') as $item)
                <p style="color:red"> {{$item}}</p>
                @endforeach
                @endif
            </div>

            <div class="form-group">
                <label class="control-label col-md-4">Prénom du Patient</label>
                <input class="form-control" name="prenom" size="16" type="text" value="{{old('prenom')}}">
                @if ($errors->get('prenom'))
                @foreach ($errors->get('prenom') as $item)
                <p style="color:red"> {{$item}}</p>
                @endforeach
                @endif
            </div>

            <div class="form-group">
                <label class="control-label col-md-4">Email du Patient</label>
                <input class="form-control" name="email" size="16" type="text" value="{{old('email')}}">
                @if ($errors->get('email'))
                @foreach ($errors->get('email') as $item)
                <p style="color:red"> {{$item}}</p>
                @endforeach
                @endif
            </div>


            <div class="form-group">
                <label class="control-label col-md-4">Date de Naissance</label>
                <input class="form-control" name="date" size="16" type="date" value="{{old('cin')}}">
                @if ($errors->get('cin'))
                @foreach ($errors->get('cin') as $item)
                <p style="color:red"> {{$item}}</p>
                @endforeach
                @endif
            </div>

            <div class="form-group">
                <label class="control-label col-md-4">N°CNSS</label>
                <input class="form-control"  name="cnss" size="16" type="text" value="{{old('prix')}}">
                @if ($errors->get('prix'))
                @foreach ($errors->get('prix') as $item)
                <p style="color:red"> {{$item}}</p>
                @endforeach
                @endif
            </div>

            <div class="form-group">
                <label class="control-label col-md-4">Etat du patient</label>
                @php $etat= ['Accepter','Attente','Refuser'];
                @endphp
                <select name="etat" class="form-control" id="">
                @foreach ($etat as $et)
                <option value="{{$et}}">{{$et}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="control-label col-md-4">Date de Rendez Vous</label>
               <input type="date" name="date" class="form-control" id="">
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

          </div>

          </div>

        </div>
        <br>
        <br>
   <hr>

     @include('pages.addpatient')

        </table>
