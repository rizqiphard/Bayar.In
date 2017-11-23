<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Payment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,700|Open+Sans:300,400,700" rel="stylesheet">
  <link href="payment.css" rel="stylesheet">
</head>

<body>

  <!-- SVG SYMBOLS DEFINITION -->
  <svg style="display:none;">
    <symbol id="svg-icon-close" viewBox="0 0 17 18">
      <path d="M8.62.439c1.15 0 2.232.217 3.246.65a8.362 8.362 0 0 1 2.653 1.783 8.362 8.362 0 0 1 1.782 2.653 8.168 8.168 0 0 1 .651 3.247c0 1.15-.217 2.232-.65 3.247a8.362 8.362 0 0 1-1.783 2.653 8.362 8.362 0 0 1-2.653 1.782 8.168 8.168 0 0 1-3.247.651 8.168 8.168 0 0 1-3.247-.65 8.362 8.362 0 0 1-2.653-1.783 8.362 8.362 0 0 1-1.782-2.653 8.168 8.168 0 0 1-.651-3.247c0-1.15.217-2.233.65-3.247A8.362 8.362 0 0 1 2.72 2.872 8.362 8.362 0 0 1 5.372 1.09 8.168 8.168 0 0 1 8.62.439zm0 15.64c1.008 0 1.955-.192 2.84-.577a7.359 7.359 0 0 0 2.31-1.57 7.529 7.529 0 0 0 1.563-2.32 7.034 7.034 0 0 0 .578-2.84c0-1.01-.193-1.956-.578-2.84a7.428 7.428 0 0 0-1.562-2.311 7.428 7.428 0 0 0-2.312-1.563 7.034 7.034 0 0 0-2.84-.578c-1.009 0-1.956.193-2.84.578a7.428 7.428 0 0 0-2.311 1.563 7.428 7.428 0 0 0-1.563 2.31 7.034 7.034 0 0 0-.578 2.841c0 1.01.193 1.956.578 2.84a7.529 7.529 0 0 0 1.563 2.32 7.359 7.359 0 0 0 2.311 1.57 7.034 7.034 0 0 0 2.84.578zm2.945-10.253c.098.098.147.22.147.366a.497.497 0 0 1-.147.366L9.352 8.772l2.213 2.214c.098.097.147.22.147.366a.497.497 0 0 1-.513.512.497.497 0 0 1-.366-.146L8.619 9.504l-2.213 2.214a.497.497 0 0 1-.367.146.497.497 0 0 1-.512-.512c0-.147.049-.269.146-.366l2.214-2.214-2.214-2.214a.497.497 0 0 1-.146-.366.497.497 0 0 1 .512-.512c.147 0 .269.048.367.146L8.619 8.04l2.214-2.214a.497.497 0 0 1 .366-.146c.146 0 .268.048.366.146z" />
    </symbol>
    <symbol id="svg-icon-paypal" viewBox="0 0 23 15">
      <path d="M7.907 7.243c0 .446-.364.783-.82.783-.345 0-.596-.191-.596-.546 0-.447.354-.802.81-.802.345 0 .606.21.606.565zm7.311-1.358c0 .547-.335.656-.82.656l-.297.01.158-.976c.01-.063.056-.1.121-.1h.168c.316 0 .67.018.67.41zm3.27 1.358c0 .446-.364.783-.81.783-.345 0-.606-.191-.606-.546 0-.447.354-.802.81-.802.345 0 .606.21.606.565zM5.746 5.685c0-.766-.606-1.02-1.295-1.02h-1.49a.199.199 0 0 0-.196.172L2.16 8.555c-.01.073.046.146.12.146h.709c.102 0 .195-.073.205-.174l.167-1.002c.038-.264.494-.173.67-.173 1.063 0 1.715-.62 1.715-1.667zm2.878 2.842l.382-2.378c.009-.072-.047-.145-.121-.145h-.708c-.14 0-.15.2-.159.3-.214-.31-.53-.364-.884-.364-.913 0-1.612.783-1.612 1.649 0 .71.457 1.175 1.183 1.175.335 0 .755-.145.987-.4a.696.696 0 0 0-.037.19c0 .083.037.147.121.147h.643a.208.208 0 0 0 .205-.174zm4.163-2.396c0-.064-.056-.127-.12-.127h-.718a.21.21 0 0 0-.168.09l-.987 1.422-.41-1.367a.221.221 0 0 0-.205-.145h-.698c-.065 0-.121.063-.121.127 0 .046.726 2.105.791 2.296-.102.137-.763.984-.763 1.093 0 .064.055.119.12.119h.718a.21.21 0 0 0 .168-.091l2.375-3.353c.018-.018.018-.036.018-.064zm3.54-.446c0-.766-.606-1.02-1.295-1.02h-1.481c-.102 0-.196.072-.205.172l-.605 3.718c-.01.073.046.146.12.146h.765c.074 0 .13-.055.149-.119l.167-1.057c.037-.264.494-.173.67-.173 1.063 0 1.715-.62 1.715-1.667zm2.878 2.842l.382-2.378c.009-.072-.047-.145-.121-.145h-.708c-.14 0-.15.2-.159.3-.205-.31-.521-.364-.885-.364-.912 0-1.61.783-1.61 1.649 0 .71.456 1.175 1.182 1.175.345 0 .764-.145.987-.4-.009.054-.037.136-.037.19 0 .083.037.147.121.147H19a.208.208 0 0 0 .205-.174zm2.03-3.726v-.01a.124.124 0 0 0-.12-.127h-.69a.128.128 0 0 0-.121.1l-.606 3.79-.009.019c0 .064.056.128.13.128h.615a.199.199 0 0 0 .196-.174l.605-3.726zM4.62 6.021c-.075.466-.392.52-.801.52l-.308.01.159-.976a.12.12 0 0 1 .12-.1h.178c.419 0 .736.055.652.547zm17.809-4.7v11.662c0 .637-.54 1.166-1.193 1.166H2.16c-.652 0-1.192-.529-1.192-1.166V1.32c0-.638.54-1.167 1.192-1.167h19.075c.652 0 1.193.529 1.193 1.167z" />
    </symbol>
    <symbol id="svg-icon-check" viewBox="0 0 17 14">
      <path d="M5.634 10.66L15.681.605l1.344 1.342L5.635 13.32.35 8.043l1.32-1.342z" />
    </symbol>
    <symbol id="svg-icon-right" viewBox="0 0 8 13">
      <path d="M1.653.378l6.07 6.063-6.07 6.063L.22 11.073 4.883 6.44.22 1.809z" />
    </symbol>
    <symbol id="svg-icon-down" viewBox="0 0 10 8">
      <path d="M1.22.937L5.04 4.774 8.863.937l1.18 1.179-5.002 4.996L.04 2.116z" />
    </symbol>
  </svg>

  <!-- MAIN -->
