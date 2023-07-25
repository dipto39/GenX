let sidebar = document.querySelector('.sidebar');
let menuicon = document.querySelector('.menu_icon');
let logo = document.querySelector('.logo');




// accordion for sub link

let subLink = document.querySelectorAll('.have_sublinks')

for (let i = 0; i < subLink.length; i++) {
  subLink[i].addEventListener('click', (e) => {
    e.preventDefault()
  })
}
var i;

for (i = 0; i < subLink.length; i++) {
  subLink[i].addEventListener("click", function () {
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

// show subcategory
let subcategory = document.querySelectorAll('.down_icon')

var i;

for (i = 0; i < subcategory.length; i++) {
  subcategory[i].addEventListener("click", function (e) {
    this.classList.toggle("active");
    var panel = e.target.parentNode.parentNode.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

// preview image 

// document.querySelector('.image_input').addEventListener('click', function (e) {
//   document.querySelector('#brand_img').click()
// })
// document.querySelector('#brand_img').onchange = evt => {
//   const [file] = document.querySelector('#brand_img').files
//   if (file) {
//     document.querySelector('.prev_img').src = URL.createObjectURL(file)
//     document.querySelector('.prev_img').classList.remove('hidden')
//     document.querySelector('.plus_icon').classList.add('hidden')
//   }
// }
// preview image 

document.addEventListener('click', function (e) {
  if (e.target.classList.contains('image_input')) {
    document.querySelector('#prev_input_img').click()
  }

})
document.onchange = evt => {
  if (evt.target.id == 'prev_input_img') {
    const [file] = document.querySelector('#prev_input_img').files
    if (file) {
      document.querySelector('.prev_img').src = URL.createObjectURL(file)
      document.querySelector('.prev_img').classList.remove('hidden')
      document.querySelector('.plus_icon').classList.add('hidden')
    }
  }

}

// Open setting Tab

function openStab(evt, tname) {
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("setting_btn");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].classList.remove('active')
    }
if(tname == 'site_details'){
  document.getElementById(tname).style.display = "block";
  document.getElementById('up_pass').style.display = "none";
  evt.currentTarget.className += " active";
}
if(tname == 'up_pass'){
  document.getElementById(tname).style.display = "block";
  document.getElementById('site_details').style.display = "none";
  evt.currentTarget.className += " active";
}

}

// prev all input image

let prevbox=document.querySelectorAll('.prev_box');
let img_inputs=document.querySelectorAll('.img_input');
prevbox.forEach((e)=>{
  e.addEventListener('click',function(e){
    this.querySelector('.img_input').click();
  })
})
img_inputs.forEach((e)=>{
  
  e.addEventListener('change',function(e){
    const [file] =e.target.files;
    if(file){
      this.parentNode.querySelector('img').src=URL.createObjectURL(file)
      this.parentNode.querySelector('span').style.display ='none'
    }
    
  })
})



document.addEventListener('change', function (e) {
// Change Brand Status

  if (e.target.id == 'brand_status') {
    let id = e.target.dataset.attr;
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    if (e.target.checked) {
      fetch('/admin/brands/status/'+id, {
              headers: {
                  "Content-Type": "application/json",
                  "Accept": "application/json, text-plain, */*",
                  "X-Requested-With": "XMLHttpRequest",
                  "X-CSRF-TOKEN": token
                  },
              method: 'post',
              credentials: "same-origin",
              body: JSON.stringify({
                  inactive:id
              })
          })
          .then((Response) => Response.text())
          .then((data) => {
             console.log(data)
          })
          .catch(function(error) {
              console.log(error);
          });
    } else {
      var obj = {
        inactive : id

      }
      var jsonData = JSON.stringify(obj)
      fetch('/admin/brands/status/'+id, {
              headers: {
                  "Content-Type": "application/json",
                  "Accept": "application/json, text-plain, */*",
                  "X-Requested-With": "XMLHttpRequest",
                  "X-CSRF-TOKEN": token
                  },
              method: 'post',
              credentials: "same-origin",
              body: JSON.stringify({
                  active:id
              })
          }).then((Response) => Response.text())
          .then((data) => {
             console.log(data)
          })
          .catch(function(error) {
              console.log(error);
          });
    }
  }
// Change About Status

  if (e.target.id == 'about_status') {
    let id = e.target.dataset.attr;
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    if (e.target.checked) {
      fetch('/admin/about/status/'+id, {
              headers: {
                  "Content-Type": "application/json",
                  "Accept": "application/json, text-plain, */*",
                  "X-Requested-With": "XMLHttpRequest",
                  "X-CSRF-TOKEN": token
                  },
              method: 'post',
              credentials: "same-origin",
              body: JSON.stringify({
                  inactive:id
              })
          })
          .then((Response) => Response.text())
          .then((data) => {
            console.log(data)
          })
          .catch(function(error) {
              console.log(error);
          });
    } else {
      var obj = {
        inactive : id

      }
      var jsonData = JSON.stringify(obj)
      fetch('/admin/about/status/'+id, {
              headers: {
                  "Content-Type": "application/json",
                  "Accept": "application/json, text-plain, */*",
                  "X-Requested-With": "XMLHttpRequest",
                  "X-CSRF-TOKEN": token
                  },
              method: 'post',
              credentials: "same-origin",
              body: JSON.stringify({
                  active:id
              })
          }).then((Response) => Response.text())
          .then((data) => {
            console.log(data)
          })
          .catch(function(error) {
              console.log(error);
          });
    }
  }

// Change product Status

  if (e.target.classList.contains('product_status')) {
    let id = e.target.dataset.attr;
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    if (e.target.checked) {
      fetch('/admin/product/status/'+id, {
              headers: {
                  "Content-Type": "application/json",
                  "Accept": "application/json, text-plain, */*",
                  "X-Requested-With": "XMLHttpRequest",
                  "X-CSRF-TOKEN": token
                  },
              method: 'post',
              credentials: "same-origin",
              body: JSON.stringify({
                  inactive:id
              })
          })
          .then((Response) => Response.text())
          .then((data) => {
            console.log(data)
          })
          .catch(function(error) {
              console.log(error);
          });
    } else {
      var obj = {
        inactive : id

      }
      var jsonData = JSON.stringify(obj)
      fetch('/admin/product/status/'+id, {
              headers: {
                  "Content-Type": "application/json",
                  "Accept": "application/json, text-plain, */*",
                  "X-Requested-With": "XMLHttpRequest",
                  "X-CSRF-TOKEN": token
                  },
              method: 'post',
              credentials: "same-origin",
              body: JSON.stringify({
                  active:id
              })
          }).then((Response) => Response.text())
          .then((data) => {
            console.log(data)
          })
          .catch(function(error) {
              console.log(error);
          });
    }
  }
// filter and search product
  
  if(e.target.classList.contains('filter_input')){
    var select = select_f.value;
    var brand = select_brand.value;
    var cate = select_category.value;
    var sval = search_product.value;
    var faval = "fads";
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      fetch('/admin/product/filter/'+faval, {
              headers: {
                  "Content-Type": "application/json",
                  "Accept": "application/json, text-plain, */*",
                  "X-Requested-With": "XMLHttpRequest",
                  "X-CSRF-TOKEN": token
                  },
              method: 'post',
              credentials: "same-origin",
              body: JSON.stringify({
                  select : select,
                  brand : brand,
                  cate : cate,
                  sval : sval
              })
          })
          .then((Response) => Response.text())
          .then((data) => {
          document.querySelector('.ptbody').innerHTML =data
          })
          .catch(function(error) {
              console.log(error);
          });
    }

// Change coupon Status

  if (e.target.classList.contains('coupon_status')) {
    let id = e.target.dataset.attr;
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    if (e.target.checked) {
      fetch('/admin/coupon/status/'+id, {
              headers: {
                  "Content-Type": "application/json",
                  "Accept": "application/json, text-plain, */*",
                  "X-Requested-With": "XMLHttpRequest",
                  "X-CSRF-TOKEN": token
                  },
              method: 'post',
              credentials: "same-origin",
              body: JSON.stringify({
                  inactive:id
              })
          })
          .then((Response) => Response.text())
          .then((data) => {
            console.log(data)
          })
          .catch(function(error) {
              console.log(error);
          });
    } else {
      var obj = {
        inactive : id

      }
      var jsonData = JSON.stringify(obj)
      fetch('/admin/coupon/status/'+id, {
              headers: {
                  "Content-Type": "application/json",
                  "Accept": "application/json, text-plain, */*",
                  "X-Requested-With": "XMLHttpRequest",
                  "X-CSRF-TOKEN": token
                  },
              method: 'post',
              credentials: "same-origin",
              body: JSON.stringify({
                  active:id
              })
          }).then((Response) => Response.text())
          .then((data) => {
            console.log(data)
          })
          .catch(function(error) {
              console.log(error);
          });
    }
  }

// Allow Cash On Delevary
  if (e.target.classList.contains('cod_change')) {
    let id = e.target.dataset.attr;
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    if (e.target.checked) {
      fetch('/admin/shipping/allowcod/'+id, {
              headers: {
                  "Content-Type": "application/json",
                  "Accept": "application/json, text-plain, */*",
                  "X-Requested-With": "XMLHttpRequest",
                  "X-CSRF-TOKEN": token
                  },
              method: 'post',
              credentials: "same-origin",
              body: JSON.stringify({
                  inactive:id
              })
          })
          .then((Response) => Response.text())
          .then((data) => {
            console.log(data)
          })
          .catch(function(error) {
              console.log(error);
          });
    } else {
      var obj = {
        inactive : id

      }
      var jsonData = JSON.stringify(obj)
      fetch('/admin/shipping/allowcod/'+id, {
              headers: {
                  "Content-Type": "application/json",
                  "Accept": "application/json, text-plain, */*",
                  "X-Requested-With": "XMLHttpRequest",
                  "X-CSRF-TOKEN": token
                  },
              method: 'post',
              credentials: "same-origin",
              body: JSON.stringify({
                  active:id
              })
          }).then((Response) => Response.text())
          .then((data) => {
            console.log(data)
          })
          .catch(function(error) {
              console.log(error);
          });
    }
  }

// Change provider Status 

if (e.target.classList.contains('provider_change')) {
  let id = e.target.dataset.attr;
  let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  if (e.target.checked) {
    fetch('/admin/provider/status/'+id, {
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": token
                },
            method: 'post',
            credentials: "same-origin",
            body: JSON.stringify({
                inactive:id
            })
        })
        .then((Response) => Response.text())
        .then((data) => {
          console.log(data)
        })
        .catch(function(error) {
            console.log(error);
        });
  } else {
    var obj = {
      inactive : id

    }
    var jsonData = JSON.stringify(obj)
    fetch('/admin/provider/status/'+id, {
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": token
                },
            method: 'post',
            credentials: "same-origin",
            body: JSON.stringify({
                active:id
            })
        }).then((Response) => Response.text())
        .then((data) => {
          console.log(data)
        })
        .catch(function(error) {
            console.log(error);
        });
  }
}
// Change Slider Status 

if (e.target.classList.contains('slider_change')) {
  let id = e.target.dataset.attr;
  let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  if (e.target.checked) {
    fetch('/admin/slider/status/'+id, {
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": token
                },
            method: 'post',
            credentials: "same-origin",
            body: JSON.stringify({
                inactive:id
            })
        })
        .then((Response) => Response.text())
        .then((data) => {
          console.log(data)
        })
        .catch(function(error) {
            console.log(error);
        });
  } else {
    var obj = {
      inactive : id

    }
    var jsonData = JSON.stringify(obj)
    fetch('/admin/slider/status/'+id, {
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": token
                },
            method: 'post',
            credentials: "same-origin",
            body: JSON.stringify({
                active:id
            })
        }).then((Response) => Response.text())
        .then((data) => {
          console.log(data)
        })
        .catch(function(error) {
            console.log(error);
        });
  }
}
// Change Service Status 

if (e.target.classList.contains('service_change')) {
  let id = e.target.dataset.attr;
  let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  if (e.target.checked) {
    fetch('/admin/service/status/'+id, {
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": token
                },
            method: 'post',
            credentials: "same-origin",
            body: JSON.stringify({
                inactive:id
            })
        })
        .then((Response) => Response.text())
        .then((data) => {
          console.log(data)
        })
        .catch(function(error) {
            console.log(error);
        });
  } else {
    var obj = {
      inactive : id

    }
    var jsonData = JSON.stringify(obj)
    fetch('/admin/service/status/'+id, {
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": token
                },
            method: 'post',
            credentials: "same-origin",
            body: JSON.stringify({
                active:id
            })
        }).then((Response) => Response.text())
        .then((data) => {
          console.log(data)
        })
        .catch(function(error) {
            console.log(error);
        });
  }
}
})



