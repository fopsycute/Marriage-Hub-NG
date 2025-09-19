

<?php include "header.php"; ?>
<?php include "sidebar-header.php"; ?>


<div class="container mt-4 mb-4">



<div class="card mt-4">
  <div class="card-header">
    <h5>📝 Write a Review</h5>
  </div>
  <div class="card-body">
    <form action="submit-review.php" method="post">
      
      <!-- Select Booking / Product -->
      <div class="mb-3">
        <label for="booking" class="form-label">Booking / Product</label>
        <input type="text" class="form-control" value="Marriage Counseling Session" readonly>
 
      </div>

      <!-- Star Rating -->
      <div class="mb-3">
        <label class="form-label d-block">Rating</label>
        <div class="star-rating">
          <input type="radio" id="star5" name="rating" value="5">
          <label for="star5" title="5 stars"><i class="bi bi-star-fill"></i></label>

          <input type="radio" id="star4" name="rating" value="4">
          <label for="star4" title="4 stars"><i class="bi bi-star-fill"></i></label>

          <input type="radio" id="star3" name="rating" value="3">
          <label for="star3" title="3 stars"><i class="bi bi-star-fill"></i></label>

          <input type="radio" id="star2" name="rating" value="2">
          <label for="star2" title="2 stars"><i class="bi bi-star-fill"></i></label>

          <input type="radio" id="star1" name="rating" value="1">
          <label for="star1" title="1 star"><i class="bi bi-star-fill"></i></label>
        </div>
      </div>

      <!-- Review Text -->
      <div class="mb-3">
        <label for="reviewText" class="form-label">Your Review</label>
        <textarea id="reviewText" name="review" class="form-control" rows="4" placeholder="Write your experience..." required></textarea>
      </div>

      <!-- Submit -->
      <button type="submit" class="btn-getstarted">Submit Review</button>
    </form>
  </div>
</div>






</div>


<?php include "footer.php"; ?>