let inputName = document.querySelector('#name');
let inputEmail = document.querySelector('#email');
let inputPasscode = document.querySelector('#passcode');
let submitBtn = document.querySelector('#submit-btn');
let errorMsg = document.querySelector('#error-msg');

    submitBtn.addEventListener('click', e=> {
        errorMsg.innerText = "";
        //Validate if full name
        if(inputName.value.includes(" ") == false || inputName.value == "") {
            e.preventDefault();
            inputName.focus();
            errorMsg.innerText = "Please enter full name and surname";
        }
        //Validate email
        if(inputEmail.value.includes("@") == false || inputEmail.value.includes(".com") == false ||
            inputEmail.value.length < 5){
                e.preventDefault();
                inputEmail.focus();
                errorMsg.innerText = "Invalid email";
        }

        //Validate passcode
        if(inputPasscode.value.includes(/[0-9]/) == false  
        /*inputPasscode.value.includes(/^[a-zA-Z0-9!@#\$%\^\&*\)\(+=._-]+$/) == false*/) {
            e.preventDefault();
            inputPasscode.focus();
            errorMsg.innerText = "passcode must contain atleast one symbol and number";
        }
        if(inputPasscode.value.length < 8) {
            e.preventDefault();
            inputPasscode.focus();
            errorMsg.innerText = "Passcode must have atleast 8 letter";
        }
    })