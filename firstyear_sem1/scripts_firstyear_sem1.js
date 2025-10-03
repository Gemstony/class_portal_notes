


var sidebar = document.getElementById('sidebar');

function opensidebar(){
  if(sidebar.style.display=="none") {
    sidebar.style.display="block";
  }else{
    sidebar.style.display="none";
  }
}



function BusnessInformationbtn(){
    var BusnessInformation = document.getElementById('BusnessInformation');
    BusnessInformation.style.display="block";
    programing.style.display="none";
    BusnessCommunication.style.display="none";
    ComputerArchtecture.style.display="none";
    FundamentalMathematics.style.display="none";
    LinearAlgebra.style.display="none";
    loginForm.style.display="none";

    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "BusnessInformation");
  }

  function programingbtn(){
    var programing = document.getElementById('programing');
    programing.style.display="block";
    BusnessCommunication.style.display="none";
    BusnessInformation.style.display="none";
    ComputerArchtecture.style.display="none";
    FundamentalMathematics.style.display="none";
    LinearAlgebra.style.display="none";
    loginForm.style.display="none";
   
    if (window.innerWidth < 940){
        sidebar.style.display="none";
    }

    localStorage.setItem("active", "programing");
    
  }

  function BusnessCommunicationbtn(){
    var BusnessCommunication = document.getElementById('BusnessCommunication');
    BusnessCommunication.style.display="block";
    BusnessInformation.style.display="none";
    programing.style.display="none";
    ComputerArchtecture.style.display="none";
    FundamentalMathematics.style.display="none";
    LinearAlgebra.style.display="none";
    loginForm.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    
    localStorage.setItem("active", "BusnessCommunication");
    
  }


  function LinearAlgebrabtn(){
    var LinearAlgebra = document.getElementById('LinearAlgebra');
    LinearAlgebra.style.display="block";
    BusnessCommunication.style.display="none";
    BusnessInformation.style.display="none";
    programing.style.display="none";
    ComputerArchtecture.style.display="none";
    FundamentalMathematics.style.display="none";
    loginForm.style.display="none";

    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }
    
    localStorage.setItem("active", "LinearAlgebra");
  }


  function ComputerArchtecturebtn(){
    var ComputerArchtecture = document.getElementById('ComputerArchtecture');
    ComputerArchtecture.style.display="block";
    BusnessCommunication.style.display="none";
    BusnessInformation.style.display="none";
    programing.style.display="none";
    FundamentalMathematics.style.display="none";
    LinearAlgebra.style.display="none";
    loginForm.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "ComputerArchtecture");

  }

  
  function FundamentalMathematicsbtn(){
    var FundamentalMathematics = document.getElementById('FundamentalMathematics');
    FundamentalMathematics.style.display="block";
    ComputerArchtecture.style.display="none";
    BusnessCommunication.style.display="none";
    BusnessInformation.style.display="none";
    programing.style.display="none";
    LinearAlgebra.style.display="none";
    loginForm.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    
    localStorage.setItem("active", "FundamentalMathematics");

  }



  function loginbtn(){
    var loginForm = document.getElementById('loginForm');
    var sidebar = document.getElementById("sidebar");
    loginForm.style.display="block";
    LinearAlgebra.style.display="none";
    BusnessCommunication.style.display="none";
    BusnessInformation.style.display="none";
    programing.style.display="none";
    ComputerArchtecture.style.display="none";
    FundamentalMathematics.style.display="none";

    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }
    localStorage.setItem("active", "loginForm");

  }


  


  //#####################   ADMIN SECTION ##########################

  function openhome(){
    var admin_home = document.getElementById('admin_home');
    var sidebar = document.getElementById("sidebar");
    admin_home.style.display="block";
    ChangePassword.style.display="none";
    profile.style.display="none";
    myuploads.style.display="none";
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }
    localStorage.setItem("active", "admin_home");  
  }


  function openprofile(){
    var profile = document.getElementById('profile');
    var sidebar = document.getElementById("sidebar");
    profile.style.display="block";
    admin_home.style.display="none";
    ChangePassword.style.display="none";
    myuploads.style.display="none";
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }  

    localStorage.setItem("active", "profile"); 
  }

  function myuploadsbtn(){
    var myuploads = document.getElementById('myuploads');
    var sidebar = document.getElementById("sidebar");
    myuploads.style.display="block";
    profile.style.display="none";
    admin_home.style.display="none";
    ChangePassword.style.display="none";
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }  

    localStorage.setItem("active", "myuploads");
  }


  function openchangepassword(){
    var admin_home = document.getElementById('admin_home');
    var sidebar = document.getElementById("sidebar");
    ChangePassword.style.display="block";
    profile.style.display="none";
    admin_home.style.display="none";
    myuploads.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }  

    localStorage.setItem("active", "ChangePassword");
  }

  //CHEK LETTER



