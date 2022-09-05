
function FunStart(){

    var form = document.querySelector('.new form')
    let xhr = new XMLHttpRequest();
    xhr.open('POST', "./Templates/Modals/Contact.php", true);
    xhr.onload=()=>{
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                let data = xhr.response;
                if (data == "Your Information is Successfully added.") {
                    var x = document.getElementById("toast")
                    x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
                    document.getElementById('resetconn').reset();
                }
                else{
                    alert('Please Check')
                }
            }
        }
    }

    let fromcondata = new FormData(form);
    xhr.send(fromcondata);
}