console.log("added js");


function verify(){
    const inputPassword =document.querySelector('#inputPassword')
    const confirmPassword=document.querySelector('#confirmPassword')
    const passwordAlert =document.querySelector('#password')

    if(inputPassword.value !== confirmPassword.value){
        passwordAlert.innerHTML="gooo";
        console.log("Password match");
        passwordAlert.style.display="block"
    }else {
        console.log("Password not match");
        passwordAlert.style.display="none"
    }
}




let fruits=["mango","orange","grape"]
console.log(fruits);

const details=[{
    name:"sameer",
    role:"developer"
}

]
console.log(details);