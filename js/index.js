const button = document.querySelector(".transferBtn");

button.addEventListener("click" , (e) =>{
  
  e.preventDefault;
  button.classList.add("animate");
  setTimeout(() => {
    button.classList.remove("animate");
  } ,3000);
});