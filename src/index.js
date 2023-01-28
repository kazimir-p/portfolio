// images blows and shrinks

let elSmall = document.createElement('div')
  let elBig = document.createElement('div')
  // find the place to put it in
  const contentElSmall = document.querySelector('#imgsmall')
  const contentElBig = document.querySelector('#imgbig')
  // give apearence to the element
  elSmall.classList.add('frameimgsmall')
  elBig.classList.add('frameimgbig')
  // put it in chosen place
  contentElSmall.appendChild(elSmall)
  contentElBig.appendChild(elBig)
  // add image
  elBig.style.backgroundImage = "url(img/superpancutbetter.png)"
  
  // default state
  elBig.style.display = 'none'
  
  function switchPic(e) {
      if(elBig.style.display = 'none'){
          elBig.style.display = 'block'
          elSmall.style.display = 'none'
      }else if( elSmall.style.display = 'none'){
          shrinkPic()
      }
  }   
  document.addEventListener('onmouseover', switchPic)
     
    function shrinkPic(e){
      elBig.style.display = 'none'
      elSmall.style.display = 'block'
    } 
   document.addEventListener('onmouseout', shrinkPic)   
  
   
   // hamburger 
  
   const hamburgerButton = document.getElementById('hamburger')
   const navList = document.getElementById('nav-list')
   const langChange = document.getElementById('altLang')
   const imgChange = document.getElementById('subheadimgs')
   function toggleButton() {
       navList.classList.toggle('show')
       langChange.classList.toggle('show')
       imgChange.classList.toggle('show')
   }
   
   hamburgerButton.addEventListener('click', toggleButton)


