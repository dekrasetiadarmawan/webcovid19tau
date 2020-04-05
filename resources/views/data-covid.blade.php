@extends('layouts.main')

@section('title', 'Data Covid-19')

@section('container')
<section class="site-section">
  <div class="container">
    <h1><p class ="text-center text-dark font-weight-bold">Data Covid-19 di Indonesia</p></h1>
    <div class="row justify-content-md-center border">
      <div class="col bg-success pt-3 border" >
          <h3><p class ="text-center text-white">Kasus</p>
        </div>
        <div class="col bg-danger pt-3 border" >
          <h3><p class ="text-center text-white">Kematian</p>
        </div>
        <div class="col bg-warning pt-3 border" >
          <h3><p class ="text-center text-white">Sembuh</p>
        </div>
      </div>
      <div class="row justify-content-md-center border">
        <div class="col pt-3 border">
          <h3><p class="text-dark text-center" >123456</p>
        </div>
        <div class="col pt-3 border">
          <h3><p class="text-dark text-center" >123456</p>
        </div>
        <div class="col pt-3 border">
          <h3><p class="text-dark text-center" >123456</p>
        </div>
      </div>
    </div>
</section>

@endsection