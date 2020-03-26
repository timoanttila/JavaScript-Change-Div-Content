# How to change div's content with vanilla JavaScript

Many projects have multiple prices instead of the normal price, depending on the size. From the Select field it is easy to deliver the data to shopping cart, but the data should also update the price field when price is changed.

I think this is the easiest way to update price field.

```JavaScript
onchange="changePrice(this)"
<script>
  function changePrice(el) {
    var item = JSON.parse(atob(el.value));
    document.getElementById("main_price").innerHTML = item["price"].toFixed(2);
  }
</script>
```
