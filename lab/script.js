const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnlog = document.querySelector('.btn2');
const iconclose = document.querySelector('.icon-closed');
const moveBtn = document.getElementById("submit");
const inputs = document.querySelector(".input"),
  button = document.querySelector("button");

const usernameInput= document.querySelector(".username");
const passwordInput = document.querySelector(".password");



moveBtn.addEventListener('mouseover',(button)=>{
  let username = usernameInput.value;
  let password = passwordInput.value;

  let validate = /^[a-z0-9 .]/.test(username) && /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&-+=()]).{6,20}/.test(password)

  if(!validate){

      button.target.classList.toggle("move");
      moveBtn.style.background = "red"
  }
  else{
      button.target.classList.add("stop");
      moveBtn.style.background = "green"
  }
});
// //End of moving btn.......


registerLink.addEventListener('click',()=>{
  wrapper.classList.add('active');
});

loginLink.addEventListener('click',()=>{
  wrapper.classList.remove('active');
});


btnlog.addEventListener('click',()=>{
  wrapper.classList.add('active-popup');
});

iconclose.addEventListener('click',()=>{
  wrapper.classList.remove('active-popup');
});














