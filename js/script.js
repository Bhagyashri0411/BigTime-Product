let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
};

// window.onscroll = () =>{
//    menu.classList.remove('fa-times');
//    navbar.classList.remove('active');
// };

var swiper = new Swiper(".home-slider", {
  direction: 'horizontal',
  loop: true,
  loopedSlides: 50,
  observer: true,
  obsereParents: true,
  slidesPerView: 1,
  spaceBetween: 30,

  // If we need pagination
  pagination: {
    el: '.slider__pagination',
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    prevEl : '.owl-prev',
    nextEl: '.owl-next',
  },
});
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  // responsive: {
  //   0: {
  //     items: 1
  //   },
  //   600: {
  //     items: 3
  //   },
  //   1000: {
  //     items: 5
  //   }
  // }
})

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

// loadMoreBtn.onclick = () =>{
//    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
//    for (var i = currentItem; i < currentItem + 3; i++){
//       boxes[i].style.display = 'inline-block';
//    };
//    currentItem += 3;
//    if(currentItem >= boxes.length){
//       loadMoreBtn.style.display = 'none';
//    }
// }
const investinquiry = () => {
  var form = document.querySelector('.contact-form form');
  let username = $('#name').val();
  let useremail = $('#email').val();
  let userphone = $('#phone').val();
  let userserviceCat = $('#type_big').val();
  let investservice = $('#servicename').val();
  let investLimit = $('#limitandmsg').val();
  let loanService = $('#loginname').val();
  let loanMsg = $('#msg').val();

  if (userserviceCat == 'invest') {
    var JsonInvest = { 'name': username, 'email': useremail, 'phone': userphone, 'servicetype': userserviceCat, 'servicename': investservice, 'investLimit': investLimit }
  }
  else if (userserviceCat == 'loan') {
    var JsonInvest = { 'name': username, 'email': useremail, 'phone': userphone, 'servicetype': userserviceCat, 'servicename': loanService, 'investLimit': loanMsg }
  }

  $.post('./php/inquiry.php', JsonInvest, function (data) {
    $('#result').html(data);
    if (data == 'warning') {
      alert('invest')
    }
    else if (data == 'warning1') {
      alert('loan')
    }
  })

  // let xhr = new XMLHttpRequest();
  // xhr.open('POST','./php/inquiry.php', true);
  // xhr.onload =() =>{
  //   if (xhr.readyState === XMLHttpRequest.DONE) {
  //     if (xhr.status == 200) {
  //       let data = xhr.response;
  //       if (data == "Success") {
  //         alert('successFull')
  //       }
  //       else{
  //         alert('checldncdm')
  //       }
  //     }

  //   }
  // }

  // let fordata = new FormData(form);
  // xhr.send(fordata);
}
// $('.counterss').counterUp({
//   delay: 10,
//   time: 1000
// });