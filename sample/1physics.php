<html>
<head><title>AM and FM radiowaves</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="js/java.js"></script>
</head>
<body>
<div class="dws-wrapper">
<div class="dws-form">
   <label class="tab" title="Registration">Write your answers below</label>
<form class="tab-form active"  >

<div class="box-input">
    <input class="input" type="text" id="ans1"  required>
    <label>What does AM mean</label>
    </div>
<div class="box-input">
    <input class="input" type="text" id="ans2"   required>
    <label>What does FM mean</label>
    </div>
<div class="box-input">
    <input class="input" type="text" id="ans3"  required>
    <label>Which one has better quality?</label>
    </div>
<div class="box-input">
    <input class="input" type="text" id="ans4" required>
    <label>Which one can take higher frequency?</label>
    </div>
<div class="box-input">
    <input class="input"  type="text"  id="ans5" required>
    <label>Which one created first?</label>
    </div>
<div class="box-input">
    <input class="input" id="ans6" type="text" required>
    <label>What is frequency border of these modulations? </label>
      </div>
 <div class="box-input">
   <input class="input" id="ans7" type="text"  required>
   <label>What is modulated in am? </label>
     </div>
     <div class="box-input">
   <input class="input" id="ans8" type="text"  required>
    <label>What is modulated in FM  ? </label>
        </div>
    <button class="button1"  onclick="check();">Check</button>
     <div id="results"></div>
</form>




</div>

  </form>
    </div>
    </div>

<script>
function check(){
correct1 = "Amplitude Modulation";
correct2 = "Frequency Modulation";
correct3 = "FM";
correct4 = "FM";
correct5 = "AM";
correct6 = "Sidebands";
correct7 = "Amplitude";
correct8 = "Frequency"
st_ans1 = document.getElementById('ans1').value;
st_ans2 = document.getElementById('ans2').value;
st_ans3 = document.getElementById('ans3').value;
st_ans4 = document.getElementById('ans4').value;
st_ans5 = document.getElementById('ans5').value;
st_ans6 = document.getElementById('ans6').value;
st_ans7 = document.getElementById('ans7').value;
st_ans8 = document.getElementById('ans8').value;
score = 0;
if(st_ans1 == correct1){
score +=1;
}
if(st_ans2 == correct2){
score +=1;
}
if(st_ans3 == correct3){
score +=1;
}
if(st_ans4 == correct4){
score +=1;
}
if(st_ans5 == correct5){
score +=1;
}
if(st_ans6 == correct6){
score +=1;
}
if(st_ans7 == correct7){
score +=1;
}
if(st_ans8 == correct8){
score +=1;
}

q_amount = 8;
total_score = score/q_amount * 100;
document.getElementById('results').innerHTML = "You have got "+total_score+"% of correct answers.";
}

</script>

</body>
</html>
