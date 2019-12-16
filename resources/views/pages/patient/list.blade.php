@extends('layouts.menue')
@section('content')
<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">

@foreach ($doctor as $item)


          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4>1922</h4>
                  <h6>FOLLOWERS</h6>
                  <h4>290</h4>
                  <h6>FOLLOWING</h6>
                  <h4>$ 13,980</h4>
                  <h6>MONTHLY EARNINGS</h6>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3>
{{$item->name}}
                </h3>
                <h6>{{Auth::user()->email}}</h6>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
                <br>
                <form action="{{url('patient/update/'.$item->id)}}" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="id" value="{{$item->id}}">
                <p><button type="submit"  class="btn btn-theme"><i class="fa fa-envelope"></i> Envoyer une demande de rendez vous </button></p>
                </form>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="img/ui-sam.jpg" class="img-circle"></p>
                  <p>
                    <button class="btn btn-theme03"><i class="fa fa-check"></i> Trouver sur la mape </button>
                    <button class="btn btn-theme02">Add</button>
                  </p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>

          @endforeach
          <!-- /col-lg-12 -->
        </div></section></section>
@endsection
