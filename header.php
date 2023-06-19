<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon (4).ico?v=2" type="image/x-icon" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;800&family=Lexend+Deca:wght@800&family=Open+Sans:wght@300;800&family=Orbitron:wght@400;800&family=Roboto+Slab:wght@200;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RD939SQYY5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RD939SQYY5');
</script>
<body>
<header class="hero" id="hero">
    <nav id="nav-en"> 
        <div id="list-vertical">    
            <div id="lang" title="click for czech version" onclick="displayCs(this); aboutCs(); projectsCs()">&ltlang="cs">
            </div> 
            <button class="hamburger" id="hamburger"><i class="bi bi-list"></i></button> 
        </div> 
        <ul id="nav-list">
            <li><a href="#contact" onclick="topfootEn()">contact me</a></li>
            <li><a href="#about" onclick="aboutEn()">about</a></li>
            <li><a href="#projects" onclick="projectsEn()">projects</a></li>
            <li onclick="displayCs(this)" title="click for czech version">&ltlang="cs"></li>
        </ul>
    </nav>
    <nav id="nav-cs" > 
        <div id="list-vertical">    
            <div id="lang" title="click for english version" onclick="displayEn(this); aboutEn(); projectsEn()">&ltlang="en"></div> 
            <button class="hamburger" id="hamburgerCs"><i class="bi bi-list"></i></button> 
        </div>         
        <ul id="nav-listCs" >
            <li><a href="#contactCs" onclick="topfootCs()">kontakt</a></li>
            <li><a href="#aboutCs" onclick="aboutCs()">ovšem</a></li>
            <li><a href="#projectsCs" onclick="projectsCs()" >projekty</a></li>
            <li onclick="displayEn(this)" title="click for english version">&ltlang="en"></li>
        </ul>
    </nav>

    <div id="headerSub">
      <div id="headAndImgs"><div id="headingInSub"><h1>danijelPrebanić</h1></div><div id="headerSub-imgs"> 
                <div id="imgbig" onmouseover="shrinkPic(this)"></div>
                <div id="imgsmall" onmouseover="switchPic(this)"></div>
            </div></div>  
        <div id="headerSub-content">
            
            <span id="headerSub-text">
                webmaster.frontendDeveloper('junior')
            </span>
        </div>
    </div>

    <div class="git-box">g<span id="invisibleGit">ithub</span> 
        <div class="git-text right"><a href="https://github.com/kazimir-p" target="blank">github</a></div>
    </div>
</header>




