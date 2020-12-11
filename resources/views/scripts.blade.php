if(typeof jQuery == 'undefined'){
       document.write('<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>');
 }
 
var shops = '{{$shop}}';
var discounts ='{{$discounts}}';
var cart;
var prices;
var variant_id;
var product_ids;
var urlsplit;
var str;
var lastpart;
var regularPrice;
////cart variables
var discounted_price;
var handle;
var id;
var key;
var product_title;
var quantity;
var url;
var variant_id;
var p_ids;
var check;
var last_price;
var last_variant_id;
var last_product_id;
var get_id;

var discounts = discounts.replace(/(&quot\;)/g,"\"");
//console.log(JSON.parse(discounts));
discounts =JSON.parse(discounts);
var collections=[ ];
var collection_d = $.getJSON('/collections', function(response) {
  $.each(response.collections ,async function(index, collection) {
    collections[index] = collection;

  });
 //return response;
});

// var urls =window.location.href;
//   urlssplit = urls.split("/");
//   lastparts = urlssplit[urlssplit.length-1];

// var getdata = $.getJSON('/products/'+lastparts, function(response) {
//  $.each(response ,async function(index, key) {
//           var last_variants = key.variants;
          
//           $.each(last_variants ,async function(index1, key1) {
//             last_price = key1.price;
//             last_variant_id = key1.id;
//             last_product_id = key1.product_id;
//           });
//         });
//   });

 


