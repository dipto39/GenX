  
  /*for slick slider*/
  
  
  $('.slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots : true,
  arrows: true,
  autoplay:true,
  autoplaySpeed:2500,
  fade:true,
  prevArrow: '.left',
  nextArrow: '.right'
  
 });

/*for venobox*/

new VenoBox();

/*for venobox*/

   lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })

/* counter up js */
/* first add waypoints.js */
$('.counter').counterUp({
    delay: 10,
    time: 1000
});

// typewriter 
{/* <div class="animate-typing"
     data-type-speed="200"
     data-type-delay="200"
     data-remove-speed="50"
     data-remove-delay="500"
      data-animate-loop="true"
      data-cursor-speed="700">
     Text To Animate
</div> */}
