let hamburgerMenu = document.getElementById('hamburgerMenu')
let sideMenu = document.getElementById('sideMenu')

hamburgerMenu.addEventListener('click', ()=>{
    sideMenu.classList.remove('invisible')
    sideMenu.classList.remove('opacity-0')
    sideMenu.children[0].classList.remove('translate-x-full')
})

document.addEventListener('click', (e)=>{
    if(!sideMenu.children[0].contains(e.target) && !hamburgerMenu.contains(e.target)){
        sideMenu.classList.add('invisible')
        sideMenu.classList.add('opacity-0')
        sideMenu.children[0].classList.add('translate-x-full')
    }
})