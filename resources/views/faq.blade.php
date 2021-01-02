
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
@foreach ($faqs as $faq)
	<div class="container">
    	<div class="row">
        	<div class="col-sm-6">
            	<div class="faq-text margin40">
                    <h5><strong>Q: {{$faq->question}}</strong></h5>
                    <p class="top15">{{$faq->answer}}</p>
            	</div>
              <div class="faq-text margin40">
                    <h5><strong>Q: {{$faq->question}}</strong></h5>
                    <p class="top15">{{$faq->answer}}</p>
            	</div>
              <div class="faq-text margin40">
                    <h5><strong>Q: {{$faq->question}}</strong></h5>
                    <p class="top15">{{$faq->answer}}</p>
            	</div>
              <div class="faq-text margin40">
                    <h5><strong>Q: {{$faq->question}}</strong></h5>
                    <p class="top15">{{$faq->answer}}</p>
            	</div>
            </div>
            
            <div class="col-sm-6">
            <div class="faq-text margin40">
                    <h5><strong>Q: {{$faq->question}}</strong></h5>
                    <p class="top15">{{$faq->answer}}</p>
            	</div>
              <div class="faq-text margin40">
                    <h5><strong>Q: {{$faq->question}}</strong></h5>
                    <p class="top15">{{$faq->answer}}</p>
            	</div>
              <div class="faq-text margin40">
                    <h5><strong>Q: {{$faq->question}}</strong></h5>
                    <p class="top15">{{$faq->answer}}</p>
            	</div>
              <div class="faq-text margin40">
                    <h5><strong>Q: {{$faq->question}}</strong></h5>
                    <p class="top15">{{$faq->answer}}</p>
            	</div>
            </div>
        </div>
    </div>
  @endforeach
</section>
<!--END FAQ-->
@endsection