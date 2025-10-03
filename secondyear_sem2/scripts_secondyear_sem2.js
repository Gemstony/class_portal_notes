


var sidebar = document.getElementById('sidebar');

function opensidebar(){
  if(sidebar.style.display=="none") {
    sidebar.style.display="block";
  }else{
    sidebar.style.display="none";
  }
}



function WebApplicationDvtbtn(){
    var WebApplicationDevelompment = document.getElementById('WebApplicationDevelompment');
    var sidebar = document.getElementById("sidebar");
    WebApplicationDevelompment.style.display="block";
    CyberLawandIT.style.display="none";
    ObjectOrientedPrograming.style.display="none";
    AlgorithimAnalysisandDesign.style.display="none";
    ResearchMethodology.style.display="none";
    loginForm.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }
    localStorage.setItem("active", "WebApplicationDevelompment");
  }



  function CyberlawandITbtn(){
    var CyberLawandIT = document.getElementById('CyberLawandIT');
    var sidebar = document.getElementById("sidebar");
    CyberLawandIT.style.display="block";
    WebApplicationDevelompment.style.display="none";
    ObjectOrientedPrograming.style.display="none";
    AlgorithimAnalysisandDesign.style.display="none";
    ResearchMethodology.style.display="none";
    loginForm.style.display="none";
   
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }
    localStorage.setItem("active", "CyberLawandIT");
    

  }

  function OOProgramingbtn(){
    var ObjectOrientedPrograming = document.getElementById('ObjectOrientedPrograming');
    var sidebar = document.getElementById("sidebar");
    ObjectOrientedPrograming.style.display="block";
    CyberLawandIT.style.display="none";
    WebApplicationDevelompment.style.display="none";
    AlgorithimAnalysisandDesign.style.display="none";
    ResearchMethodology.style.display="none";
    loginForm.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "ObjectOrientedPrograming");
    

  }


  function AlgorithimAnalysisbtn(){
    var AlgorithimAnalysisandDesign = document.getElementById('AlgorithimAnalysisandDesign');
    var sidebar = document.getElementById("sidebar");
    AlgorithimAnalysisandDesign.style.display="block";
    ObjectOrientedPrograming.style.display="none";
    CyberLawandIT.style.display="none";
    WebApplicationDevelompment.style.display="none";
    ResearchMethodology.style.display="none";
    loginForm.style.display="none";

    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "AlgorithimAnalysisandDesign");
    

  }


  function ResearchMethodologybtn(){
    var ResearchMethodology = document.getElementById('ResearchMethodology');
    var sidebar = document.getElementById("sidebar");
    ResearchMethodology.style.display="block";
    AlgorithimAnalysisandDesign.style.display="none";
    ObjectOrientedPrograming.style.display="none";
    CyberLawandIT.style.display="none";
    WebApplicationDevelompment.style.display="none";
    loginForm.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }

    localStorage.setItem("active", "ResearchMethodology");

  }




  function loginbtn(){
    var loginForm = document.getElementById('loginForm');
    var sidebar = document.getElementById("sidebar");
    loginForm.style.display="block";
    ResearchMethodology.style.display="none";
    AlgorithimAnalysisandDesign.style.display="none";
    ObjectOrientedPrograming.style.display="none";
    CyberLawandIT.style.display="none";
    WebApplicationDevelompment.style.display="none";


    

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

