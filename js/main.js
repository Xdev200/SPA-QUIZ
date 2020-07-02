 $(function(){
    var right=0;
    var wrong=0;
    var finish=0;
    var username="";
    $('#submit').click(function(){
        username=$('#username').val();
        if(username==""){
            Materialize.toast('Please Enter Username', 4000,'red');
        }
        else{
                $('#uname-panel').fadeOut(1000);
                $('#heading').delay(1000).fadeIn(1000);
                document.getElementById('uname').innerHTML=username;
                $('.myform1').delay(1000).fadeIn(1000);
        }
    });

    $('label').click(function(){
       $(this).css("background-color","#009688");
    });

    $('.myform1 input').on('change', function() {
    var user_ans1=($('input[name="q1"]:checked', '.myform1').val()); 
    $('.myform1').fadeOut(2000);
    $('.myform2').delay(2000).fadeIn(2000);
    var ans1=20;
    document.getElementById("a1").innerHTML=user_ans1;
    document.getElementById("ca1").innerHTML=ans1;
        if(user_ans1==ans1){
            document.getElementById("r1").innerHTML=1;
            document.getElementById("w1").innerHTML=0;
            right++;
            
        }
        else{
            document.getElementById("r1").innerHTML=0;
            document.getElementById("w1").innerHTML=1;
        }
   });

    $('.myform2 input').on('change', function() {
    var user_ans2=($('input[name="q2"]:checked', '.myform2').val()); 
    $('.myform2').fadeOut(2000);
    $('.myform3').delay(2000).fadeIn(2000);
    var ans2=40;
    document.getElementById("a2").innerHTML=user_ans2;
    document.getElementById("ca2").innerHTML=ans2;
        if(user_ans2==ans2){
            document.getElementById("r2").innerHTML=1;
            document.getElementById("w2").innerHTML=0;
            right++;
        }
        else{
            document.getElementById("r2").innerHTML=0;
            document.getElementById("w2").innerHTML=1;
            
        }
        
   });

    $('.myform3 input').on('change', function() {
    var user_ans3=($('input[name="q3"]:checked', '.myform3').val()); 
    $('.myform3').fadeOut(2000);
    $('.myform4').delay(2000).fadeIn(2000);
    var ans3=80;
    document.getElementById("a3").innerHTML=user_ans3;
    document.getElementById("ca3").innerHTML=ans3;
        if(user_ans3==ans3){
            right++;
            document.getElementById("r3").innerHTML=1;
            document.getElementById("w3").innerHTML=0;
        }
        else{
            document.getElementById("r3").innerHTML=0;
            document.getElementById("w3").innerHTML=1;
            
        }
        
   });

    $('.myform4 input').on('change', function() {
    var user_ans4=($('input[name="q4"]:checked', '.myform4').val()); 
    $('.myform4').fadeOut(2000);
    $('.myform5').delay(2000).fadeIn(2000);
    var ans4=5;
    document.getElementById("a4").innerHTML=user_ans4;
    document.getElementById("ca4").innerHTML=ans4;
        if(user_ans4==ans4){
            document.getElementById("r4").innerHTML=1;
            document.getElementById("w4").innerHTML=0;
            right++;
        }
        else{
            document.getElementById("r4").innerHTML=0;
            document.getElementById("w4").innerHTML=1;
            
        }
        
   });

    $('.myform5 input').on('change', function() {
    var user_ans5=($('input[name="q5"]:checked', '.myform5').val()); 
    $('.myform5').fadeOut(2000);
    $('#table').delay(2000).fadeIn(2000);
     var ans5=180;
    document.getElementById("a5").innerHTML=user_ans5;
    document.getElementById("ca5").innerHTML=ans5;
        if(user_ans5==ans5){
            right++;
             document.getElementById("r5").innerHTML=1;
            document.getElementById("w5").innerHTML=0;
        }
        else{
             document.getElementById("r5").innerHTML=0;
            document.getElementById("w5").innerHTML=1;
            
        }
       finish=1;
       wrong=5-right;
        if(finish==1){
            $('#finish').delay(2000).fadeIn(2000);
            $('#heading').fadeOut(2000);
           document.getElementById('funame').innerHTML=username;
           document.getElementById('rall').innerHTML=right;
           document.getElementById('wall').innerHTML=wrong;
         }
   });

    $('#restart').click(function(){
        location.reload();
    });

});