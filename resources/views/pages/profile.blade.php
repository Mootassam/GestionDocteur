@extends('layouts.menue')
@section('content')
<section id="main-content">
        <section class="wrapper">
                <h3><i class="fa fa-angle-right"></i> Gerrer le profile </h3>
<div class="row mt">
        <div class="col-md-12">
          <div class="content-panel">
            @include('pages.messages.msg')
            <table class="table table-striped table-advance table-hover">
              <div class="form-group">
              <div class="col-md-4"><h4><i class="fa fa-angle-right"></i> List de profile  </h4> </div> 
              <div class="col-md-4"> 
                <form action="{{url('chercher')}}" method="get">
                   {{ csrf_field() }}
                  <input name="nom" type="text" class="form-control">   
                  </div>
              <div class="col-md-4">
             
                   <input class="btn btn-success" type="submit" value="Chercher"> 
                </form>
            
                @include('pages.user.ajouter'); 



              </div>
           
            </div>
            <br>
       <hr>

              <thead>
                <tr>
                  <th><i class="fa fa-bullhorn"></i> Nom</th>
                       <th><i class="fa fa-bullhorn"></i> Prenom</th>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Email</th>
                  <th><i class="fa fa-bookmark"></i> Password</th>
                  <th><i class=" fa fa-edit"></i> date de creation</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($list as $item)
               <tr>
                  <td>
                    <a href="basic_table.html#"> {{$item->last_name}} </a>
                  </td>
                  <td>
                    <a href="basic_table.html#"> {{$item->first_name}} </a>
                  </td>
                  

                  <td class="hidden-phone"> {{$item->email}}</td>
                  <td> {{$item->password}} </td>
                  <td><span class="label label-info label-mini"> {{$item->created_at}}</span></td>
                  <td>

                    <form action="{{url('destroy/user/'.$item->id)}}" method="post">
                   {{ csrf_field() }}
                   {{method_field('DELETE')}}
                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <center> 
              @if (Route::has('profile'))
              {{$list->appends(request()->query())->links()}}
              @endif
            </center>  
          </div>
          <!-- /content-panel -->
        </div>
        <!-- /col-md-12 -->
      </div>

        </section></section>
@endsection

