let BOUTON=document.GetElementById("bouton")
let MENU=document.GetElementById("menu")


BOUTON.addEventListener('click' , () =>{
    BOUTON.style.display="none"
    MENU.classlist.add("showX")
})