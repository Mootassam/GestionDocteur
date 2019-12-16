 <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Editer Doctor</h4>
            </div>
            <div class="modal-body">

            <form action="" method="post" class="form-horizontal ">
            {{ csrf_field() }}
            @method('put')
            <div class="form-group">
            {{ csrf_field() }}
            <label class="control-label">Nom du User</label>
            <input class="form-control" name="name" size="16" type="text" >

            </div>

            <div class="form-group">
            <label class="control-label ">Email du User</label>
            <input class="form-control" name="email" size="16" type="text" >
            @if ($errors->get('email'))
            @foreach ($errors->get('email') as $item)
            <p style="color:red"> {{$item}}</p>
            @endforeach
            @endif

            </div>
            <div class="form-group">
            <label class="control-label ">Password</label>

            <input class="form-control" name="password" size="16" type="text" >
            @if ($errors->get('pass'))
            @foreach ($errors->get('pass') as $item)
            <p style="color:red"> {{$item}}</p>
            @endforeach
            @endif
            </div>
            @php
            $role= ['admin','doctor','user'];
            @endphp
            <div class="form-group">
            <label for="Role">Role</label>
            <select name="user_type"  class="form-control"id="">
            @foreach ($role as $roles)
            <option value="{{$roles}}"> {{$roles}}</option>
            @endforeach
            </select>
            </div>
            <div class="form-group"><label for="Pic">Upload photo</label>
            <input type="file" name="pic" class="form-control" id="">
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
