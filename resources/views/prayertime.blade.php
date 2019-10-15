@extends('layout')

@section('title','Prayer Time')

@section('content')
  <div class="row justfy-content-center mb-5">
    <div class="col-md-12">
      <div class="card-deck">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Select Location</h5>
              <div class="card">
                <div class="card-body text-center">
                  <h6>Jakarta</h6>
                  <a href="#" class="stretched-link locationCard" id="Jakarta"></a>
                </div>
              </div>
              <div class="card">
                <div class="card-body text-center">
                  <h6>Bandung</h6>
                    <a href="#" class="stretched-link locationCard" id="Bandung"></a>
                </div>
              </div>
              <div class="card">
                <div class="card-body text-center">
                  <h6>Semarang</h6>
                    <a href="#" class="stretched-link locationCard" id="Semarang"></a>
                </div>
              </div>
              <div class="card">
                <div class="card-body text-center">
                  <h6>Surabaya</h6>
                    <a href="#" class="stretched-link locationCard" id="Surabaya"></a>
                </div>
              </div>
              <div class="card">
                <div class="card-body text-center">
                  <h6>Yogyakarta</h6>
                    <a href="#" class="stretched-link locationCard" id="Yogyakarta"></a>
                </div>
              </div>
              <div class="card">
                <div class="card-body text-center">
                  <h6>Solo</h6>
                    <a href="#" class="stretched-link locationCard" id="Solo"></a>
                </div>
              </div>
              <div class="card">
                <div class="card-body text-center">
                  <h6>Malang</h6>
                    <a href="#" class="stretched-link locationCard" id="Malang"></a>
                </div>
              </div>
          </div>
        </div>
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Prayer Time</h5>
                <div id="resultPrayerTime">
                  <div class="text-center mt-5">
                    <h5>Select a Location on the left</h5>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
