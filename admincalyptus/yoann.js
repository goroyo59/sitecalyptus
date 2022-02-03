


const form=document.querySelector('form')
const inputName=document.querySelector('.inputName')
const inputPass=document.querySelector('.inputPass')


let compteur=0;
inputName.disabled=false;
inputPass.disabled=false;

form.addEventListener('submit',(event)=>{// on ecoute le submit sur le form(click sur add)

    event.preventDefault();// empecher le rechargement de la page

    if((inputName.value==="admin") && (inputPass.value==="admin")){
        inputName.value="";
        inputPass.value="";
    
        location.assign('./ajou-supp-yoann.html')
    }
    else{
        alert("erreur verifier le nom d'utilisateur ou le mot de passe")
        inputName.value="";
        inputPass.value="";

        compteur++;
        if(compteur===3){
            inputName.disabled=true;
            inputPass.disabled=true;
            const myTimer=setTimeout(() => {
                inputName.disabled=true
                compteur=0
                inputName.disabled=false
                inputPass.disabled=false
                console.log(myTimer)
            }, 3000);
        }
    }
});
