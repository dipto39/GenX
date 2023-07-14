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
  if(localStorage.getItem('products')){
      products = JSON.parse(localStorage.getItem('products'));
  }
  if(products.length == 0){
  }else{
    $('.cart_item').removeClass('hidden')
    $('.cart_item').html(products.length)
  }
}
hmc();

// showing cart option 

$('.cart_icon').on("click",(e)=>{
  $('.cart_sction').show();
  $('.cart_sidebar').animate({right: '0'})
  show_cart_item()
})

// show cart items
function show_cart_item(){
  let products = [];
  if(localStorage.getItem('products')){
      products = JSON.parse(localStorage.getItem('products'));
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

    products.forEach((e)=>{
      data +=`<div class="single_item">
      <div class="item_img">
          <img src="${e.image}" alt="${e.image}">
      </div>
      
      <div class="details">
          <a class="pname" href="">${e.pname}</a>
          <p class="price text-ThemeColor"><span>$</span>${e.price}</p>
      </div>
      <div class="action">
          <button class="increment">+</button>
          <p>1</p>
          <button class="decremnet">-</button>
      </div>
      <div class="rmcart" data-pid="${e.productId}">
          <i class="fa-regular fa-trash-can"></i>
      </div>
  </div>`
    })
    data += ` </div>
                    
    <div class="fill_footer">
        <button class="chekout">Chekout Now (<span> $ 100.333</span>)</button>
        <button class="view_cart">View Cart</button>
    </div>

</div>`
    $('.cart_body').html(data);
  }

}



// add to cart product

$(document).on('click','.atoCart', function(e){
 let price = ($(e.target).parent().parent().parent().find('.price span').html());
 let pname = ($(e.target).parent().parent().parent().find('.ptitle a').text());
 let pimg = ($(e.target).parent().parent().parent().parent().find('img').attr('src'));
 let id = ($(e.target).parent().attr('data-pid'));
 function addProduct(){
  let products = [];
  if(localStorage.getItem('products')){
      products = JSON.parse(localStorage.getItem('products'));
  }
  products.push({'productId' :id, "image" : pimg,"price" : price,'pname' :pname});
  localStorage.setItem('products', JSON.stringify(products));
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
    let storageProducts = JSON.parse(localStorage.getItem('products'));
    let products = storageProducts.filter(product => product.productId !== productId );
    localStorage.setItem('products', JSON.stringify(products));
}
removeProduct(id);
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