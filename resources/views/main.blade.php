@extends('layouts.header')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">@lang('content.heroText')</h2>
          <p data-aos="fade-up" data-aos-delay="100">@lang('content.heroParagraph')</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">@lang('content.bookButton')</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <!-- ======= Book A Table Section ======= -->
  <section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>@lang('content.bookButton')</h2>
        <p>@lang('content.orderTitle')</p>
      </div>

      <div class="row g-0">

        <div  class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

        <div class="col-lg-8 d-flex align-items-center reservation-form-bg">

            {{------------------ Form start ----------------}}
        <form action="{{route("order.store")}}" method="POST"   >
            <div class="php-email-form">
                @csrf
            <div class="row gy-4">
              <div class="col-lg-4 col-md-6">
                <input type="text" name="name" class="form-control"  placeholder="@lang('content.name')"  >
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="text" class="form-control" name="phone"  placeholder="@lang('content.phone')" >
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="text" class="form-control" name="product" placeholder="@lang('content.product')"  >
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="text" name="price" class="form-control"  placeholder="@lang('content.price')$" >
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="hidden" name="admin_id" class="form-control"  >
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="hidden" name="status" value="2" class="form-control"  >
              </div>
            </div>
            <div class="text-center"><button type="submit">@lang('content.bookButton')</button></div>
        </div>
          </form>


        </div><!-- End Reservation Form -->

      </div>

    </div>
  </section>
  <!-- End Book A Table Section -->

@endsection
