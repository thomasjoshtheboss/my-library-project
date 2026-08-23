
const upload_book=document.querySelector(".fake-upload")
upload_book.addEventListener("click",function () {

    const file=document.querySelector(".file")
    file.click()

})


const picture=document.querySelector('.choose-pic')
picture.addEventListener('click',function () {
    
const pic=document.querySelector(".pic")
pic.click()

})


const pic=document.querySelector(".pic")
pic.addEventListener('change',function () {
  
let file= this.files[0];

let imagesc=document.querySelector('.preview')

imagesc.style.display="block"
imagesc.src=URL.createObjectURL(file)
})
 


 let chose_book=document.querySelector(".file")
chose_book.addEventListener("change",function () {

let disname=document.querySelector(".diplay-bookname")
disname.innerHTML=this.files[0].name

}) 



