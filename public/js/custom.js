
// Aos
AOS.init();



$(window).on("load",function(){
  setTimeout(() => {
      $(".lodding_1").fadeOut(1000);
    }, 3600);
  });
  


  
  $('.drop1').click(function (){
    $(this).next().slideToggle();
  })
  
  $('.drop2').click(function (){
    $(this).next().slideToggle();
  })

  $('#slider_details').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    responsiveClass:true,
    rtl:true,
    items:4,
    dots:false,
    autoplay:true,
    responsive:{
        0:{
            items:1,
            
        },
        600:{
            items:2,
        },
        1000:{
            items:4,
        }
    }
  })
  
  




  
  //silder-index
  $('#slider_1').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    items: 1, 
    rtl: true,
    // autoplay: true,
    dots: false,
    responsiveClass:true,
    responsive:{
      1400: {
        item:1,
      }
    }
  });
  
    //silder-index
    $('#slider_2').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      items: 1, 
      rtl: true,
      autoplay: true,
      dots: true,
      responsiveClass:true,
      responsive:{
        1400: {
          item:1,
        }
      }
    });

      
    //silder-index
    $('#slider_05').owlCarousel({
      loop: false
      ,
      margin: 0,
      nav: false,
      items: 1, 
      rtl: true,
      autoplay: true,
      dots: true,
      responsiveClass:true,
      responsive:{
        1400: {
          item:1,
        }
      }
    });
  
  
      
    //silder-index
    $('#slider_3').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      items: 1, 
      rtl: true,
      autoplay: true,
      dots: false,
      responsiveClass:true,
      responsive:{
        1400: {
          item:1,
        }
      }
    });

    $('.slider-1').each(function(){

      $(this).owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        items: 1, 
        rtl: true,
        // autoplay: true,
        dots: true,
        animateOut: '',
        responsiveClass:true,
        responsive:{
          1400: {
            item:1,
          }
        }
      });
    
    });


    
// slider detalis
  
$('.slider-main').slick({
  slidesToShow: 1,
  arrows: false,
  asNavFor: '.slider-nav',
  vertical: true,
  verticalSwiping: true,
  centerMode: true
});

$('.slider-nav').slick({
  slidesToShow: 4,
  asNavFor: '.slider-main',
  vertical: true,
  focusOnSelect: true,
  autoplay: true,
  centerMode: true
});
//input validation 
(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();





$(".title-common-questions").click(function () {
  $(this).parent().find(".show_text_common_questions").slideToggle();
  $(this).toggleClass("questions1")
});  


//scorll
$('#scroll-1').click(function() {
    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top - 100
    }, 1000);
    return false;
  });
  
//scorll
$('#scroll-2').click(function() {
  $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top - 100
  }, 2000);
  return false;
});



$("#times-ican").click(function() {
  $(this).toggleClass("active");
  $("#menu-div").toggleClass("active")

})

var $winl = $(window); // or $box parent container
var $boxl = $("#menu-div, #times-ican");
$winl.on("click.Bst", function(event) {
  if (
      $boxl.has(event.target).length === 0 && //checks if descendants of $box was clicked
      !$boxl.is(event.target) //checks if the $box itself was clicked
  ) {
      $("#menu-div").removeClass("active")
      $("#times-ican").removeClass("active")
  }
});






var TxtType = function (el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 5) || 1000;
  this.txt = "";
  this.tick();
  this.isDeleting = false;
};
TxtType.prototype.tick = function () {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];
  if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
  }
  this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";
  var that = this;
  var delta = 200 - Math.random() * 100;
  if (this.isDeleting) {
      delta /= 2;
  }
  if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
  } else if (this.isDeleting && this.txt === "") {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
  }
  setTimeout(function () {
      that.tick();
  }, delta);
};
window.onload = function () {
  var elements = document.getElementsByClassName("typewrite");
  for (var i = 0; i < elements.length; i++) {
      var toRotate = elements[i].getAttribute("data-type");
      var period = elements[i].getAttribute("data-period");
      if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
      }
  }
};


$(".language span").click(function(){
  $(".language ul").slideToggle();
});




$(".romve_cart_page").click(function() {
  $(this).parent().fadeOut();
});

$(".click_my_order").click(function() {
  $(this).next().slideToggle()
});



// preview image 1
function readURL(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {

        $('#preview').attr('src', e.target.result);

      }
      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

$("#user-file").change(function() {

    readURL(this);

});



if ($('#datepicker').length) {
  jQuery(document).ready(function () {
    jQuery('#datepicker').datepicker({
        format: 'dd-mm-yyyy',
        startDate: '+1d'
    });
  });
}


// document.getElementById('output').innerHTML = location.search;
// $(".chosen-select").chosen();


