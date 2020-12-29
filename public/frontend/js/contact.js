
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
    let nameField = document.getElementById('firstname');
    let firstname = document.getElementById('firstname');
    let lastname = document.getElementById('lastname');
    let email = document.getElementById('email');
    let subject = document.getElementById('subject');
    let message = document.getElementById('message');
    let token = document.getElementsByName('_token').value;
    let data ={
        firstname:firstname,
        lastname:lastname,
        email:email,
        subject:subject,
        message:message
    }


    submitButton.addEventListener('click',(e)=>{
        e.preventDefault();
        nameField.focus();
        let token = document.getElementById("contactUsForm").querySelectorAll('input')[0].value;
        console.log(token)
        // const token = document.querySelector("_token").value;
        // console.log(token);
        //  const token = '{{ csrf_token() }}'
        // let group_id = $(this).val();
        fetch('/saveContact', {
            headers: {
                'X-CSRF-TOKEN': token
            },
            method: 'POST',
            credentials: "same-origin",
            body: data
          }).then(function(response){
              console.log('response');
              console.log(response)
                // return response.json();

            }).then(function(json){
     
              // change course
     
            }).catch((error)=>{
     
     
              })
    })