
const buttons = document.querySelectorAll('.button');





buttons.forEach((button,key)=>(button.addEventListener('click', function(e){
    //console.log(e.target, key);
    document.querySelector(`#pre${key + 1}`).classList.toggle('d-none2');

})))