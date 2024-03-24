/*  ========================================================================  *\
    M E N U - J A V A S C R I P T
\*  ========================================================================  */


function megjelenit(aside) { 
    document.getElementById('myHome').style.display = 'none'; 
    document.getElementById('myContact').style.display = 'none'; 
    document.getElementById('myGame').style.display = 'none'; 
    document.getElementById('myFinders').style.display = 'none';  

    document.getElementById(aside).style.display = ''; 
} 