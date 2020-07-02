<!doctype HTML>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SINGLE PAGE QUIZ APPLICATION</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.css">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="container">
            <div class="row teal card">
                <div class="col l12 m12 s12">
                    <div class="row">
                <div class="col l4 m4 s4 card black-text offset-l3" id="uname-panel" >
                    <input type="text" placeholder="Enter Your Username" id="username">
                    <button class="btn teal" id="submit">SUBMIT<i class="material-icons right">send</i></button>
                    <br><br>
                </div>
                <div class="col l12 m12 s12 card white red-text" id="heading">
                    <h3>WELCOME MR. <span id="uname"></span></h3>
                </div>
                <div class="col l12 m12 s12 card white red-text" id="finish">
                    <h3>RESULT OF MR. <span id="funame"></span> </h3>
                    <span id="restart" class="right"> <a class="red-text" href="">RESTART QUIZ</a></span>
                </div>
            </div>
                </div>
                
                 <div class="row" id="question_row">
                <div class="col l10 m10 s10 myform1  card">
                    <h3>Q1. What is 10*2 ?</h3>
                    <input class="with-gap" name="q1" value="30" type="radio" id="o1" >
                    <label for="o1" class="waves-effect">30</label><br>
                    
                    <input class="with-gap" name="q1" value="40" type="radio" id="o2">
                    <label for="o2" class="waves-effect">40</label><br>
                    
                    <input class="with-gap" name="q1" value="20" type="radio" id="o3">
                    <label for="o3" class="waves-effect">20</label><br>
                    
                    <input class="with-gap" name="q1" value="80" type="radio" id="o4">
                    <label for="o4" class="waves-effect">80</label>
                </div>
                
                <div class="col l10 m10 s10 myform2 card">
                    <h3>Q2. What is 20+20 ?</h3>
                    <input class="with-gap" name="q2" value="40" type="radio" id="o5" >
                    <label for="o5" class="waves-effect">40</label><br>
                    
                    <input class="with-gap" name="q2" value="90" type="radio" id="o6">
                    <label for="o6" class="waves-effect">90</label><br>
                    
                    <input class="with-gap" name="q2" value="120" type="radio" id="o7">
                    <label for="o7" class="waves-effect">120</label><br>
                    
                    <input class="with-gap" name="q2" value="80" type="radio" id="o8">
                    <label for="o8" class="waves-effect">80</label>
                </div>
                
                <div class="col l10 m10 s10 myform3 card">
                    <h3>Q3. What is 120-40 ?</h3>
                    <input class="with-gap" name="q3" value="40" type="radio" id="o9" >
                    <label for="o9" class="waves-effect">40</label><br>
                    
                    <input class="with-gap" name="q3" value="80" type="radio" id="o10">
                    <label for="o10" class="waves-effect">80</label><br>
                    
                    <input class="with-gap" name="q3" value="120" type="radio" id="o11">
                    <label for="o11" class="waves-effect">120</label><br>
                    
                    <input class="with-gap" name="q3" value="60" type="radio" id="o12">
                    <label for="o12" class="waves-effect">60</label>
                </div>
                
                <div class="col l10 m10 s10 myform4 card">
                    <h3>Q4. What is 200/40 ?</h3>
                    <input class="with-gap" name="q4" value="60" type="radio" id="o13" >
                    <label for="o13" class="waves-effect">60</label><br>
                    
                    <input class="with-gap" name="q4" value="200" type="radio" id="o14">
                    <label for="o14" class="waves-effect">200</label><br>
                    
                    <input class="with-gap" name="q4" value="5" type="radio" id="o15">
                    <label for="o15" class="waves-effect">5</label><br>
                    
                    <input class="with-gap" name="q4" value="40" type="radio" id="o16">
                    <label for="o16" class="waves-effect">40</label>
                </div>
                
                 <div class="col l10 m10 s10 myform5 card">
                    <h3>Q5. What is (100-40)+60*2 ?</h3>
                    <input class="with-gap" name="q5" value="160" type="radio" id="o17" >
                    <label for="o17" class="waves-effect">160</label><br>
                    
                    <input class="with-gap" name="q5" value="200" type="radio" id="o18">
                    <label for="o18" class="waves-effect">200</label><br>
                    
                    <input class="with-gap" name="q5" value="300" type="radio" id="o19">
                    <label for="o19" class="waves-effect">300</label><br>
                    
                    <input class="with-gap" name="q5" value="180" type="radio" id="o20">
                    <label for="o20" class="waves-effect">180</label>
                </div>
                
            </div>
                
                 <div class="row" id="table">
                <div class="col l8 m8 s8  card offset-l1">
                   <table class="responsive-table striped bordered centered">
                        <thead class="">
                            <th>Q.NO</th>
                            <th>QUESTION</th>
                            <th>YOUR ANSWER</th>
                            <th>CORRECT ANSWER</th>
                            <th>RIGHT</th>
                            <th>WRONG</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>What is 10*2 ?</td>
                                <td><span id="a1"></span></td>
                                <td><span id="ca1"></span></td>
                                <td><span id="r1"></span></td>
                                <td><span id="w1"></span></td>
                               
                            </tr>
                            
                            <tr>
                                <td>2</td>
                                <td>What is 20+20 ?</td>
                                <td><span id="a2"></span></td>
                                <td><span id="ca2"></span></td>
                                <td><span id="r2"></span></td>
                                <td><span id="w2"></span></td>
                            </tr>
                            
                            <tr>
                                <td>3</td>
                                <td>What is 120-40 ?</td>
                                <td><span id="a3"></span></td>
                                <td><span id="ca3"></span></td>
                                <td><span id="r3"></span></td>
                                <td><span id="w3"></span></td>
                            </tr>
                            
                            <tr>
                                <td>4</td>
                                <td>What is 200/40 ?</td>
                                <td><span id="a4"></span></td>
                                <td><span id="ca4"></span></td>
                                <td><span id="r4"></span></td>
                                <td><span id="w4"></span></td>
                            </tr>
                            
                            <tr>
                                <td>5</td>
                                <td>What is (100-40)+60*2 ?</td>
                                <td><span id="a5"></span></td>
                                <td><span id="ca5"></span></td>
                                <td><span id="r5"></span></td>
                                <td><span id="w5"></span></td>
                            </tr>
                            <tr>
                                <td>TOTAL</td>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td><span id="rall" class="green white-text btn-floating"></span></td>
                                <td><span id="wall" class="red white-text btn-floating"></span></td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
                
            </div>
            </div>
            
        </div>
        
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
