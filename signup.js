
searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
  searchForm.classList.toggle('active');
}

let loginForm = document.querySelector('.login-form-container');

document.querySelector('#login-btn').onclick = () =>{
  loginForm.classList.toggle('active');
}

document.querySelector('#close-login-btn').onclick = () =>{
  loginForm.classList.remove('active');
}


window.onscroll = () =>{
  if(window.scrollY > 80){
    document.querySelector('.header .header-2').classList.add('active');
  }else{
    document.querySelector('.header .header-2').classList.remove('active');
  }

}




let tabLinks = document.querySelectorAll('.tab-menu a');
let tabPanels = document.querySelectorAll('.tab-content > div');

tabLinks.forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    let href = link.getAttribute('href');
    let activeTab = document.querySelector(href);

    tabPanels.forEach(panel => {
      panel.classList.remove('active');
    });
    activeTab.classList.add('active');

    tabLinks.forEach(link => {
      link.classList.remove('active');
    });
    link.classList.add('active');
  });
});


