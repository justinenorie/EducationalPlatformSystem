<?php
session_start();
if (!isset($_SESSION['sci_quiz4_completed'])) { //changes
    // Set it to true only if the user passes the quiz
    $_SESSION['sci_quiz4_completed'] = true; //changes
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIOLOGY QUIZ</title>
    <link rel="stylesheet" href="../../Content/css/style-courses.css">
    <script src="../../js/courses.js"></script>
</head>
<body>
    <div class="quiz-container">
        <div class="questionnaire">
            <form id="quiz-form" method="post">
                <div class="options-container" id="question-container">
                    <h1>BIOLOGY QUIZ</h1>
                    <p>Let's Test Your Knowledge to Unlock the Next Topic.</p>
                    <div class="question" data-number="1" style="display: block;">
                        <h2>What is the basic unit of heredity that carries genetic information?</h2>
                        <div>
                            <input type="radio" id="q1OptionA" name="question1" value="a">
                            <label for="q1OptionA">Protein</label>
                        </div>
                        <div>
                            <input type="radio" id="q1OptionB" name="question1" value="b">
                            <label for="q1OptionB">Nucleotide</label>
                        </div>
                        <div>
                            <input type="radio" id="q1OptionC" name="question1" value="c">
                            <label for="q1OptionC">Chromosome</label>
                        </div>
                        <div>
                            <input type="radio" id="q1OptionD" name="question1" value="d">
                            <label for="q1OptionD">Enzyme</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="2" style="display: none;">
                        <h2>Which scientist is known as the "Father of Genetics"?</h2>
                        <div>
                            <input type="radio" id="q2OptionA" name="question2" value="a">
                            <label for="q2OptionA">Charles Darwin</label>
                        </div>
                        <div>
                            <input type="radio" id="q2OptionB" name="question2" value="b">
                            <label for="q2OptionB">Gregor Mendel</label>
                        </div>
                        <div>
                            <input type="radio" id="q2OptionC" name="question2" value="c">
                            <label for="q2OptionC">Watson and Crick</label>
                        </div>
                        <div>
                            <input type="radio" id="q2OptionD" name="question2" value="d">
                            <label for="q2OptionD">Rosalind Franklin</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="3" style="display: none;">
                        <h2>What is the term for an observable trait that is the result of gene expression?</h2>
                        <div>
                            <input type="radio" id="q3OptionA" name="question3" value="a">
                            <label for="q3OptionA">Genotype</label>
                        </div>
                        <div>
                            <input type="radio" id="q3OptionB" name="question3" value="b">
                            <label for="q3OptionB">Phenotype</label>
                        </div>
                        <div>
                            <input type="radio" id="q3OptionC" name="question3" value="c">
                            <label for="q3OptionC">Homozygote</label>
                        </div>
                        <div>
                            <input type="radio" id="q3OptionD" name="question3" value="d">
                            <label for="q3OptionD">Heterozygote</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="4" style="display: none;">
                        <h2>What is the probability of getting a homozygous recessive offspring from a cross between two heterozygous individuals?</h2>
                        <div>
                            <input type="radio" id="q4OptionA" name="question4" value="a">
                            <label for="q4OptionA">25%</label>
                        </div>
                        <div>
                            <input type="radio" id="q4OptionB" name="question4" value="b">
                            <label for="q4OptionB">50%</label>
                        </div>
                        <div>
                            <input type="radio" id="q4OptionC" name="question4" value="c">
                            <label for="q4OptionC">75%</label>
                        </div>
                        <div>
                            <input type="radio" id="q4OptionD" name="question4" value="d">
                            <label for="q4OptionD">100%</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="5" style="display: none;">
                        <h2>Which of the following is an example of a sex-linked trait?</h2>
                        <div>
                            <input type="radio" id="q5OptionA" name="question5" value="a">
                            <label for="q5OptionA">Eye color</label>
                        </div>
                        <div>
                            <input type="radio" id="q5OptionB" name="question5" value="b">
                            <label for="q5OptionB">Blood type</label>
                        </div>
                        <div>
                            <input type="radio" id="q5OptionC" name="question5" value="c">
                            <label for="q5OptionC">Hemophilia</label>
                        </div>
                        <div>
                            <input type="radio" id="q5OptionD" name="question5" value="d">
                            <label for="q5OptionD">Height</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="6" style="display: none;">
                        <h2>What is the term for the likelihood that a particular event will occur, such as the chance of inheriting a specific genetic trait?</h2>
                        <div>
                            <input type="radio" id="q6OptionA" name="question6" value="a">
                            <label for="q6OptionA">Frequency</label>
                        </div>
                        <div>
                            <input type="radio" id="q6OptionB" name="question6" value="b">
                            <label for="q6OptionB">Ratio</label>
                        </div>
                        <div>
                            <input type="radio" id="q6OptionC" name="question6" value="c">
                            <label for="q6OptionC">Probability</label>
                        </div>
                        <div>
                            <input type="radio" id="q6OptionD" name="question6" value="d">
                            <label for="q6OptionD">Inheritance index</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="7" style="display: none;">
                        <h2>What is the basic structural and functional unit of all living organisms?</h2>
                        <div>
                            <input type="radio" id="q7OptionA" name="question7" value="a">
                            <label for="q7OptionA">Tissue</label>
                        </div>
                        <div>
                            <input type="radio" id="q7OptionB" name="question7" value="b">
                            <label for="q7OptionB">Cell</label>
                        </div>
                        <div>
                            <input type="radio" id="q7OptionC" name="question7" value="c">
                            <label for="q7OptionC">Organ</label>
                        </div>
                        <div>
                            <input type="radio" id="q7OptionD" name="question7" value="d">
                            <label for="q7OptionD">Organism</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="8" style="display: none;">
                        <h2>Which organelle is responsible for the production of ATP, the energy currency of the cell?</h2>
                        <div>
                            <input type="radio" id="q8OptionA" name="question8" value="a">
                            <label for="q8OptionA">Nucleus</label>
                        </div>
                        <div>
                            <input type="radio" id="q8OptionB" name="question8" value="b">
                            <label for="q8OptionB">Golgi apparatus</label>
                        </div>
                        <div>
                            <input type="radio" id="q8OptionC" name="question8" value="c">
                            <label for="q8OptionC">Mitochondrion</label>
                        </div>
                        <div>
                            <input type="radio" id="q8OptionD" name="question8" value="d">
                            <label for="q8OptionD">Endoplasmic reticulum</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="9" style="display: none;">
                        <h2>Which type of cell division is responsible for the growth and repair of multicellular organisms?</h2>
                        <div>
                            <input type="radio" id="q9OptionA" name="question9" value="a">
                            <label for="q9OptionA">Mitosis</label>
                        </div>
                        <div>
                            <input type="radio" id="q9OptionB" name="question9" value="b">
                            <label for="q9OptionB">Meiosis</label>
                        </div>
                        <div>
                            <input type="radio" id="q9OptionC" name="question9" value="c">
                            <label for="q9OptionC">Binary fission</label>
                        </div>
                        <div>
                            <input type="radio" id="q9OptionD" name="question9" value="d">
                            <label for="q9OptionD">Budding</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="10" style="display: none;">
                        <h2>What is the function of the endoplasmic reticulum?</h2>
                        <div>
                            <input type="radio" id="q10OptionA" name="question10" value="a">
                            <label for="q10OptionA">Synthesis of proteins</label>
                        </div>
                        <div>
                            <input type="radio" id="q10OptionB" name="question10" value="b">
                            <label for="q10OptionB">Synthesis of lipids</label>
                        </div>
                        <div>
                            <input type="radio" id="q10OptionC" name="question10" value="c">
                            <label for="q10OptionC">Modification and packaging of proteins</label>
                        </div>
                        <div>
                            <input type="radio" id="q10OptionD" name="question10" value="d">
                            <label for="q10OptionD">Both a and b</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="11" style="display: none;">
                        <h2>Which cellular structure contains the genetic material and controls cell activities?</h2>
                        <div>
                            <input type="radio" id="q11OptionA" name="question11" value="a">
                            <label for="q11OptionA">Ribosome</label>
                        </div>
                        <div>
                            <input type="radio" id="q11OptionB" name="question11" value="b">
                            <label for="q11OptionB">Nucleus</label>
                        </div>
                        <div>
                            <input type="radio" id="q11OptionC" name="question11" value="c">
                            <label for="q11OptionC">Lysosome</label>
                        </div>
                        <div>
                            <input type="radio" id="q11OptionD" name="question11" value="d">
                            <label for="q11OptionD">Centriole</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="12" style="display: none;">
                        <h2>In which phase of the cell cycle does DNA replication occur?</h2>
                        <div>
                            <input type="radio" id="q12OptionA" name="question12" value="a">
                            <label for="q12OptionA">G1 phase</label>
                        </div>
                        <div>
                            <input type="radio" id="q12OptionB" name="question12" value="b">
                            <label for="q12OptionB">S phase</label>
                        </div>
                        <div>
                            <input type="radio" id="q12OptionC" name="question12" value="c">
                            <label for="q12OptionC">G2 phase</label>
                        </div>
                        <div>
                            <input type="radio" id="q12OptionD" name="question12" value="d">
                            <label for="q12OptionD">M phase</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="13" style="display: none;">
                        <h2>What cellular structure is responsible for breaking down and recycling cellular waste and debris?</h2>
                        <div>
                            <input type="radio" id="q13OptionA" name="question13" value="a">
                            <label for="q13OptionA">Nucleus</label>
                        </div>
                        <div>
                            <input type="radio" id="q13OptionB" name="question13" value="b">
                            <label for="q13OptionB">Lysosome</label>
                        </div>
                        <div>
                            <input type="radio" id="q13OptionC" name="question13" value="c">
                            <label for="q13OptionC">Mitochondrion</label>
                        </div>
                        <div>
                            <input type="radio" id="q13OptionD" name="question13" value="d">
                            <label for="q13OptionD">Ribosome</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="14" style="display: none;">
                        <h2>Which cellular process allows cells to generate ATP in the absence of oxygen?</h2>
                        <div>
                            <input type="radio" id="q14OptionA" name="question14" value="a">
                            <label for="q14OptionA">Glycolysis</label>
                        </div>
                        <div>
                            <input type="radio" id="q14OptionB" name="question14" value="b">
                            <label for="q14OptionB">Photosynthesis</label>
                        </div>
                        <div>
                            <input type="radio" id="q14OptionC" name="question14" value="c">
                            <label for="q14OptionC">Krebs cycle</label>
                        </div>
                        <div>
                            <input type="radio" id="q14OptionD" name="question14" value="d">
                            <label for="q14OptionD">Electron transport chain</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="15" style="display: none;">
                        <h2>What is the study of the interactions between organisms and their environment?</h2>
                        <div>
                            <input type="radio" id="q15OptionA" name="question15" value="a">
                            <label for="q15OptionA">Geology</label>
                        </div>
                        <div>
                            <input type="radio" id="q15OptionB" name="question15" value="b">
                            <label for="q15OptionB">Ecology</label>
                        </div>
                        <div>
                            <input type="radio" id="q15OptionC" name="question15" value="c">
                            <label for="q15OptionC">Meteorology</label>
                        </div>
                        <div>
                            <input type="radio" id="q15OptionD" name="question15" value="d">
                            <label for="q15OptionD">Anthropology</label>
                        </div>
                        <div class="submit-btn">
                            <button type="button" onclick="checkAnswers()">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('form').addEventListener('submit', function (event) {
                event.preventDefault();
                checkAnswers();
            });
        });

        function checkAnswers() {
            var correctAnswers = ['b', 'b', 'b', 'a', 'c', 'c', 'b', 'c', 'a', 'd', 'b', 'b' , 'b' , 'a', 'b']; //change this
            var score = 0;

            for (var i = 1; i <= 15; i++) {
                var selectedOption = document.querySelector('input[name="question' + i + '"]:checked');

                if (selectedOption) {
                    if (selectedOption.value === correctAnswers[i - 1]) {
                        score++;
                    }
                }
            }

            <?php
            $_SESSION['sci_quiz4_completed'] = true;
            ?>
            
            if (score >= 11) {
                Swal.fire({
                    title: 'Congratulations!',
                    text: 'You have passed with a score of ' + score + '/15.',
                    icon: 'success'
                }).then(() => {
                    // Redirect to math.php after displaying the success message
                    window.location.href = 'science.php';
                });
                
            } else {
                Swal.fire({
                    title: 'Sorry!',
                    text: 'You did not pass. Your score is ' + score + '/15. Please try again.',
                    icon: 'error'
                }).then(() => {
                    location.reload();
                });
            }
        }
    </script>
</body>
</html>