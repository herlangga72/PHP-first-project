var result;
result = document.getElementById('result');
$(document).ready(function() {
  $('#loginform').submit(function(e) { 
    e.preventDefault(); 
    $.ajax({ 
      type: "POST", 
      url: '/api/loginEngine.php', 
      data: $(this).serialize(),
      success: function(response) { 
        var jsonData = JSON.parse(response); 
        switch(jsonData.success) { 
          case 0:          
            result.innerHTML="Password Salah"; 
            result.classList.add("bg-red-600"); 
            break; 
          case 1: 
            window.location.replace('/admin/home/'); 
            break; 
          case 2: 
            result.innerHTML="User tidak ditemukan"; 
            result.classList.add("bg-red-600"); 
            break; 
          default: 
        } 
      } 
    }); 
  }); 
});