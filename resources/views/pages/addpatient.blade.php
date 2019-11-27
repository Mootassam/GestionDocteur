     <thead>
            <tr>
              <th><i class="fa fa-bullhorn"></i> Nom</th>
              <th><i class="fa fa-bullhorn"></i> Prenom</th>
              <th><i class="fa fa-bullhorn"></i> Email</th>
              <th><i class="fa fa-bullhorn"></i> date de Naissance</th>
              <th><i class="fa fa-bullhorn"></i> Num CNSS</th>
              <th></th>
             
            </tr>
            @foreach ($list as $item)
                <tr> 
                    <td>{{$item->name}}</td>
                    <td>{{$item->lastName}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->dateNaiss}}</td>
                    <td>{{$item->numCNSS}}</td>
                      <td>

                        <form action="{{url('destroy/'.$item->id)}}" method="post">
                          {{ csrf_field() }}
                          {{method_field('DELETE')}}
                <button class="btn btn-success btn-xs" ><i  class="fa fa-check"></i></button>
                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                </form>
              </td>

                </tr>            
            @endforeach
            
          
            
              
            </tr>
          </thead>