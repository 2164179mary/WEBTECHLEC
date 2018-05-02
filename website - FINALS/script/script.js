var questionLength;
var submit = function () {
    length = 0;
    /*var correct = 0;
    for(var i = 0; i < document.getElementsByName("q"+i);*/
    countQuestions();
    var correct = 0;
    for (var i = 0; i < questionLength + 1; i++) {

        var radio = document.getElementsByName('q' + i);
        console.log(radio);

        for (var j = 0; j < radio.length; j++) {
            console.log("HERE");
            var radioPerQuestion = radio[j];
            if (radioPerQuestion.value == "c" && radioPerQuestion.checked) {
                correct++;
            }
        }
    }
    alert("Correct Responses: " + correct);
    printResult(correct);
}

var countQuestions = function () {
    var formName = document.getElementById("questions");
    var numOfDiv = formName.getElementsByTagName("div");
    questionLength = numOfDiv.length;
}

var printResult = function (correct) {

    document.getElementById("result").innerHTML = "Score: " + correct + " out of " + questionLength + " question";
    for (var i = 0; i < questionLength; i++) {
        var index = i + 1;
        var x = document.getElementById("answer" + index);
        x.style.color = 'green';
        var y = document.getElementById("answer" + index);
        y.style.fontWeight = "1000";
    }
}

function dropdownMenu() {
    var dropdown = document.getElementById("dropdownClick");
    if (dropdown.className === "topnav") {
        dropdown.className += " responsive";
    } else {
        dropdown.className = "topnav";
    }
};