$.each(discounts,async function(index, discount) {
    str = window.location.href;
    urlsplit = str.split("/");
    lastpart = urlsplit[urlsplit.length-1];
   
    var testproduct = discounts.find(x => x.handle == discount.handle);

    if(lastpart == testproduct.handle){
    //  var variant_id=[ ];
      var product_d = $.getJSON('/products/'+testproduct.handle, function(response) {
        $.each(response ,async function(index, key) {
          var variants = key.variants;
          
          $.each(variants ,async function(index1, key1) {
            prices = key1.price;
            variant_id = key1.id;
            product_ids = key1.product_id;
          });
        });
         //   console.log(product_ids);

        $.getJSON('/cart', function(response) {
          carts = response.items;
          //console.log(carts[0].id);
          $.each(carts ,async function(index, keys) {
            idss = keys.product_id;
            $.each(discounts,async function(index, discounted) {
             // var testinggs = discounts.find(x => x.handle == discounted.handle);
              checks = discounts.find(x => x.product_id == idss);
            });
          });
        });

        if( testproduct.value_type == 'fixed_amount'){
          regularPrice = prices - testproduct.value;
        }else if(testproduct.value_type == 'percentage'){
          regularPrice = prices - testproduct.value/100 * prices;
        }

       var product_price = $(".product__price").html('<div><span class="regular_prices" style="text-decoration: line-through;font-weight: 700; color:#69727b;">Rs. '+ prices+'</span>&nbsp;&nbsp;<span class="blinking blink" style="color:#557b97;font-weight: 700;">Rs. ' + regularPrice+'</span></div>');

       });
     // console.log(variant_id);
      var hide = $(".price__sale").css("display","none"); 
      var hide1 = $(".price-item.price-item--regular").css("display","none");
     
     }else{
     // console.log("not here");
    }if(discount.collection_id != null){
   // console.log("enter");
    //console.log($('a[href="/collections/all"]'));
  //  console.log(collections);
    // $.each(collections,async function(index, collection) {
    //   console.log("Enter 2");
    //   console.log(collection.id);
    //   if(collection.id == discount.collection_id){
    //     console.log($('a[href="/collections/all/products"]'));
    //     var url = '/collections/'+collection.handle+'/products.json';
    //     console.log(url);
    //     await getcollection(url);
    //   }
    // });
    //console.log(collections.length);
    for(var i=0; i< collections.length; i++){
    //  console.log(collection[i].id);
    }
   // await getcollection(url);
    //$.getJSON('/collections.json?view=json', async function(response) {
      //var collectionList = response;
      //console.log(collectionList);
      //await $(collectionList).each( async function(index,collection){
      // console.log(collection);
        //if(collection.id == discount.collection_id){
        
       // }
     // });
   //});
  }else if(discount.product_type == 'specific'){
  // console.log("products"+collections);
  }else{

  }  
});
if(lastpart == "cart"){
$.each(discounts,async function(index, discountss) {
  $.getJSON('/cart', function(response) {
    cartt = response.items;
    get_id1 = cartt[0].product_id;
    get_var_id1 = cartt[0].variant_id;
    //var testing = discounts.find(x => x.handle == discounted.handle);
    checks = discounts.find(x => x.product_id == get_id1);
    if(checks){
      $("tbody").empty();
        var subtotal = 0;
        var subtotals = 0;
        var fadeTime = 300;

      $('.cart-subtotal').empty();
      $.getJSON('/cart', function(response) {
        cart = response.items;
        get_id = cart[0].product_id;
        get_var_id = cart[0].variant_id;
        get_url = cart[0].url;
        get_handle = cart[0].handle;
        get_price = cart[0].price;
        get_qty = cart[0].quantity;

        $.each(cart ,async function(index, keys) {
          discounted_price = keys.discounted_price;
          price1 = keys.price;
          handle = keys.handle;
          id = keys.product_id;
          key = keys.key;
          product_title = keys.product_title;
          quantity = keys.quantity;
          url = keys.url;
          variant_id = keys.variant_id;

        $.each(discounts,async function(index, discounted) {
          var testingg = discounts.find(x => x.handle == discounted.handle);
          check = discounts.find(x => x.product_id == get_id);
          if(get_handle == testingg.handle){
            var tr_url = $('.cart__row1').attr('data-cart-item-url');
            var num1 = discounted_price / 100;
            var totals = num1 * quantity;
            if( testingg.value_type == 'fixed_amount'){
              var num = get_price / 100;
              sale = num - testingg.value;
              var total = sale * get_qty;
              cell = $("tbody tr:eq(0) td:eq(1)").html('Rs. '+sale.toFixed(2));
              $("tbody tr:eq(0) td:eq(3)").html('Rs. '+total.toFixed(2));
            }else if(testingg.value_type == 'percentage'){
              var num = get_price / 100;
              sale = num - testingg.value/100 * num;
              var total = sale * get_qty;
              cell = $("tbody tr:eq(0) td:eq(1)").html('Rs. '+sale.toFixed(2));
              $("tbody tr:eq(0) td:eq(3)").html('Rs. '+total.toFixed(2));
            }
            subtotal += totals;
            var rowLen =  $('table > tbody  > tr').length;
            $("tbody").html("<tr class='cart__row1' data-cart-item-url="+url+" data-cart-item-title="+product_title+" data-cart-item-quantity="+quantity+"><td class='cart__meta1 small--text-left'><div class='cart__product-information1'><div class='cart__image-wrapper1'></div><div><div class='list-view-item__title1' style='font-weight: 600;font-size: 1.125em;'><a href="+url+" class='cart__product-title1' style='border-bottom:none;color:#69727b;'>"+product_title+"</a></div><p class='cart__remove1'><a href='/cart/change?line="+(rowLen)+"&quantity=0' class='text-link1 text-link--accent'>Remove</a></p> </div></div></td><td class='cart__price1 text-right'>Rs. "+num1.toFixed(2)+"</td><td class='cart__quantity-td1 text-right small--hide'><div class='cart__qty1'><label class='cart__qty-label1'></label><input class='cart__qty-input1' style='text-align:center;width:60px;padding-left:0.3125em;padding-right:0.3125em;' type='number' name='updates[]'' value="+quantity+" min='0' pattern='[0-9]*' data-quantity-item="+quantity+"></div></td><td class='cart__final-price1 text-right small--hide'><div><span>Rs. "+totals.toFixed(2)+"</span></div></td></tr>");
          }
          $('.cart__qty-input1').change( function() {
             updateQuantity(this);
          });
        });
      });
    //console.log(testingg.value);
    $('.cart-subtotal').html("<span class='cart-subtotal__title1' style='font-size: 1.125em;'>Subtotal</span><span class='cart-subtotal__price1' style='padding-left: 55px;'>Rs. "+subtotal.toFixed(2)+"</span>");
  });
  }

   function recalculateCart() {
    var subtotals = 0;
  
    /* Sum up row totals */
    $('.cart__row1').each(function () {
      var cal = $(this).children('.cart__final-price1').text().replace("Rs.", "");
      subtotals += parseInt(cal);
    });

    // console.log(subtotals);
     $('.cart-subtotal__price1').fadeOut(fadeTime, function() {
      $(this).text('Rs. '+subtotals.toFixed(2));
      $(this).fadeIn(fadeTime);
    });
  }
  
  function updateQuantity(quantityInput)
  {
    /* Calculate line price */
    var productRow = $(quantityInput).parent().parent();
    var priced = productRow.prev().text().replace("Rs.", "");
    var quantityy = $(quantityInput).val();
    var linePrice = priced * quantityy;
    //subtotald += linePrice;
    
    /* Update line price display and recalc cart totals */
    productRow.next('.cart__final-price1').each(function () {
      $(this).fadeOut(fadeTime, function() {
        $(this).text('Rs. '+linePrice.toFixed(2));
        recalculateCart();
        $(this).fadeIn(fadeTime);
      });
    });
  }
   
    });
  });


}

function blink_text() {
    $('.blink').fadeOut(500);
    $('.blink').fadeIn(500);
}
setInterval(blink_text, 2000);

function getcollection(url){
  console.log("My function");
   $.getJSON(url, async function(products) {
      //if($('a[href="/collections/'+collection.handle+'"]'))
    });
}
console.log("Collection");
//console.log(collections);
  $('.cart').append('<input autocomplete="off" value="mydiscount" type="hidden" name="second" class="discount_code" />');
 // <input class="js-form-discount" type="hidden" name="discount" value="RESELLERDISCOUNTCODE" >