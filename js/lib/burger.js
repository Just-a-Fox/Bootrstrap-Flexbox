let burger = document.querySelector('#burger')
let burgerMenu = document.querySelector('#burgerMenu')
let isOpen = false
burger.addEventListener('click', ()=>{
    burgerMenu.classList.toggle('burger-menu--hidden')
    isOpen = !isOpen
    if(isOpen) {
        document.body.style.overflow = 'hidden'
        return
    }
    document.body.style.overflow = 'visible'
})