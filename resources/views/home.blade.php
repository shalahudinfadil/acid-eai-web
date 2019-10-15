@extends('layout')
@section('title','Home')

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Qur'an</h5>
          <a href="/quran" class="stretched-link"></a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Prayer Time</h5>
          <a href="/prayertime" class="stretched-link"></a>
        </div>
      </div>
    </div>
    <div class="col-md-6 mt-5">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Islamic Calendar</h5>
          <a href="/islamiccalendar" class="stretched-link"></a>
        </div>
      </div>
    </div>
    <div class="col-md-6 mt-5">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">About Us</h5>
          <a href="/aboutus" class="stretched-link"></a>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('script')
  <script type="text/javascript">

  </script>

@endpush
