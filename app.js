let checkbox = document.querySelector("input[name=checkbox]");
let sbmt = document.querySelector("input[name=submit]");
let noAccept = document.getElementById("result").innerHTML="Proszę zaakceptować regulamin.";
document.getElementById("result").style.color = 'red';

let phoneNumber = document.querySelector("phoneNumber");

let psswrd = document.getElementById("pass").value;
let cnfmPassword = document.getElementById("cnfmPassword").value;
let passMessage = document.getElementById("passMessage");

//TELEFON

// function validatePhoneNumber(phoneNumber) {
//   let regex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/;
//   if (regex.test(phoneNumber)) {
//     return true;
//   } else {
//     return false;
//   }
// }

if (document.querySelector('input[name="sex"]')) {
    document.querySelectorAll('input[name="sex"]').forEach((elem) => {
      elem.addEventListener("change", function(event) {
        let item = event.target.value;
      });
    });
  }

function init() { 
    document.getElementById("result").style.color = 'red';
  }
    checkbox.addEventListener('click', function() {
        if (!this.checked) {
            let noAccept = document.getElementById("result").innerHTML="Proszę zaakceptować regulamin.";
        } else {
            let Accept = document.getElementById("result").innerHTML="";
        }
});

//Czerowe - HASŁA NIEZGODNE

// function pass() { 
//    document.getElementById("passMessage").style.color = 'red';
// }
//   sbmt.addEventListener('click', function() {
//       if (!this.checked) {
//           passNoAccept = document.getElementById("passMessage").innerHTML="Hasła nie są zgodne!";
//       } else {
//           let passAccept = document.getElementById("passMessage").innerHTML='';
//       }
// });

