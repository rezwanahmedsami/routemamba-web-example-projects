<style>
  .container {
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
}

.product-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  flex-direction: column;
}

.product-item {
  width: 100%;
  margin-bottom: 20px;
  box-shadow: 0px 10px 20px #888888;
  border-radius: 10px;
  overflow: hidden;
}

.product-image {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.product-name {
  font-size: 18px;
  font-weight: bold;
  margin-top: 10px;
  text-align: center;
  padding: 10px;
  font-family: 'Rowdies', cursive;
}

.product-price {
  font-size: 16px;
  font-weight: bold;
  color: #009688;
  text-align: center;
  padding: 10px;
  font-family: 'Rowdies', cursive;
}

.product-remove {
  background-color: #009688;
  color: #fff;
  border: none;
  padding: 8px 16px;
  /* border-radius: 20px; */
  font-size: 14px;
  font-weight: bold;
  margin-top: 10px;
  cursor: pointer;
  text-align: center;
  width: 100%;
}

</style>
<div class="w-full-h-full">
    <div class="title-div"><h1>Cart</h1></div>

    <div class="container">
  <div class="product-list">
    <div class="product-item">
      <img src="https://images.unsplash.com/photo-1560343090-f0409e92791a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" class="product-image" alt="Product 1">
      <h3 class="product-name">Product 1</h3>
      <p class="product-price">$50</p>
      <button class="product-remove">Remove</button>
    </div>
    <div class="product-item">
      <img src="https://images.unsplash.com/photo-1560343090-f0409e92791a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" class="product-image" alt="Product 2">
      <h3 class="product-name">Product 2</h3>
      <p class="product-price">$100</p>
      <button class="product-remove">Remove</button>
    </div>
    <div class="product-item">
      <img src="https://images.unsplash.com/photo-1560343090-f0409e92791a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" class="product-image" alt="Product 3">
      <h3 class="product-name">Product 3</h3>
      <p class="product-price">$75</p>
      <button class="product-remove">Remove</button>
    </div>
  </div>
</div>

</div>