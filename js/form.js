$(document).ready(function(){ 
var b=true; 
$("#username").click( 
function(){ 
if(b==true){ 
$(this).val(""); 
$(this).attr("class","puton"); 
b=false; 
} 
} 
) 
$("#username").blur( 
function(){ 
if( $(this).val()==""){ 
$(this).val("用户名"); 
$(this).attr("class","default"); 
b=true; 
} 
} 
) 
}); 
$(document).ready(function(){ 
var b=true; 
$("#password").click( 
function(){ 
if(b==true){ 
$(this).val(""); 
$(this).attr("type","password"); 
$(this).attr("class","puton"); 
b=false; 
} 
}) 
$("#password").blur( 
function(){ 
if( $(this).val()==""){ 
$(this).val("密码"); 
$(this).attr("type","text"); 
$(this).attr("class","default"); 
b=true; 
} 
} 
) 
}); 