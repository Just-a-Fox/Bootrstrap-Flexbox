let header = document.querySelector('#header')

document.body.style.paddingTop = '85px'

window.addEventListener('scroll', ()=>{
    if(window.scrollY >= 2){
        header.classList.add('header--sticky')
        document.body.style.paddingTop = '70px'
        return
    }
    header.classList.remove('header--sticky')
    document.body.style.paddingTop = '85px'
    console.log(window.scrollY)
})