
//    var map;
//     map = new GMaps({
//         el: '#map',
//         lat: 21.2334329,
//         lng: 72.86372,
//         scrollwheel: false
//     });

//     map.addMarker({
//         lat: 21.2334329,
//         lng: 72.86372,
//         title: 'Marker with InfoWindow',
//         infoWindow: {
//             content: '<p>Advisor Melbourne, Merrick Way, <br>FL 12345 Australia<a href="#"  target="_blank">Themeforest</a></p>'
//         }
//     });    

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
            console.log(error);
              })
    })