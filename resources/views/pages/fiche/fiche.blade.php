@extends('layouts.menue')

@section('content')

<section id="main-content">
    <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Gerrer la Fiche Rendez-vous </h3>
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <div class="form-group">
          <div class="col-md-2"><h4><i class="fa fa-angle-right"></i> List des fiches   </h4> </div> 
          <div class="col-md-4"> 
       @include('pages.fiche.add')
          </div>
        </div>
        <br>
        <br>
       @include('pages.messages.msg')
        <hr>
          <thead>
            <tr>
              <th><i class="fa fa-bullhorn"></i> ordonnace</th>
              <th><i class="fa fa-bullhorn"></i> observation</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($list as $item)
            <tr>
              <td>
                <a href="basic_table.html#"> {{$item->observation}} </a>
              </td>
              <td class="hidden-phone"> {{$item->ordonnace}}</td>
 
             
         
              <td>
                <form action="{{url('fiche/destroy/'.$item->id)}}" method="post">
                  {{ csrf_field() }}
                  {{method_field('DELETE')}}
                <button class="btn btn-success btn-xs" ><i  class="fa fa-check"></i></button>
                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /content-panel -->
    </div>
    <!-- /col-md-12 -->
  </div>

    </section></section>
@endsection