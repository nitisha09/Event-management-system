function setFormMessage(formElement, type, message){
    const messageElement=formElement.querySelector(".form_message");
    messageElement.textContent=message;
    messageElement.classList.remove("form_message_success","form_message_error");
    messageElement.classList.add(`form_message_${type}`);
}
function setInputError(inputElement, message){
    inputElement.classList.add("form_input-error");
    inputElement.parentElement.querySelector(".form_input-error-message").textContent=message;
}
function clearInputError(inputElement){
    inputElement.classList.remove("form_input-error");
    inputElement.parentElement.querySelector(".form_input-error-message").textContent="";
}
document.addEventListener("DOMContentLoaded",()=>{
    const loginForm = document.querySelector("#login");
    const createAccountForm = document.querySelector("#createAccount");
    const createPw = document.querySelector("#create_pw");
    const confirmPw = document.querySelector("#confirm_pw");
    const submitBtn = document.querySelector("#button");

    document.querySelector("#linkCreateAccount").addEventListener("click", e =>{
        e.preventDefault();
        loginForm.classList.add("form--hidden");
        createAccountForm.classList.remove("form--hidden");
    });
    document.querySelector("#linkLogin").addEventListener("click", e =>{
        e.preventDefault();
        loginForm.classList.remove("form--hidden");
        createAccountForm.classList.add("form--hidden");
    });
    document.querySelectorAll(".form_input").forEach(inputElemen =>{
        inputElemen.addEventListener("blur",e =>{
            if(e.target.id==="signupnumber" && e.target.value.length > 0 && e.target.value.length<10){
                setInputError(inputElemen,"Phone number must be atleast of 10 digits");
            }
        });
        inputElemen.addEventListener("input",e=>{
            clearInputError(inputElemen);
        });
    });
    document.querySelectorAll(".form_input").forEach(inputElemen =>{
        inputElemen.addEventListener("blur",e =>{
            if(e.target.id==="create_pw" && e.target.value.length > 0 && e.target.value.length<8){
                setInputError(inputElemen,"Password must be atleast of 8 digits");
            }
        });
        inputElemen.addEventListener("input",e=>{
            clearInputError(inputElemen);
        });
    });
});