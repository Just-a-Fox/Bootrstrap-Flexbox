
let carouselRemove = document.querySelector('#carouselRemove')
let carouselShow = document.querySelector('#carouselShow')
let carouselExample = document.querySelector('#carouselExample')
let carouselContainer = document.querySelector('#carouselContainer')

console.log(carouselExample)
console.log(carouselContainer)

carouselRemove.addEventListener('click', ()=>{
    carouselContainer.classList.add('carousel-removed')
})
carouselShow.addEventListener('click', ()=>{
    carouselContainer.classList.remove('carousel-removed')
})
