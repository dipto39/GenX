// show language list
let lang_btn = document.querySelector('.lang')

lang_btn.addEventListener('click', (e) => {
  if (document.querySelector('.lang_area').classList.contains('hidden')) {
    document.querySelector('.lang_area').classList.remove('hidden')
  } else {
    document.querySelector('.lang_area').classList.add('hidden')

  }

})

// show language list
let currency_btn = document.querySelector('.currency')

currency_btn.addEventListener('click', (e) => {
  if (document.querySelector('.currency_area').classList.contains('hidden')) {
    document.querySelector('.currency_area').classList.remove('hidden')
  } else {
    document.querySelector('.currency_area').classList.add('hidden')

  }

})

// show category icon
let category_btn = document.querySelector('.catebtn')
document.addEventListener('scroll', function () {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    category_btn.style.display = 'block';
  } else {
    category_btn.style.display = 'none';
  }
})

// show categorys
let cb = document.querySelector('.categoryicon');
let categories = document.querySelector('.categories');
cb.addEventListener('click', function (e) {
  if (categories.classList.contains('hidden')) {
    categories.classList.remove('hidden')
  } else {
    categories.classList.add('hidden')
  }
})

// hide category by outside click
let tabcontent = document.getElementsByClassName('tabcontent')
window.addEventListener('click', function (e) {

  // hide category

  if (category_btn.contains(e.target)) {} else {
    categories.classList.add('hidden')

  }

  // hide sub category

  for (i = 0; i < tabcontent.length; i++) {

    if (tabcontent[i].contains(e.target)) {} else {
      tabcontent[i].style.display = "none";

    }
  }

  // hide cart items
  let cart_item = document.getElementsByClassName('cart_sidebar')
  if (!e.target.classList.contains('cart_sction')) {} else {
    $('.cart_sidebar').animate({right: '-340px'})
  $('.cart_sction').fadeOut(900);


  }
  // console.log(e.target)


});