var sidebar = document.getElementById('sidebar');

function opensidebar(){
  if(sidebar.style.display=="none") {
    sidebar.style.display="block";
  }else{
    sidebar.style.display="none";
  }
}



function BusnessInformationbtn(){
    var BusnessInformation = document.getElementById('BusnessInformation');
    BusnessInformation.style.display="block";
    programing.style.display="none";
    BusnessCommunication.style.display="none";
    ComputerArchtecture.style.display="none";
    FundamentalMathematics.style.display="none";
    LinearAlgebra.style.display="none";
    loginForm.style.display="none";

    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "BusnessInformation");
  }

  function programingbtn(){
    var programing = document.getElementById('programing');
    programing.style.display="block";
    BusnessCommunication.style.display="none";
    BusnessInformation.style.display="none";
    ComputerArchtecture.style.display="none";
    FundamentalMathematics.style.display="none";
    LinearAlgebra.style.display="none";
    loginForm.style.display="none";
   
    if (window.innerWidth < 940){
        sidebar.style.display="none";
    }

    localStorage.setItem("active", "programing");
    
  }

  function BusnessCommunicationbtn(){
    var BusnessCommunication = document.getElementById('BusnessCommunication');
    BusnessCommunication.style.display="block";
    BusnessInformation.style.display="none";
    programing.style.display="none";
    ComputerArchtecture.style.display="none";
    FundamentalMathematics.style.display="none";
    LinearAlgebra.style.display="none";
    loginForm.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    
    localStorage.setItem("active", "BusnessCommunication");
    
  }


  function LinearAlgebrabtn(){
    var LinearAlgebra = document.getElementById('LinearAlgebra');
    LinearAlgebra.style.display="block";
    BusnessCommunication.style.display="none";
    BusnessInformation.style.display="none";
    programing.style.display="none";
    ComputerArchtecture.style.display="none";
    FundamentalMathematics.style.display="none";
    loginForm.style.display="none";

    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }
    
    localStorage.setItem("active", "LinearAlgebra");
  }


  function ComputerArchtecturebtn(){
    var ComputerArchtecture = document.getElementById('ComputerArchtecture');
    ComputerArchtecture.style.display="block";
    BusnessCommunication.style.display="none";
    BusnessInformation.style.display="none";
    programing.style.display="none";
    FundamentalMathematics.style.display="none";
    LinearAlgebra.style.display="none";
    loginForm.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "ComputerArchtecture");

  }

  
  function FundamentalMathematicsbtn(){
    var FundamentalMathematics = document.getElementById('FundamentalMathematics');
    FundamentalMathematics.style.display="block";
    ComputerArchtecture.style.display="none";
    BusnessCommunication.style.display="none";
    BusnessInformation.style.display="none";
    programing.style.display="none";
    LinearAlgebra.style.display="none";
    loginForm.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    
    localStorage.setItem("active", "FundamentalMathematics");

  }



  function loginbtn(){
    var loginForm = document.getElementById('loginForm');
    var sidebar = document.getElementById("sidebar");
    loginForm.style.display="block";
    LinearAlgebra.style.display="none";
    BusnessCommunication.style.display="none";
    BusnessInformation.style.display="none";
    programing.style.display="none";
    ComputerArchtecture.style.display="none";
    FundamentalMathematics.style.display="none";

    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }
    localStorage.setItem("active", "loginForm");

  }


  


  //#####################   ADMIN SECTION ##########################

  function openhome(){
    var admin_home = document.getElementById('admin_home');
    var sidebar = document.getElementById("sidebar");
    admin_home.style.display="block";
    ChangePassword.style.display="none";
    profile.style.display="none";
    myuploads.style.display="none";
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }
    localStorage.setItem("active", "admin_home");  
  }


  function openprofile(){
    var profile = document.getElementById('profile');
    var sidebar = document.getElementById("sidebar");
    profile.style.display="block";
    admin_home.style.display="none";
    ChangePassword.style.display="none";
    myuploads.style.display="none";
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }  

    localStorage.setItem("active", "profile"); 
  }

  function myuploadsbtn(){
    var myuploads = document.getElementById('myuploads');
    var sidebar = document.getElementById("sidebar");
    myuploads.style.display="block";
    profile.style.display="none";
    admin_home.style.display="none";
    ChangePassword.style.display="none";
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }  

    localStorage.setItem("active", "myuploads");
  }


  function openchangepassword(){
    var admin_home = document.getElementById('admin_home');
    var sidebar = document.getElementById("sidebar");
    ChangePassword.style.display="block";
    profile.style.display="none";
    admin_home.style.display="none";
    myuploads.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }  

    localStorage.setItem("active", "ChangePassword");
  }

  //CHEK LETTER
