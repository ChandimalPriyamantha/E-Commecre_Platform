<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="payment.css">
</head>
<body>

<div class="container">
  <div class="card-container">
    <div class="left">
      <h1>Your Order</h1>
      <span></span>
      <div class="order-items">
        <img src="https://img.pngio.com/charcoal-oil-combat-duo-the-man-company-product-png-1000_1000.png" alt="" srcset="" />
        <div class="item">
          <span>Bovonto</span>
          <span>1 pcs</span>
        </div>
        <span class="item-price">$25</span>
      </div>
      <div class="order-items">
        <img src="https://img.pngio.com/charcoal-oil-combat-duo-the-man-company-product-png-1000_1000.png" alt="" srcset="" />
        <div class="item">
          <span>Wine</span>
          <span>1 pcs</span>
        </div>
        <span class="item-price">$25</span>
      </div>
      <div class="order-items">
        <img src="https://img.pngio.com/charcoal-oil-combat-duo-the-man-company-product-png-1000_1000.png" alt="" srcset="" />
        <div class="item">
          <span>Soda</span>
          <span>1 pcs</span>
        </div>
        <span class="item-price">$25</span>
      </div>
      <div class="total">
        <h2>Total</h2>
        <span class="price">$75.00</span>
      </div>
    </div>
    <div class="right">
      <h1>Payment</h1>
      <span></span>
      <div class="form-container">
        <form action="#" onsubmit="return false">
          <div class="payment-section">
            <label for="payment">Payment Method</label>
            <input type="text" name="payment" id="payment" />
          </div>
          <div class="input-items flex">
            <div class="marginright">
              <label for="firstName">First Name</label>
              <input type="text" name="firstName" id="firstName" />
            </div>
            <div>
              <label for="lastName">Last Name</label>
              <input type="text" name="lastName" id="lastName" />
            </div>
          </div>
          <div class="input-items">
            <label for="cardNumber">Card Number</label>
            <input type="text" name="cardNumber" id="cardNumber" />
          </div>
          <div class="input-items flex">
            <div>
              <label for="cardNumber">Expiration Date</label>
              <div class="flex marginright">
                <span class="marginright">
                  <input type="text" name="cardNumber" id="cardNumber" />
                </span>
                <input type="text" name="cardNumber" id="cardNumber" />
              </div>
            </div>
            <div>
              <label for="cardNumber">CVV</label>
              <input type="text" name="cardNumber" id="cardNumber" />
            </div>
          </div>
          <div class="submit">
            <button>Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
