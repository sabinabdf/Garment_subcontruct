@extends('front.layout')

@section('content')

<div class="page-title">
    <div class="container">
      <div class="page-caption">
        <h2>FAQ</h2>
        <p><a href="{{route('index')}}" title="Home">Home</a> <i class="ti-angle-double-right"></i>FAQ</p>

      </div>
    </div>
  </div>


  <section class="padd-top-80 padd-bot-80">
    <div class="container"> 
  <!-- parragraph start  -->
  <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h2>F A Q</h2>  
            <p>Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>	
          </div>
        </div>
      </div>

      <!-- arif start  -->
      <div class="cont">
      <h1 class="ha1">Accordion</h1>

      <div class="accordions-wrapper">
        <div class="accordion">
          <div class="accordion-header">
            <h4>Accordion #1</h4>
            <i class="la la-angle-up accordion-icon"></i>
          </div>

          <div class="accordion-body">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
              eaque sint distinctio, cupiditate placeat iusto perferendis magnam
              possimus sapiente! Delectus aspernatur numquam laborum impedit
              corporis.
            </p>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-header">
            <h4>Accordion #2</h4>
            <i class="la la-angle-up accordion-icon"></i>
          </div>

          <div class="accordion-body">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
              eaque sint distinctio, cupiditate placeat iusto perferendis magnam
              possimus sapiente! Delectus aspernatur numquam laborum impedit
              corporis.
            </p>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-header">
            <h4>Accordion #3</h4>
            <i class="la la-angle-up accordion-icon"></i>
          </div>

          <div class="accordion-body">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
              eaque sint distinctio, cupiditate placeat iusto perferendis magnam
              possimus sapiente! Delectus aspernatur numquam laborum impedit
              corporis.
            </p>
          </div>
        </div>
      </div>
      <!-- arif end  -->
</div>
</section>

<script>

const accordionHeaders = document.querySelectorAll(".accordion-header");

ActivatingFirstAccordion();

function ActivatingFirstAccordion() {
  accordionHeaders[0].parentElement.classList.add("active");
  accordionHeaders[0].nextElementSibling.style.maxHeight =
  accordionHeaders[0].nextElementSibling.scrollHeight + "px";
}

function toggleActiveAccordion(e, header) {
  const activeAccordion = document.querySelector(".accordion.active");
  const clickedAccordion = header.parentElement;
  const accordionBody = header.nextElementSibling;

  if (activeAccordion && activeAccordion != clickedAccordion) {
    activeAccordion.querySelector(".accordion-body").style.maxHeight = 0;
    activeAccordion.classList.remove("active");
  }

  clickedAccordion.classList.toggle("active");

  if (clickedAccordion.classList.contains("active")) {
    accordionBody.style.maxHeight = accordionBody.scrollHeight + "px";
  } else {
    accordionBody.style.maxHeight = 0;
  }
}

accordionHeaders.forEach(function (header) {
  header.addEventListener("click", function (event) {
    toggleActiveAccordion(event, header);
  });
});

function resizeActiveAccordionBody() {
  const activeAccordionBody = document.querySelector(
    ".accordion.active .accordion-body"
  );
  if (activeAccordionBody)
    activeAccordionBody.style.maxHeight =
      activeAccordionBody.scrollHeight + "px";
}

window.addEventListener("resize", function () {
  resizeActiveAccordionBody();
});

</script>

@endsection