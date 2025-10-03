


var sidebar = document.getElementById('sidebar');

function opensidebar(){
  if(sidebar.style.display=="none") {
    sidebar.style.display="block";
  }else{
    sidebar.style.display="none";
  }
}



  //#####################   ADMIN SECTION ##########################

  function homebtn(){
    var home = document.getElementById('home');
    var sidebar = document.getElementById("sidebar");
    home.style.display="block";
    firstyearsemOneId.style.display="none";
    firstyearsemTwoId.style.display="none";
    secondyearsemOneId.style.display="none";
    secondyearsemTwoId.style.display="none";
    ChangePassword.style.display="none";
    newuser.style.display="none";
    

    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }  
  }


  function firstyearsemOnebtn(){
    var firstyearsemOneId = document.getElementById('firstyearsemOneId');
    var sidebar = document.getElementById("sidebar");
    firstyearsemOneId.style.display="block";
    home.style.display="none";
    firstyearsemTwoId.style.display="none";
    secondyearsemOneId.style.display="none";
    secondyearsemTwoId.style.display="none";
    ChangePassword.style.display="none";
    newuser.style.display="none";

    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }  
  }


  
  function firstyearsemTwobtn(){
    var firstyearsemTwoId = document.getElementById('firstyearsemTwoId');
    var sidebar = document.getElementById("sidebar");
    firstyearsemTwoId.style.display="block";
    home.style.display="none";
    firstyearsemOneId.style.display="none";
    secondyearsemOneId.style.display="none";
    secondyearsemTwoId.style.display="none";
    ChangePassword.style.display="none";
    newuser.style.display="none";
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }  
  }


  
  function secondyearsemOnebtn(){
    var secondyearsemOneId = document.getElementById('secondyearsemOneId');
    var sidebar = document.getElementById("sidebar");
    secondyearsemOneId.style.display="block";
    firstyearsemTwoId.style.display="none";
    home.style.display="none";
    firstyearsemOneId.style.display="none";
    secondyearsemTwoId.style.display="none";
    ChangePassword.style.display="none";
    newuser.style.display="none";
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }  
  }



  
  function secondyearsemTwobtn(){
    var secondyearsemTwoId = document.getElementById('secondyearsemTwoId');
    var sidebar = document.getElementById("sidebar");
    secondyearsemTwoId.style.display="block";
    secondyearsemOneId.style.display="none";
    firstyearsemTwoId.style.display="none";
    home.style.display="none";
    firstyearsemOneId.style.display="none";
    ChangePassword.style.display="none";
    newuser.style.display="none";
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }  
  }


  function adduser(){
    var newuser = document.getElementById('newuser');
    var sidebar = document.getElementById("sidebar");
    newuser.style.display="block";
    secondyearsemTwoId.style.display="none";
    secondyearsemOneId.style.display="none";
    firstyearsemTwoId.style.display="none";
    home.style.display="none";
    firstyearsemOneId.style.display="none";
    ChangePassword.style.display="none";
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }  
    
  }


  function openchangepassword(){
    var ChangePassword= document.getElementById('ChangePassword');
    var sidebar = document.getElementById("sidebar");
    ChangePassword.style.display="block";
    secondyearsemTwoId.style.display="none";
    secondyearsemOneId.style.display="none";
    firstyearsemTwoId.style.display="none";
    home.style.display="none";
    firstyearsemOneId.style.display="none";
    newuser.style.display="none";
    
    if (window.innerWidth < 940){
        sidebar.style.display="none";

    }  
  }

  //CHEK LETTER

