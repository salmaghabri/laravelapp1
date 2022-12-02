const btn=document.getElementById("add-comment")
const comSection=document.getElementById("add-comment")
let x=0
btn.addEventListener('click',()=>{
    x+=1
    comSection.innerHTML+=`<x-comment> </x-comment>`


})
console.log(x);