// main tab section 
function openCategory(evt, categoryName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(categoryName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Show Payment method
$(document).on('click','.ptop',function(e){
  e.preventDefault()
  $('.payment_option').show();
   $('.ptop').hide();

})


// hide tabcontent 


// hidden  tab section 

function opentab(evt, categoryName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(categoryName).style.display = "block";
  evt.currentTarget.className += " active";
}



// carousel slick slider 

$('.carousel_right').slick({
  prevArrow: false,
  nextArrow: false,
  dots: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

// flash slider  

$('.flash_products').slick({
  dots: false,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 580,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]

});



// Top category slider 

$('.top_categories_box').slick({
  dots: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false, responsive: [
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 580,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

// discount slider
 
$('.discounts_section').slick({
  dots: false,
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: false,
  responsive: [
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 580,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
  ]
});

// showing how many item in cart

function hmc(){
  let products = [];
  if(getCookie('cart')){
      products = JSON.parse(getCookie('cart'));
  }
  if(products.length == 0){
  }else{
    $('.cart_item').removeClass('hidden')
    $('.cart_item').html(products.length)
  }
}
hmc();

// showing cart section 

$('.cart_icon').on("click",(e)=>{
  $('.cart_sction').show();
  $('.cart_sidebar').animate({right: '0'})
  show_cart_item()
})

// show cart items
function show_cart_item(){
  let products = [];
  if(getCookie('cart')){
      products = JSON.parse(getCookie('cart'));
  }
  if(products.length == 0){
    // $('.empty_cart').addClass('hidden')
  }else{
    $('.empty_cart').addClass('hidden')
    $('.cart_item').removeClass('hidden')
    $('.cart_item').html(products.length)
    $('.fill_cart').removeClass('hidden');
    let data = `<div class="fill_cart ">
    <div class="fill_body overflow-auto">`;
    var tprice=0;
    products.forEach((e)=>{
      tprice += Number(e.price) * e.quant
      data +=`<div class="single_item">
      <div class="item_img">
          <img src="${e.image}" alt="${e.image}">
      </div>
      
      <div class="details">
          <a class="pname" href="">${e.pname}</a>
          <p class="price text-ThemeColor"><span>$</span>${Number(e.price) * e.quant}</p>
      </div>
      <div class="action">
          <button class="increment" data-pid="${e.productId}">+</button>
          <p>${e.quant}</p>
          <button class="decrement" data-pid="${e.productId}">-</button>
      </div>
      <div class="rmcart" data-pid="${e.productId}">
          <i class="fa-regular fa-trash-can"></i>
      </div>
  </div>`
    })
    data += ` </div>
                    
    <div class="fill_footer">
        <a href="/checkout" class="chekout">Chekout Now (<span> $ ${tprice}</span>)</a>
        <a  href="/cart" class="view_cart">View Cart</a>
    </div>

</div>`
    $('.cart_body').html(data);
  }

}

// increment Cart item
$(document).on('click','.increment',function(e){
  var pid = $(e.target).attr('data-pid');
  let products = [];
  if(getCookie('cart')){
      products = JSON.parse(getCookie('cart'));
  }
  //Find index of specific object using findIndex method.
       objIndex = products.findIndex((obj => obj.productId == pid));

  if(products[objIndex].quant >= 1 && products[objIndex].quant < 5){   
        products[objIndex].quant = Number(products[objIndex].quant)+1;
        createCookie('cart', JSON.stringify(products));
        show_cart_item();
  }
})
// decrement Cart item
$(document).on('click','.decrement',function(e){
  var pid = $(e.target).attr('data-pid');
  let products = [];
  if(getCookie('cart')){
      products = JSON.parse(getCookie('cart'));
  }
  //Find index of specific object using findIndex method.    
    objIndex = products.findIndex((obj => obj.productId == pid));
    
    if(products[objIndex].quant > 1 && products[objIndex].quant <= 5){
      products[objIndex].quant = Number(products[objIndex].quant)-1;
      createCookie('cart', JSON.stringify(products));
      show_cart_item();
    }
        
})

// add to cart product

$(document).on('click','.atoCart', function(e){
 let price = ($(e.target).parent().parent().parent().find('.price span').html());
 let pname = ($(e.target).parent().parent().parent().find('.ptitle a').text());
 let pimg = ($(e.target).parent().parent().parent().parent().find('img').attr('src'));
 let id = ($(e.target).parent().attr('data-pid'));
 function addProduct(){
  let products = [];
  if(getCookie('cart')){
      products = JSON.parse(getCookie('cart'));
  }
  products.push({'productId' :id, "image" : pimg,"price" : price,'pname' :pname,'quant' : 1});
  createCookie('cart', JSON.stringify(products));
  $('.cart_item').removeClass('hidden')
  $('.cart_item').html(products.length)
}
addProduct();
}
);

// Remove to cart 

$(document).on('click','.rmcart', function(e){
  $(e.target).parent().parent().remove();
  let id = ($(e.target).parent().attr('data-pid'));

  function removeProduct(productId){
    let storageProducts = JSON.parse(getCookie('cart'));
    let products = storageProducts.filter(product => product.productId !== productId );
    createCookie('cart', JSON.stringify(products));
  
}
removeProduct(id);
show_cart_item()
 }
 );

 // Single page section 

 function dr_view(evt, sname) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("dr_content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("dr_tab");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(sname).style.display = "block";
  evt.currentTarget.className += " active";
}

// about us page 

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

// Show all cart in cart Route

function showAllcart(){
  let products = [];
  if(getCookie('cart')){
      products = JSON.parse(getCookie('cart'));
  }
  if(products.length == 0){
    $('.all_cart_items').html('<h2 class="text-center text-red-500">No Item Found</h2>');
  }else{
    
    var data =`<div class="">
    <div class="flex justify-center items-center py-5">
        <button class="bg-ThemeColor text-white font-semibold py-2 px-5 rounded-3xl"> 1. Cart</button>
    <span class="w-10 bg-ThemeColor h-1"></span>
    <button class="bg-pink-200 text-ThemeColor font-semibold py-2 px-5 rounded-3xl relative">1. Details</button>
    <span class="w-10 bg-pink-200 h-1"></span>
    <button class="bg-pink-200 text-ThemeColor font-semibold py-2 px-5 rounded-3xl relative">1. Payment</button>
    </div>
    <div class="py-4 flex">
        <div class="basis-4/5 me-4 rounded-md">`;
        var tprice=0;
      products.forEach(e => {
        tprice += Number(e.price) * e.quant
        data+=`   <div class="single_item flex justify-between items-center bg-white p-2 mb-5">
        <div class="item_img">
            <img class="h-32" src="${e.image}" alt="">
        </div>
        
        <div class="details">
            <a class="pname" href="">${e.pname}</a>
            <div class="flex">
                <p class="price text-ThemeColor"><span>$</span>${Number(e.price) * e.quant}</p>
                <p class="price text-gray-400 ml-5"><span>$</span>${e.price}<span>x</span> ${e.quatn}</p>
            </div>
        </div>
        <div class="action flex flex-col justify-center items-center">
            <button class="maincincrement text-lg border px-2" data-pid="${e.productId}">+</button>
            <p>${e.quant}</p>
            <button class="maincdecrement text-lg border px-2" data-pid="${e.productId}">-</button>
        </div>
        <div class="rmcart" data-pid="${e.productId}">
            <i class="fa-regular fa-trash-can"></i>
        </div>
    </div>`
      });
         
           
       data+=` </div>
        <div class="basis-1/5">
            <div class="rounded-md bg-white p-4 ">
                <h1 class="front-lg float-right mb-5">AED ${tprice}</h1>
                <br>
                <a href="/checkout" class="bg-ThemeColor text-center text-white w-full py-2 block">Chekout Now</a>
            </div>
        </div>
    </div>
</div>`;
$('.all_cart_items').html(data)
  }
}
showAllcart()
// Main increment Cart item
$(document).on('click','.maincincrement',function(e){
  var pid = $(e.target).attr('data-pid');
  let products = [];
  if(getCookie('cart')){
      products = JSON.parse(getCookie('cart'));
  }
  //Find index of specific object using findIndex method.
       objIndex = products.findIndex((obj => obj.productId == pid));

  if(products[objIndex].quant >= 1 && products[objIndex].quant < 5){   
        products[objIndex].quant = Number(products[objIndex].quant)+1;
        createCookie('cart', JSON.stringify(products));
        showAllcart()
  }
})
// Main decrement Cart item
$(document).on('click','.maincdecrement',function(e){
  var pid = $(e.target).attr('data-pid');
  let products = [];
  if(getCookie('cart')){
      products = JSON.parse(getCookie('cart'));
  }
  //Find index of specific object using findIndex method.    
    objIndex = products.findIndex((obj => obj.productId == pid));
    
    if(products[objIndex].quant > 1 && products[objIndex].quant <= 5){
      products[objIndex].quant = Number(products[objIndex].quant)-1;
      createCookie('cart', JSON.stringify(products));
      showAllcart()
    }
        
})

// Cookie Herper Function 

function createCookie(name, value, days) {
  var expires;
  if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      expires = "; expires=" + date.toGMTString();
  }
  else {
      expires = "";
  }
  document.cookie = name + "=" + value + expires + "; path=/";
}

function getCookie(c_name) {
  if (document.cookie.length > 0) {
      c_start = document.cookie.indexOf(c_name + "=");
      if (c_start != -1) {
          c_start = c_start + c_name.length + 1;
          c_end = document.cookie.indexOf(";", c_start);
          if (c_end == -1) {
              c_end = document.cookie.length;
          }
          return unescape(document.cookie.substring(c_start, c_end));
      }
  }
  return "";
}


// Change Shipped country

$(document).on('change','.shipped_country',function(e){
  var id = this.value
  let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  fetch('/getShippingCarge/'+id, {
          headers: {
              "Content-Type": "application/json",
              "Accept": "application/json, text-plain, */*",
              "X-Requested-With": "XMLHttpRequest",
              "X-CSRF-TOKEN": token
              },
          method: 'post',
          credentials: "same-origin",
          body: JSON.stringify({
              id : id,
              
          })
      })
      .then((Response) => Response.text())
      .then((data) => {
      document.querySelector('.dynamic_subtotal').innerHTML =data
      })
      .catch(function(error) {
          console.log(error);
      });
      fetch('/getPaymetMethod/'+id, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
            },
        method: 'post',
        credentials: "same-origin",
        body: JSON.stringify({
            id : id,
            
        })
    })
    .then((Response) => Response.text())
    .then((data) => {
    document.querySelector('.payment_method_section').innerHTML =data
    })
    .catch(function(error) {
        console.log(error);
    });
})

// add to cart in single page

$(document).on('click','.atoMainCart', function(e){
  let price = ($(e.target).parent().find('.price h3 b').html());
  let pname = ($(e.target).parent().find('.pname p').text());
  let pimg = ($(e.target).parent().parent().find('.pimg img').attr('src'));
  let cc = ($(e.target).parent().find('.quant_en').text());
  let count = Number(cc);
  let id = ($(e.target).attr('data-pid'));
  function addProduct(){
   let products = [];
   if(getCookie('cart')){
       products = JSON.parse(getCookie('cart'));
   }
   products.push({'productId' :id, "image" : pimg,"price" : price,'pname' :pname,'quant' : count});
   createCookie('cart', JSON.stringify(products));
   $('.cart_item').removeClass('hidden')
   $('.cart_item').html(products.length);
   $('.atoMainCart').html('Product In You Cart');
   $('.atoMainCart').attr("disabled", true)
 }
 addProduct();
 }
 );

 // single page counter 
 $(document).on('click','.single_increment',function(){
    var val = Number($('.quant_en').text())
    if(val >= 1 && val < 5){
      val++;
    }
    $('.quant_en').html(val);
 })
  // single page counter 
  $(document).on('click','.single_decrement',function(){
    var val = Number($('.quant_en').text())
    if(val > 1 && val <= 5){
      val--;
    }
    $('.quant_en').html(val);
 })

 // filter and search product
document.addEventListener('change',function(e){
   if(e.target.classList.contains('section_filter')){
    var minprice=document.getElementById('min_range').value
    var maxprice=document.getElementById('max_range').value
    var sname=document.getElementById('section_name').value
  var checkboxes = document.getElementsByName('brand_val[]');
  var status='ok';
  var vals = "";
  for (var i=0, n=checkboxes.length;i<n;i++) 
  {
      if (checkboxes[i].checked) 
      {
          vals += ","+checkboxes[i].value;
      }
  }
  if (vals) vals = vals.substring(1);

  let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    fetch('/section/filter/'+status, {
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": token
                },
            method: 'post',
            credentials: "same-origin",
            body: JSON.stringify({
               brands:vals,
               min:minprice,
               max:maxprice,
               sname:sname,
            })
        })
        .then((Response) => Response.text())
        .then((data) => {
        document.querySelector('.dynamic_section').innerHTML =data
        })
        .catch(function(error) {
            console.log(error);
        });
  }
})



 
 
