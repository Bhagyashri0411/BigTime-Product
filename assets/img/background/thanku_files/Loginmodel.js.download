const loginifor = () => {
    console.log('hii');
    var errortxt = document.querySelector('.error-text2');
    var form = document.querySelector('.lognew form');

    let xhr = new XMLHttpRequest(); //create xml object
    xhr.open("POST", "./Templates/Modals/Loginmodel.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                let data = xhr.response;
                if (data == "success") {
                    window.open('./Dashboard/Dashboard.php', '_self');
                    // alert('success')
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