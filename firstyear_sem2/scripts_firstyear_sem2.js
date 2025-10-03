


var sidebar = document.getElementById('sidebar');

function opensidebar(){
  if(sidebar.style.display=="none") {
    sidebar.style.display="block";
  }else{
    sidebar.style.display="none";
  }
}



function OperatingSystembtn(){
    var OperatingSystem = document.getElementById('OperatingSystem');
    var sidebar = document.getElementById("sidebar");
    OperatingSystem.style.display="block";
    ComputerNetworking.style.display="none";
    DatabaseManagement.style.display="none";
    WebDevelopment.style.display="none";
    FunctionVariable.style.display="none";
    EventDrivenPrograming.style.display="none";
    SystemAnalysis.style.display="none";
    loginForm.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }
    localStorage.setItem("active", "OperatingSystem");
  }

  function ComputerNetworkingbtn(){
    var ComputerNetworking = document.getElementById('ComputerNetworking');
    var sidebar = document.getElementById("sidebar");
    ComputerNetworking.style.display="block";
    OperatingSystem.style.display="none";
    DatabaseManagement.style.display="none";
    WebDevelopment.style.display="none";
    FunctionVariable.style.display="none";
    EventDrivenPrograming.style.display="none";
    SystemAnalysis.style.display="none";
    loginForm.style.display="none";
   
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "ComputerNetworking");
    

  }

  function DatabaseManagementbtn(){
    var DatabaseManagement = document.getElementById('DatabaseManagement');
    var sidebar = document.getElementById("sidebar");
    DatabaseManagement.style.display="block";
    ComputerNetworking.style.display="none";
    OperatingSystem.style.display="none";
    WebDevelopment.style.display="none";
    FunctionVariable.style.display="none";
    EventDrivenPrograming.style.display="none";
    SystemAnalysis.style.display="none";
    loginForm.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "DatabaseManagement");

    

  }


  function WebDevelopmentbtn(){
    var WebDevelopment = document.getElementById('WebDevelopment');
    var sidebar = document.getElementById("sidebar");
    WebDevelopment.style.display="block";
    DatabaseManagement.style.display="none";
    ComputerNetworking.style.display="none";
    OperatingSystem.style.display="none";
    FunctionVariable.style.display="none";
    EventDrivenPrograming.style.display="none";
    SystemAnalysis.style.display="none";
    loginForm.style.display="none";

    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "WebDevelopment");

    

  }


  function FunctionVariablebtn(){
    var FunctionVariable = document.getElementById('FunctionVariable');
    var sidebar = document.getElementById("sidebar");
    FunctionVariable.style.display="block";
    WebDevelopment.style.display="none";
    DatabaseManagement.style.display="none";
    ComputerNetworking.style.display="none";
    OperatingSystem.style.display="none";
    EventDrivenPrograming.style.display="none";
    SystemAnalysis.style.display="none";
    loginForm.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "FunctionVariable");


  }

  
  function EventDrivenbtn(){
    var EventDrivenPrograming = document.getElementById('EventDrivenPrograming');
    var sidebar = document.getElementById("sidebar");
    EventDrivenPrograming.style.display="block";
    FunctionVariable.style.display="none";
    WebDevelopment.style.display="none";
    DatabaseManagement.style.display="none";
    ComputerNetworking.style.display="none";
    OperatingSystem.style.display="none";
    SystemAnalysis.style.display="none";
    
    loginForm.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }
    localStorage.setItem("active", "EventDrivenPrograming");


  }
  function SystemAnalysisbtn(){
    var SystemAnalysis = document.getElementById('SystemAnalysis');
    var sidebar = document.getElementById("sidebar");
    SystemAnalysis.style.display="block";
    EventDrivenPrograming.style.display="none";
    FunctionVariable.style.display="none";
    WebDevelopment.style.display="none";
    DatabaseManagement.style.display="none";
    ComputerNetworking.style.display="none";
    OperatingSystem.style.display="none";
    loginForm.style.display="none";

    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "SystemAnalysis");

    
    

  }



  function loginbtn(){
    var loginForm = document.getElementById('loginForm');
    var sidebar = document.getElementById("sidebar");
    loginForm.style.display="block";
    SystemAnalysis.style.display="none";
    EventDrivenPrograming.style.display="none";
    FunctionVariable.style.display="none";
    WebDevelopment.style.display="none";
    DatabaseManagement.style.display="none";
    ComputerNetworking.style.display="none";
    OperatingSystem.style.display="none";
    

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
