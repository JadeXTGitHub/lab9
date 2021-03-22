<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 7 Grid</title>
<meta charset="utf-8">
<style>
* { box-sizing: border-box; }

body {font-family:  Arial, sans-serif;
      margin: 0;
}

header { background-image: url(texas.jpg);
         background-size: cover;
         background-repeat: no-repeat;   
}

header { grid-area: header; }
nav    { grid-area: nav; }
main   { grid-area: main; }
aside  { grid-area: aside; }
footer { grid-area: footer; }


#wrapper { display: grid;
           grid-template: 
  		      "header header header " 100px
    		    "nav    main  aside "  auto
    		    "footer footer footer" 50px
 		    / 150px  1fr  30%;
 	}



h2 { color: #a3a3f1; }


h1 { text-align: center;
     color: #F7F1E3;
	 font-size: 300%;
     text-shadow: 10px 10px 10px #000000;
}
nav {   font-size: 120%; }

nav ul { padding-left: 0;
         display: flex; 
	     flex-direction: row; 
	     flex-wrap: wrap; 
	     justify-content: space-around; }	  
nav ul { list-style-type: none; }
nav li { width: 20%;
		 min-width: 6em;
	     font-size: 110%;
		 text-align: center;
		 background-color: #300666; 
		 margin: .5em;
		 padding: .5em; }
nav a { text-decoration: none;}
nav a:link { color: #F7F1E3; }
nav a:visited { color: #B9EDF0; }
nav a:hover { color: #FFFFFF; }


aside {  padding: 1em;}

main {   padding: 0 1em 1em;    }

footer { background-color: #CCCCCC;
        text-align: center;
		 font-style: italic;
		 padding: 1em; }

      
</style>
</head>
<body>
<div id="wrapper">
  <header>
    <h1>Texas</h1>
  </header>  
  <nav>
    <ul>
	 <li><a href="index.html">Home</a></li>
  
	</ul> 
   </nav>
    <main>   
	<h2>Deep in the Heart of Texas</h2>
    <p>Welcome to Texas Y'all.  Texas is a state in the South Central region of the United States. It is the second largest U.S. state by both area (after Alaska) and population (after California). Texas shares borders with the states of Louisiana to the east, Arkansas to the northeast, Oklahoma to the north, New Mexico to the west, and the Mexican states of Chihuahua, Coahuila, Nuevo León, and Tamaulipas to the south and southwest, and has a coastline with the Gulf of Mexico to the southeast. </p>
    <h2>Dallas</h2>
    <p>Dallas (/ˈdæləs/) is a city in the U.S. state of Texas and the largest city in (and seat of) Dallas County, with portions extending into Collin, Denton, Kaufman and Rockwall counties. With an estimated 2019 population of 1,343,573,[10] it is the ninth most-populous city in the U.S.[11] and the third-largest in Texas after Houston and San Antonio.[12] Located in North Texas, the city of Dallas is the main core of the largest metropolitan area in the Southern United States and the largest inland metropolitan area in the U.S. that lacks any navigable link to the sea.[a] It is the most populous city in the Dallas–Fort Worth metroplex, the fourth-largest metropolitan area in the country at 7.5 million people.</p>
  	<h2>DBU</h2>
    <p>A christian university located in Dallas, Texas. With over 5000 students, DBU offers outstanding Christ-centered undergraduate, graduate, doctoral and online courses.</p>
	<h2>About Me</h2>
	<p>Hi I am Jennifer Thomas.  I build and manage the cyber program at a financial company headquarted in downtown Dallas.</p>
   </main> 
      <aside>
     <img src="jt.jpeg"  alt="Jennifer Thomas">
   </aside>
   <footer>Copyright &copy; 2020
   </footer>
</div>
</body>
</html>