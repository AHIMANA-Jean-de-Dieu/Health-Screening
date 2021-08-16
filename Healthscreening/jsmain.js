function setFormMessage(formElement,type,message){
    const messageElement = formElement.querySelector(",form__message");

    messageElement.textcontent=message;
    messageElement.classList.remove("form__message--success","form__message--error");
    messageElement.classList.add("form__message--${type}");
}

SetFormMesssage(loginForm,"success","you're logged in!");

document.addEventListener("DOMContentLoaded",()=>){
    const loginForm=document.querySelector("#login");
    const createAccountForm=document.querySelector("#createAccount");

    document.querySelector("#linkCreateAccount").addEventListener("click", e=>{
        e.preventDefault();
        loginForm.classList.add("form--hidden");
        createAccountForm.classList.remove("form--hidden");
    });

    
}