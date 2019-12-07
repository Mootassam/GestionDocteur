@extends('layouts.menue')

@section('content')

<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Gerrer les specialités </h3>
   
      <!-- /row -->
      <!-- DATE TIME PICKERS -->
      <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            <form class="form-horizontal  style-form" action="{{url('GDOCTOR/save')}}" method="post">
                {{ csrf_field() }}

              <div class="form-group">
                <label class="control-label col-md-3">Ajouter la nouvelle specialités</label>
                <div class="col-md-4">
                  <input size="16" name="nom" type="text" value="{{old('nom')}}"   class="form-control">
                  @if ($errors->get('nom'))
                  @foreach ($errors->get('nom') as $item)
               <p style="color:red">  {{ $item}} </p>
                 

                      
                  @endforeach
                  @endif
                </div>
                <button class="btn btn-success">Ajouter </button>
              </div>
            </form>
       
       @include('pages.messages.msg')
       @if (count($list))
           
             
                        <table class="table table-striped table-advance table-hover">
                          <h4><i class="fa fa-angle-right"></i> Liste des specialités</h4>
                          <hr>
                          <thead>
                            <tr>
                              <th><i class="fa fa-bullhorn"></i> Nom du specialités </th>
                    
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($list as $item)
                            
                            <tr>
                            
                              <td class="hidden-phone"> {{$item->nom}} </td>
                   
                              <td>
                           
                                  

                              
                            <form action="{{url('GDOCTOR/'.$item->id)}} " method="post">
                            
                                    {{csrf_field()}}
                             {{method_field('DELETE')}}
                             
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>

                            </form>
                              </td>
                            </tr>
                                  
                            @endforeach
                            
                          </tbody>
                        </table>
                        @else
                        <h3>slvp Ajouter une nouvelle specialités </h3>
                    @endif  
                    <!-- /col-md-12 -->
                  </div>

              </div>
        
          </div>
          <!-- /form-panel -->
        </div>
  

  </section>

    
@endsection