<main>
    <section class="checkout">
      <header>
        <h1>History</h1>
      </header>
      <section class="purchases">
        <article class="purchase-item">
          <button class="close-icon">
            <svg width="17" height="18">
              <use href="#svg-icon-close" />
            </svg>
          </button>
          <p class="purchase-name">
          <?php
		  echo $_POST['name-on-card'];
		  echo "<br/>";
		  echo $_POST['card-number'];
		  ?>
          </p>
          
        </article>
        <article class="purchase-item">
          <button class="close-icon">
            <svg width="17" height="18">
              <use href="#svg-icon-close" />
            </svg>
          </button>
          <div class="purchase-name">
            1998 AKU LAHIR YEEEYYYY
          </div>
          <div class="purchase-price">$8598</div>
        </article>
      </section>
      <section class="result">
        <p>$mahal pokok e</p>
      </section>
    </section>
    <section class="payment">
      <header>
        <h1>Payment</h1>
        <a href="#">
          <span class="icon-text">Use</span>
          <svg width="23" height="15">
            <use href="#svg-icon-paypal" />
          </svg>
        </a>
      </header>
      
      <form action="/checkout" method="post" onsubmit="return true">
        <div class="name-on-card">
          <input
            type="number"
            name="nominal"
            id="name-on-card-field"
            placeholder=" "
            pattern="^([a-zA-Z]{2,}\s[a-zA-z]{1,}'?-?[a-zA-Z]{2,}\s?([a-zA-Z]{1,})?)"
            required
          />
          <svg width="17" height="14">
            <use href="#svg-icon-check" />
          </svg>
          <label for="name-on-card-field">Nominal</label>
        </div>
        <div class="card-number">
          <input
            type="number"
            name="card-number"
            id="card-number-field"
            placeholder=" "
            pattern="\d{4}[\s\-]*\d{4}[\s\-]*\d{4}[\s\-]*\d{4}"
            required
          />
          <svg width="17" height="14">
            <use href="#svg-icon-check" />
          </svg>
          <label for="card-number-field">Nomor rekening</label>
        </div>
        <div class="expiration-date-cvv">
          <div class="expiration-date">
            <label for="expiration-date-field">Bank</label>
            <input 
              name="expiration-date"
              id="expiration-date-field"
              placeholder=" "
              pattern="^(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$"
              />
              <br>
            
              <input type="radio" name="bank" value="BCA">BCA<br/>  
                 <input type="radio" name="bank" value="BRI">BRI<br/>  
                 <input type="radio" name="bank" value="Mandiri">Mandiri<br/>  
                 <input type="radio" name="bank" value="BNI">BNI<br/>
            
          </div>
          
        </div>
        
        <button class="confirm-button" onClick="window.location = 'hasilpayment.php';">
          <p class="confirm-button__text">Confirm</p>          
          <svg width="8" height="13" class="confirm-button__icon">
            <use href="#svg-icon-right" />
          </svg>
        </button>
        
      </form>
      
    </section>
  </main>

</body>
</html>