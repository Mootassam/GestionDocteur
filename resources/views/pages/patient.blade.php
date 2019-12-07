@extends('layouts.menue')
@section('content')
<section id="main-content">
    <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Gerrer le Patient </h3>
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
         @include('pages.messages.msg')

 @include('pages.listpatient')
              </div></div></div></section></section>
             

@endsection