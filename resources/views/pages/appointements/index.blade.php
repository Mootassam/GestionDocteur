@extends('layouts.menue')

@section('content')

<section id="main-content">
    <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Gerrer les Rendez-vous </h3>
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <div class="form-group">
          <div class="col-md-2"><h4><i class="fa fa-angle-right"></i>List Rendez-vous</h4> </div> 
          <div class="col-md-4"> 
<input type="text" class="form-control">

          </div>
          @include('pages.appointements.add')
        </div>
        <br>
        <br>
       @include('pages.messages.msg')
        <hr>
          <thead>
            <tr>
              <th><i class="fa fa-bullhorn"></i> Nom du doctor </th>
              <th><i class="fa fa-bullhorn"></i> Nom du patient </th>
               <th><i class="fa fa-bullhorn"></i> Description </th>
              <th><i class="fa fa-bullhorn"></i> Etat</th>
               <th><i class="fa fa-bullhorn"></i> Created_at </th>
            
              <th></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($list  as $item)
            <tr>
              <td>
                <a href="basic_table.html#"> {{$item->idD}} </a>
              </td>
              <td class="hidden-phone"> {{$item->pid}}</td>
               <td class="hidden-phone"> {{$item->fid}}</td>

              <td class="hidden-phone">  <span class="label label-info label-mini"> {{$item->etat}}</span></td>
                 <td class="hidden-phone"> {{$item->created_at}}</td>         
              <td>
                <form action="{{url('appointements/destroy/'.$item->id)}}" method="post">
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