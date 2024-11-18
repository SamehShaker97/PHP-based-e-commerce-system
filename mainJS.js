let menu = document.querySelector(".menu");
let slider = document.querySelector(".slider");
let close = document.querySelector(".bx-x");
menu.addEventListener("click", ()=>{
  slider.classList.add("open");
})
close.onclick = () => {
  slider.classList.remove("open");
}

// Scroll
window.addEventListener("scroll", ()=>{
  const navbar = document.querySelector("header");
  navbar.classList.toggle("scrolling", window.scrollY > 0);
})

// Smooth scroll
window.onscroll = () => {
  if(scrollY > 400){
    document.getElementById("btn").style.display = "block";
  }else{
    document.getElementById("btn").style.display = "none";
  }
}
document.getElementById("btn").onclick = function (){
  scroll({ 
      top:0,
      behavior:'smooth'
  })
} 
