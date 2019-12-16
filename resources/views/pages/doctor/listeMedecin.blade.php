@extends('layouts.menue')

@section('content')

<section id="main-content">
    <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Gerrer le doctor </h3>
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <div class="form-group">
        @include('pages.messages.msg')
          <div class="col-md-2"><h4><i class="fa fa-angle-right"></i> List de profile  </h4> </div>
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
          <div class="col-md-6">
               <input class="btn btn-success" type="submit" value="Chercher">
            </form>

            @include('pages.doctor.addDoctor')
            @include('pages.doctor.addH')
          </div>

        </div>
        <br>
        <br>
   <hr>

          <thead>
            <tr>
              <th><i class="fa fa-bullhorn"></i> Nom</th>
              <th><i class="fa fa-bullhorn"></i> Prenom</th>
              <th><i class="fa fa-bullhorn"></i> Email</th>
              <th><i class="fa fa-bullhorn"></i> tel</th>
              <th><i class="fa fa-bullhorn"></i> N°cin</th>
              <th><i class="fa fa-bullhorn"></i> Prix</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($list as $item)
            <tr>
              <td>
                <a href="basic_table.html#"> {{$item->name}} </a>
              </td>
              <td class="hidden-phone"> {{$item->lastname}}</td>
              <td> {{$item->email}} </td>
              <td> {{$item->tel}} </td>
              <td> {{$item->imgCin}} </td>

              <td> {{$item->prixVisite}} </td>


              <td>

                <button class="btn btn-success btn-xs" ><i  class="fa fa-check"></i></button>
                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"> </i></button>
       <button   data-toggle="modal" data-target="#delete" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
  @include('pages.doctor.delete')

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
