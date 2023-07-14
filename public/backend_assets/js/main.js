let sidebar = document.querySelector('.sidebar');
let menuicon = document.querySelector('.menu_icon');
let logo = document.querySelector('.logo');




// accordion for sub link

let subLink = document.querySelectorAll('.have_sublinks')

for (let i = 0; i < subLink.length; i++) {
    subLink[i].addEventListener('click',(e)=>{
        e.preventDefault()
    })
}
var i;

for (i = 0; i < subLink.length; i++) {
  subLink[i].addEventListener("click", function() {
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
  subcategory[i].addEventListener("click", function(e) {
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

document.querySelector('.image_input').addEventListener('click',function(e){
  document.querySelector('#brand_img').click()
})
document.querySelector('#brand_img').onchange = evt => {
  const [file] = document.querySelector('#brand_img').files
  if (file) {
    document.querySelector('.prev_img').src = URL.createObjectURL(file)
    document.querySelector('.prev_img').classList.remove('hidden')
    document.querySelector('.plus_icon').classList.add('hidden')
  }
}
// preview image 

document.querySelector('.slider_img').addEventListener('click',function(e){
  document.querySelector('#slider_img').click()
})
document.querySelector('#slider_img').onchange = evt => {
  const [file] = document.querySelector('#slider_img').files
  if (file) {
    document.querySelector('.prev_img').src = URL.createObjectURL(file)
    document.querySelector('.prev_img').classList.remove('hidden')
    document.querySelector('.plus_icon').classList.add('hidden')
  }
}