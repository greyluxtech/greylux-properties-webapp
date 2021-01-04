<link rel="stylesheet" type="text/css" href="{{ url('/css/faq.css') }}" />
@extends('layouts.mainlayout')
@section('content')
<!--BANNER-->
<section class="page-banner page-banner-bg padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="p-white text-uppercase">Frequently Asked Questions</h1>
        <p class="p-white">Below are some frequently asked questions, you can learn a thing or two about us.</p>
      </div>
    </div>
  </div>
</section>
<!--END BANNER-->

<!--FAQ-->
<section id="faqs" class="padding_half bottom40">
  <div class="grid-container">
  @foreach ($faqs as $faq)
    <div class="grid-item margin">
        <h4><strong>Q: {{$faq->question}}</strong></h4>
        <p class="top15">{{$faq->answer}}</p>
    </div>
    @endforeach
  </div>
</section>
<!--END FAQ-->
@endsection