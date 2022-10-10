// // Main Code

var form = document.querySelector('.header-model form'),
    submitbtn = form.querySelector('.sumbit input'),
    errortxt = document.querySelector('.error-text');

form.onsumbit = (e) => {
    e.preventDefault();
}

submitbtn.onclick = () => {
    //start 

    let xhr = new XMLHttpRequest(); //create xml object
    xhr.open("POST", "./Templates/Modals/Inquiry.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                let data = xhr.response;
                if (data == "Data added successfully.") {
                    document.getElementById('flip-card-btn-turn-to-back').style.visibility = 'visible';
                    document.getElementById('flip-card-btn-turn-to-front').style.visibility = 'visible';
                    document.getElementById('flip-card').classList.toggle('do-flip');
                    document.getElementById('resetdata').reset();
                }
                else {
                    errortxt.textContent = data;
                    errortxt.style.display = 'block';
                }
            }
        }
    }

    // send this through ajax
    let formData = new FormData(form);
    xhr.send(formData);
}

// document.getElementById('flip-card-btn-turn-to-back').onclick = function () {
//     document.getElementById('flip-card').classList.toggle('do-flip');
// };

function changeflip() {
    document.getElementById('openmodel').style.display = "none";
    document.getElementById('flip-card').classList.toggle('do-flip');
    document.getElementById('resetdata').reset();
};



function closediv() {
    document.getElementById('openmodel').style.display = "none";
}


// function usersubdata() {
//     console.log("h");
//     var usertext = $('#usertextfield').val();
//     var usermail = $('#usermailfield').val();
//     var usermobile = $('#usermobilefield').val();
//     var usermes = $('#usermesfield').val();

//     if (usertext == '', usermail == '', usermobile == '', usermes == '') {
//         document.getElementById('messages').innerText = "Please Enter The Values";
//         document.getElementById('messhow').style.display = 'block';
//     }
//     else {
//         var myData = { 'id': null, 'user_name': usertext, 'mail': usermail, 'mob_no': usermobile, 'message': usermes }

//         $.ajax({
//             type: "post",
//             headers: {
//                 "Content-Type": "application/json",
//             },
//             data: JSON.stringify(myData),
//             url: "http://localhost:8090/dash/postData",
//             success: function (msg) {
//                 if (msg == "Inserted Sucessfully") {
//                     document.getElementById('messages').innerText = "Successful";
//                     document.getElementById('messhow').style.display = 'block';
//                     // document.getElementById('openmodel').style.display = "none";
//                     document.getElementById('resetourdata').reset();

//                 }
//                 else {
//                     document.getElementById('messages').innerText = "Sucessfull Failed";
//                 }
//             }
//         })

//     }

// }