<div id="Menue">
    <div id="Innen">
        <div id="Ueberschrift"><u>B&amp;B<br> Architekten</u></div>
        <a href="index.php"><div class="link"><p>Startseite</p></div></a>
        <a href="index.php"><div class="link"><p>Warenkorb</p></div></a>
        <a href="index.php"><div class="link"><p>Anmeldung</p></div></a>
        <a href="index.php"><div class="link"><p>Werbepartner</p></div></a>
    </div>
    <div id="Aussen">
        Z<br><br>U<br><br>M<br><br><br>M<br><br>E<br><br>N<br><br>&Uuml;
    </div>
</div>
<style>
    #Menue{
      width:20px;
      height:100vh;
      background-color:black;
      color:black;
      position:absolute;
      left:0;
      top:0;
      z-index:15;
      transition:0.2s;
      position: fixed;
    }
    #Innen{
      visibility:collapse;
    }
    #Aussen{
      width:100%;
      background-color:black;
      top:15vw;
      position:absolute;
        color:white;
      text-align:center;
      transition-delay:0.2s;
    }
    #Menue:hover #Aussen{
      visibility:collapse;
      transition:0s;
    }
    #Menue:hover #Innen{
      visibility:visible;
      transition-delay:0.2s;
      }
    #Menue:hover{
      width:300px;
      transition:0.2s;
      background-color:white;
      border-width: 3px;
      border-right-style: solid;
      border-color: black;
    }
    .link{
      background-color:lightblue;
      height:7%;
      width:75%;
      position:relative;
      color:black;
      margin-left:12.5%;
      margin-top:14%;
      font-size:30px;
      text-align:center;
      display: flex;
      align-items: center;
      justify-content: center;
      border-style:solid;
      border-color:black;
      border-width:2px;
      border-radius:2px;
      text-decoration:none;
      font-family: calibri;
    }
    #Ueberschrift{
      text-align: center;
      font-size: 45px;
    }


    #Bild{
      background-color:lightblue;
      position:relative;
      color:black;
      margin-left:auto;
      margin-right:auto;
      margin-top:14%;
      font-size:1.1cm;
      text-align:center;
      display: flex;
      align-items: center;
      justify-content: center;
      border-style:solid;
      border-color:black;
      border-width:5px;
      border-radius:5px;
      text-decoration:none;
    }
    p{
      text-decoration:none !important;
    }
    a{
      text-decoration:none
    }
</style>
