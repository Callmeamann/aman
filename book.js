
window.onscroll = () =>{


  if(window.scrollY > 1){
    document.querySelector('.header .header-2').classList.add('active');
  }else{
    document.querySelector('.header .header-2').classList.remove('active');
  }

}

