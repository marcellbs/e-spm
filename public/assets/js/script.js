document.addEventListener("DOMContentLoaded", function(event) {

  const showNavbar = (toggleId, navId, bodyId, headerId, imgId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId),
    imgpd = document.getElementById(imgId)

    
    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd && imgpd){
      toggle.addEventListener('click', ()=>{
      // show navbar
      nav.classList.toggle('show')
      // change icon
      toggle.classList.toggle('bx-x')
      // add padding to body
      bodypd.classList.toggle('body-pd')
      // add padding to header
      headerpd.classList.toggle('body-pd')
      
      imgpd.classList.toggle('imgpd')
      imgpd.classList.toggle('text-center')


      })
    }
  }
  
  showNavbar('header-toggle','nav-bar','body-pd','header','imgpd')
  
  /*===== LINK ACTIVE =====*/
  const linkColor = document.querySelectorAll('.nav_link')
  
  function colorLink(){
    if(linkColor){
      linkColor.forEach(l=> l.classList.remove('active'))
      this.classList.add('active')
    }
  }

  linkColor.forEach(l=> l.addEventListener('click', colorLink))
  
  });