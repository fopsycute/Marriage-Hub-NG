
<?php include 'header.php'; ?>
<div class="container cart-page py-5">
  <h2 class="cart-title mb-4"><i class="bi bi-cart"></i> Your Cart</h2>
  <div class="row">
    <div class="col-lg-8">
      <div class="cart-table-wrapper">
        <table class="table cart-table align-middle">
          <thead>
            <tr>
              <th>Product</th>
              <th class="text-center">Price</th>
              <th class="text-center">Quantity</th>
              <th class="text-center">Total</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <!-- Example Row -->
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="assets/img/black-family-enjoying (1).jpg" alt="Product" class="cart-product-img me-3">
                  <div>
                    <div class="fw-bold">Marriage Counseling Session</div>
                    <div class="text-muted small">1 hour, Online</div>
                  </div>
                </div>
              </td>
              <td class="text-center">₦10,000</td>
              <td class="text-center">
                <input type="number" class="form-control cart-qty-input" value="1" min="1" style="width:70px;">
              </td>
              <td class="text-center">₦10,000</td>
              <td class="text-center">
                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
            <!-- Repeat for each cart item -->
          </tbody>
        </table>
        <a href="events.php" class="btn btn-link"><i class="bi bi-arrow-left"></i> Continue Shopping</a>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="cart-summary card p-4">
        <h5 class="mb-3">Order Summary</h5>
        <div class="d-flex justify-content-between mb-2">
          <span>Subtotal</span>
          <span>₦10,000</span>
        </div>
        <div class="d-flex justify-content-between mb-2">
          <span>VAT</span>
          <span>₦500</span>
        </div>
        <div class="d-flex justify-content-between fw-bold border-top pt-2 mb-3">
          <span>Total</span>
          <span>₦10,500</span>
        </div>
        <a href="checkout.php" class="btn btn-ad w-100 mb-2">Proceed to Checkout</a>
        <a href="events.php" class="btn btn-outline-secondary w-100">Browse More Events</a>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>