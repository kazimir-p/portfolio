        <!--   footer   -->
        <!-- <footer id="contact">

                <div id="topfoot">
                    <div class="foothead">
                        <h2>contact me</h2>
                    </div>
                </div>
                <div id="topfootCs">
                    <div class="foothead">
                        <h2>kontakt</h2>
                    </div>
                </div>
    
         <div id="kontaktspan">
<span>kazimir.p@leafindustry.space</span>
         </div>   
        
        <div class="up"><a href="#hero"><i class="bi bi-arrow-up-square"></i></a></div>
<p class="mistr">autor kresby profilového obrázku je mistr Václav Světlík</p>
</footer> -->
<footer>
            <div id="contact">
            <div class="footbox">
                <div id="topfoot">
                    <div class="foothead">
                        <h2>contact me</h2>
                    </div>
                </div>
                
    
         <div id="kontaktspan">
<span>kazimir.p@leafindustry.space</span>
         </div>   
            </div> 
                
        
        <div class="up"><a href="#hero"><i class="bi bi-arrow-up-square"></i></a></div>
<p class="mistr">author of the profile image drawing is master Václav Světlík</p>
    </div>
        <div id="contactCs">

          
            <div id="topfootCs">
                    <div class="foothead">
                        <h2>kontakt</h2>
                    </div>
                </div>
    
         <div id="kontaktspan">
<span>kazimir.p@leafindustry.space</span>
         </div>   
               
                
        
        <div class="up"><a href="#hero"><i class="bi bi-arrow-up-square"></i></a></div>
<p class="mistr">autorem kresby profilového obrázku je mistr Václav Světlík</p>
    </div>


</footer>
</body> 
<!-- <script src="src/index.js"></script> -->
<script>
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
//   elBig.style.backgroundImage = "url(img/superpancutbetter.png)"
  
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
     
  // alt lang element
  

const navCs = document.getElementById("nav-cs")
const navEn = document.getElementById("nav-en")

//default
navCs.style.display = 'none'
    
function displayCs(){
        if(navCs.style.display = 'none'){
            navCs.style.display = 'flex'
            navEn.style.display = 'none'
      }else if( navEn.style.display = 'none'){
        displayEn()
      } 
      return true
          }
    
    
    function displayEn(){
        navEn.style.display = 'flex'
        navCs.style.display = 'none'
    } 


//about/aboutCs


const aboutCsEl = document.getElementById('aboutCs')
const aboutEnEl = document.getElementById('about')
aboutCsEl.style.display = 'none'

function aboutCs(){
    if(aboutCsEl.style.display = 'none'){
        aboutCsEl.style.display = 'block'
        aboutEnEl.style.display = 'none'
    }else if( aboutEnEl.style.display = 'none'){
        aboutEn()
     } 
}

function aboutEn(){
       aboutCsEl.style.display = 'none'
       aboutEnEl.style.display = 'block'
    } 

//projects/projectsCs

const projectsCsEl = document.getElementById('projectsCs')
const projectsEnEl = document.getElementById('projects')
projectsCsEl.style.display = 'none'

function projectsCs(){
    if(projectsCsEl.style.display = 'none'){
        projectsCsEl.style.display = 'block'
        projectsEnEl.style.display = 'none'
    }else if( projectsEnEl.style.display = 'none'){
        projectsEn()
     } 
}

function projectsEn(){
       projectsCsEl.style.display = 'none'
       projectsEnEl.style.display = 'block'
    } 

//footer
    const topfootCsEl = document.getElementById('contactCs')
const topfootEnEl = document.getElementById('contact')
topfootCsEl.style.display = 'none'

function topfootCs(){
    if(topfootCsEl.style.display = 'none'){
        topfootCsEl.style.display = 'flex'
        topfootEnEl.style.display = 'none'
    }else if( topfootEnEl.style.display = 'none'){
        topfootEn()
     } 
}

function topfootEn(){
       topfootCsEl.style.display = 'none'
       topfootEnEl.style.display = 'flex'
    } 

   // hamburger 
  
   const hamburgerButton = document.getElementById('hamburger')
   const hamburgerButtonCs = document.getElementById('hamburgerCs')
   const navList = document.getElementById('nav-list')
   const navListCs = document.getElementById('nav-listCs')
   const langChange = document.getElementById('altLang')
   const imgChange = document.getElementById('subheadimgs')
   function toggleButton() {
       navList.classList.toggle('show')
       navListCs.classList.toggle('show')
       langChange.classList.toggle('show')
       imgChange.classList.toggle('show')
   }
   
   hamburgerButton.addEventListener('click', toggleButton)
   hamburgerButtonCs.addEventListener('click', toggleButton)

</script>

</html>