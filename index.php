<div id="price"><span id="value">10.00</span> €</div>

<div id="prices">
  <label for='sizes'>Valitse koko</label>
  <select id='sizes' name='extra_sizes' class='custom' onchange='changePrice(this)'>
  <?php
    foreach($page->shop_sizes_price as $item){
      echo "<option value='". base64_encode(json_encode(array(
        "title" => $item->title,
        "price" => $item->shop_price
      ))) ."'>". $item->shop_sizes->first->title .", $item->shop_price €</option>"; ?>
  </select>
</div>

<script>
  function changePrice(el) {
    var item = JSON.parse(atob(el.value));
    document.getElementById("main_price").innerHTML = item["price"].toFixed(2);
  }
</script>
