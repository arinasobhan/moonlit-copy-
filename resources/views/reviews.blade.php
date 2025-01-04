@extends('master.layout')
@section('content')

<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
            <div class="text">
              <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
              <h1 class="mb-4 bread">Reviews</h1>
          </div>
        </div>
      </div>
    </div>
  </div>


<div class="reviews-container">
    <div class="overall-rating">
        <h2>Reviews</h2>
        <div class="rating-score">
            <span class="score">9.1</span>
            <span class="label">Excellent</span>
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
    </div>

    <div class="review-form">
        <h3>Review</h3>
        <div class="rating-options">
            <span>Comfort</span>
            <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
            <span>Staff</span>
            <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
            <span>Facilities</span>
            <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
            <span>Cleanliness</span>
            <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
            <span>Location</span>
            <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
            <span>Value For Money</span>
            <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        </div>
        <textarea placeholder="Your review..."></textarea>
        <button class="btn-post">Post Review</button>
        <button class="btn-update">Update Review</button>
    </div>

    <div class="guest-reviews">
        <h3>Guest Reviews</h3>
        <p>4,789 reviews</p>

        <div class="guest-review">
            <div class="guest-info">
                <p><strong>Matthew</strong> <br> Spain</p>
                <p>Deluxe Twin Room <br> 1 night - November 2024</p>
            </div>
            <div class="review-text">
                <p><strong>Great Stay</strong></p>
                <p>"What I liked the most was how well centrally located this hotel was in proximity to all the must-see sites in Kuala Lumpur. I had a great stay."</p>
                <span class="review-meta">Posted on 5 Dec 2024 at 2:56 PM</span>
                <div class="review-actions">
                    <button class="helpful">Helpful</button>
                    <button class="unhelpful">Unhelpful</button>
                    <button class="report">Report</button>
                </div>
            </div>
        </div>

        <div class="guest-review">
            <div class="guest-info">
                <p><strong>Saeed</strong> <br> Qatar</p>
                <p>Executive Deluxe King <br> 3 nights - October 2024</p>
            </div>
            <div class="review-text">
                <p><strong>Exceptional</strong></p>
                <p>"The location is top-notch, the front staff hospitality and not to forget the variety of breakfasts, which is awesome."</p>
                <span class="review-meta">Posted on 5 Dec 2024 at 2:56 PM</span>
                <div class="review-actions">
                    <button class="helpful">Helpful</button>
                    <button class="unhelpful">Unhelpful</button>
                    <button class="report">Report</button>
                </div>
            </div>
        </div>
    </div>
</div>

  @endsection
