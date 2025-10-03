


var sidebar = document.getElementById('sidebar');

function opensidebar(){
  if(sidebar.style.display=="none") {
    sidebar.style.display="block";
  }else{
    sidebar.style.display="none";
  }
}



function MathematicalStatisticsbtn(){
    var MathematicalStatistics = document.getElementById('MathematicalStatistics');
    var sidebar = document.getElementById("sidebar");
    MathematicalStatistics.style.display="block";
    OSAdminstration.style.display="none";
    DataCommunication.style.display="none";
    DataStructure.style.display="none";
    ElectronicCommerce.style.display="none";
    DevelompmentStudies.style.display="none";
    DatabaseSystem.style.display="none";
    ComputerizedAccounting.style.display="none";
    loginForm.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "MathematicalStatistics");
  }

  function OSAdminstrationbtn(){
    var OSAdminstration = document.getElementById('OSAdminstration');
    var sidebar = document.getElementById("sidebar");
    OSAdminstration.style.display="block";
    MathematicalStatistics.style.display="none";
    DataCommunication.style.display="none";
    DataStructure.style.display="none";
    ElectronicCommerce.style.display="none";
    DevelompmentStudies.style.display="none";
    DatabaseSystem.style.display="none";
    ComputerizedAccounting.style.display="none";
    loginForm.style.display="none";
   
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "OSAdminstration");
    

  }

  function DataCommunicationbtn(){
    var DataCommunication = document.getElementById('DataCommunication');
    var sidebar = document.getElementById("sidebar");
    DataCommunication.style.display="block";
    OSAdminstration.style.display="none";
    MathematicalStatistics.style.display="none";
    DataStructure.style.display="none";
    ElectronicCommerce.style.display="none";
    DevelompmentStudies.style.display="none";
    DatabaseSystem.style.display="none";
    ComputerizedAccounting.style.display="none";
    loginForm.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }
    localStorage.setItem("active", "DataCommunication");

  }


  function DataStructurebtn(){
    var DataStructure = document.getElementById('DataStructure');
    var sidebar = document.getElementById("sidebar");
    DataStructure.style.display="block";
    DataCommunication.style.display="none";
    OSAdminstration.style.display="none";
    MathematicalStatistics.style.display="none";
    ElectronicCommerce.style.display="none";
    DevelompmentStudies.style.display="none";
    DatabaseSystem.style.display="none";
    ComputerizedAccounting.style.display="none";
    loginForm.style.display="none";

    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "DataStructure");
    

  }


  function ElectronicCommercebtn(){
    var ElectronicCommerce = document.getElementById('ElectronicCommerce');
    var sidebar = document.getElementById("sidebar");
    ElectronicCommerce.style.display="block";
    DataStructure.style.display="none";
    DataCommunication.style.display="none";
    OSAdminstration.style.display="none";
    MathematicalStatistics.style.display="none";
    DevelompmentStudies.style.display="none";
    DatabaseSystem.style.display="none";
    ComputerizedAccounting.style.display="none";
    loginForm.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "ElectronicCommerce");

  }

  
  function DevelompmentStudiesbtn(){
    var DevelompmentStudies = document.getElementById('DevelompmentStudies');
    var sidebar = document.getElementById("sidebar");
    DevelompmentStudies.style.display="block";
    ElectronicCommerce.style.display="none";
    DataStructure.style.display="none";
    DataCommunication.style.display="none";
    OSAdminstration.style.display="none";
    MathematicalStatistics.style.display="none";
    DatabaseSystem.style.display="none";
    ComputerizedAccounting.style.display="none";
    
    loginForm.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "DevelompmentStudies");

  }
  function DatabaseSystembtn(){
    var DatabaseSystem = document.getElementById('DatabaseSystem');
    var sidebar = document.getElementById("sidebar");
    DatabaseSystem.style.display="block";
    DevelompmentStudies.style.display="none";
    ElectronicCommerce.style.display="none";
    DataStructure.style.display="none";
    DataCommunication.style.display="none";
    OSAdminstration.style.display="none";
    MathematicalStatistics.style.display="none";
    ComputerizedAccounting.style.display="none";
    loginForm.style.display="none";

    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "DatabaseSystem");
    
    

  }

//  NEW 


function ComputerizedAccountingbtn(){
  var ComputerizedAccounting = document.getElementById('ComputerizedAccounting');
  var sidebar = document.getElementById("sidebar");
  ComputerizedAccounting.style.display="block";
  DatabaseSystem.style.display="none";
  DevelompmentStudies.style.display="none";
  ElectronicCommerce.style.display="none";
  DataStructure.style.display="none";
  DataCommunication.style.display="none";
  OSAdminstration.style.display="none";
  MathematicalStatistics.style.display="none";
  loginForm.style.display="none";

  if (window.innerWidth < 940){
      sidebar.style.display="none";

  }

  localStorage.setItem("active", "ComputerizedAccounting");
  
  

}




  function loginbtn(){
    var loginForm = document.getElementById('loginForm');
    var sidebar = document.getElementById("sidebar");
    loginForm.style.display="block";
    ComputerizedAccounting.style.display="none";
    DatabaseSystem.style.display="none";
    DevelompmentStudies.style.display="none";
    ElectronicCommerce.style.display="none";
    DataStructure.style.display="none";
    DataCommunication.style.display="none";
    OSAdminstration.style.display="none";
    MathematicalStatistics.style.display="none";

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
  }

  //CHEK LETTER

