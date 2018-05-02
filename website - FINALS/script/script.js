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

(function ($) { // Begin jQuery
    $(function () { // DOM ready
        // If a link has a dropdown, add sub menu toggle.
        $('nav ul li a:not(:only-child)').click(function (e) {
            $(this).siblings('.nav-dropdown').toggle();
            // Close one dropdown when selecting another
            $('.nav-dropdown').not($(this).siblings()).hide();
            e.stopPropagation();
        });
        // Clicking away from dropdown will remove the dropdown class
        $('html').click(function () {
            $('.nav-dropdown').hide();
        });
        // Toggle open and close nav styles on click
        $('#nav-toggle').click(function () {
            $('nav ul').slideToggle();
        });
        // Hamburger to X toggle
        $('#nav-toggle').on('click', function () {
            this.classList.toggle('active');
        });
    }); // end DOM ready
})(jQuery); // end jQuery
