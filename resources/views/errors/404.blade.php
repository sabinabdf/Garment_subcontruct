@extends('front.layout')
@section('content')
<div class="wrapper">
  <section>
    <div class="container">
      <div class="error-page padd-top-30 padd-bot-30">
        <h1 class="mrg-top-15 mrg-bot-0 cl-danger font-150 font-bold">404</h1>
        <h2 class="mrg-top-10 mrg-bot-5 funky-font font-40">Page Not Found !</h2>
        <p>Sorry, this page does not exist</p>
		<span>The link you clicked might be corrupted, or the page may have been removed.</span>
        <a href="{{route('index')}}" class="btn theme-btn-trans mrg-top-20">Go To Home Page</a> 
	  </div>
    </div>
  </section>
</div>
@endsection 