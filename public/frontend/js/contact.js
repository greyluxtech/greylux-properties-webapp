  window.onload= function(){
    let submitButton = document.getElementById('submit');

    submitButton.addEventListener('click',(e)=>{
        e.preventDefault();
       
        let token = document.getElementById("contactUsForm").querySelectorAll('input')[0].value;
        let firstname = document.getElementById('firstname').value;
        let lastname = document.getElementById('lastname').value;
        let email = document.getElementById('email').value;
        let subject = document.getElementById('subject').value;
        let message = document.getElementById('message').value;
        let number = document.getElementById('number').value;

        if(firstname === '' || lastname === '' || email ==='' || subject ==='' || message ==='' || number === '' ){
            let alerts = document.getElementById('alerts');
            let dangeralerts = document.getElementById('dangeralerts');
            dangeralerts.style.display = 'block';
            return(null);
        }

        let formD = new FormData();
        formD.append('firstname',firstname)
        formD.append('lastname',lastname)
        formD.append('email',email)
        formD.append('subject',subject)
        formD.append('message',message)
        formD.append('number',number)

        fetch('/saveContact', {
            headers: {
                'X-CSRF-TOKEN': token
            },
            method: 'POST',
            credentials: "same-origin",
            body:formD
          }).then(res=>res.json()).then(data=>{
            let alerts = document.getElementById('alerts');
            let dangeralerts = document.getElementById('dangeralerts');
            dangeralerts.style.display = 'none';
            alerts.style.display='block';
            return(null);
          }).catch((error)=>{
            let dangeralerts = document.getElementById('dangeralerts');
            dangeralerts.style.display = 'block';
            return null;
              })
    })
  }

    