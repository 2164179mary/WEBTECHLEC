var questionLength;
var submit = function(){
    length = 0;
    /*var correct = 0;
    for(var i = 0; i < document.getElementsByName("q"+i);*/
    countQuestions();
    var correct = 0;
    for(var i = 0; i < questionLength+1; i++){
        var radio = document.getElementsByName('q'+i);
        for(var j = 0; j < radio.questionLength; j++){
            var radioPerQuestion = radio[j];
            if(radioPerQuestion.value == "c" && radioPerQuestion.checked){
                correct++;
            }
        }
    }
    alert("Correct Responses: " + correct);
    printResult(correct);
}
        
var countQuestions = function() {
    var formName = document.getElementById("questions");
    var numOfDiv = formName.getElementsByTagName("div");
    questionLength = numOfDiv.length;  
}

var printResult = function(correct){
    var x = document.getElementById("answer2");
    x.style.color = 'red';
    document.getElementById("result").innerHTML = correct;
}
