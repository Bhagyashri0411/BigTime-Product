let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

// window.onscroll = () =>{
//    menu.classList.remove('fa-times');
//    navbar.classList.remove('active');
// };

// var swiper = new Swiper(".home-slider", {
//   loop:true,
//   navigation: {
//      nextEl: ".swiper-button-next",
//      prevEl: ".swiper-button-prev",
//   },
// });

var swiper = new Swiper(".reviews-slider", {
  //  grabCursor:true,
   loop:true,
   autoHeight:true,
   spaceBetween: 25,
  //  speed: 400,
  //  allowTouchMove: true,
   autoplay: 
   {
     delay: 4000,
   },
   breakpoints: {
      0: {
        slidesPerView: 1,
      },
      450: {
         slidesPerView: 2,
       },
      700: {
        slidesPerView: 3,
      },
   
   }
});

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
const investinquiry =()=>{
  var form = document.querySelector('.contact-form form');
  let username = $('#name').val();
  let useremail = $('#email').val();
  let userphone = $('#phone').val();
  let userserviceCat = $('#type_big').val();
  let investservice = $('#servicename').val();
  let investLimit =$('#limitandmsg').val();
  let loanService = $('#loginname').val();
  let loanMsg = $('#msg').val();

  if (userserviceCat == 'invest') {
    var JsonInvest = {'name': username, 'email': useremail, 'phone': userphone, 'servicetype':userserviceCat, 'servicename':investservice , 'investLimit': investLimit}
  }
  else if (userserviceCat == 'loan') {
    var JsonInvest = {'name': username, 'email': useremail, 'phone': userphone, 'servicetype':userserviceCat, 'servicename':loanService , 'investLimit': loanMsg}
  }

  $.post('./php/inquiry.php',JsonInvest, function(data){
      $('#result').html(data);
      if (data == 'warning') {
        alert('invest')
      }
      else if (data== 'warning1')  {
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