
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
        let data ={
            'firstname':firstname,
            'lastname':lastname,
            'email':email,
            'subject':subject,
            'message':message
        }

        fetch('/saveContact', {
            headers: {
                'X-CSRF-TOKEN': token
            },
            method: 'POST',
            credentials: "same-origin",
            body:JSON.stringify(data)
          }).then(res=>res.json()).then(data=>{
              console.log(data);
          }).catch((error)=>{
            console.log(error);
              })
    })