<?php
session_start();
if (!isset($_SESSION['sci_quiz1_completed']) || !$_SESSION['sci_quiz1_completed']) {
    // Set it to true only if the user passes the quiz
    $_SESSION['sci_quiz1_completed'] = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EARTH-SCI QUIZ</title>
    <link rel="stylesheet" href="../../Content/css/style-courses.css">
    <script src="../../js/courses.js"></script>
</head>
<body>
    <div class="quiz-container">
        <div class="questionnaire">
            <form id="quiz-form" method="post">
                <div class="options-container" id="question-container">
                    <h1>EARTH SCIENCE QUIZ</h1>
                    <p>Let's Test Your Knowledge to Unlock the Next Topic.</p>
                    <div class="question" data-number="1" style="display: block;">
                        <h2>What is the outermost layer of the Earth, composed of solid rock that includes the continents and ocean floor?</h2>
                        <div>
                            <input type="radio" id="q1OptionA" name="question1" value="a">
                            <label for="q1OptionA">Crust</label>
                        </div>
                        <div>
                            <input type="radio" id="q1OptionB" name="question1" value="b">
                            <label for="q1OptionB">Mantle</label>
                        </div>
                        <div>
                            <input type="radio" id="q1OptionC" name="question1" value="c">
                            <label for="q1OptionC">Outer core</label>
                        </div>
                        <div>
                            <input type="radio" id="q1OptionD" name="question1" value="d">
                            <label for="q1OptionD">Inner core</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="2" style="display: none;">
                        <h2>The lithosphere is composed of the Earth's crust and the upper part of which other layer?</h2>
                        <div>
                            <input type="radio" id="q2OptionA" name="question2" value="a">
                            <label for="q2OptionA">Asthenosphere</label>
                        </div>
                        <div>
                            <input type="radio" id="q2OptionB" name="question2" value="b">
                            <label for="q2OptionB">Mesosphere</label>
                        </div>
                        <div>
                            <input type="radio" id="q2OptionC" name="question2" value="c">
                            <label for="q2OptionC">Outer core</label>
                        </div>
                        <div>
                            <input type="radio" id="q2OptionD" name="question2" value="d">
                            <label for="q2OptionD">Inner core</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="3" style="display: none;">
                        <h2>What boundary separates the Earth's crust into tectonic plates that move over the semi-fluid asthenosphere?</h2>
                        <div>
                            <input type="radio" id="q3OptionA" name="question3" value="a">
                            <label for="q3OptionA">Convergent boundary</label>
                        </div>
                        <div>
                            <input type="radio" id="q3OptionB" name="question3" value="b">
                            <label for="q3OptionB">Divergent boundary</label>
                        </div>
                        <div>
                            <input type="radio" id="q3OptionC" name="question3" value="c">
                            <label for="q3OptionC">Transform boundary</label>
                        </div>
                        <div>
                            <input type="radio" id="q3OptionD" name="question3" value="d">
                            <label for="q3OptionD">Subduction boundary</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>


                    <div class="question" data-number="4" style="display: none;">
                        <h2>Which layer of the Earth is responsible for generating the planet's magnetic field?</h2>
                        <div>
                            <input type="radio" id="q4OptionA" name="question4" value="a">
                            <label for="q4OptionA">Crust</label>
                        </div>
                        <div>
                            <input type="radio" id="q4OptionB" name="question4" value="b">
                            <label for="q4OptionB">Mantle</label>
                        </div>
                        <div>
                            <input type="radio" id="q4OptionC" name="question4" value="c">
                            <label for="q4OptionC">Outer core</label>
                        </div>
                        <div>
                            <input type="radio" id="q4OptionD" name="question4" value="d">
                            <label for="q4OptionD">Inner core</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="5" style="display: none;">
                        <h2>What type of seismic waves can travel through both solids and liquids, providing evidence for the existence of the Earth's liquid outer core?</h2>
                        <div>
                            <input type="radio" id="q5OptionA" name="question5" value="a">
                            <label for="q5OptionA">P-waves (primary waves)</label>
                        </div>
                        <div>
                            <input type="radio" id="q5OptionB" name="question5" value="b">
                            <label for="q5OptionB">S-waves (secondary waves)</label>
                        </div>
                        <div>
                            <input type="radio" id="q5OptionC" name="question5" value="c">
                            <label for="q5OptionC">Surface waves</label>
                        </div>
                        <div>
                            <input type="radio" id="q5OptionD" name="question5" value="d">
                            <label for="q5OptionD">Love waves</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="6" style="display: none;">
                        <h2>The Mohorovičić discontinuity (Moho) is the boundary between which layers of the Earth?</h2>
                        <div>
                            <input type="radio" id="q6OptionA" name="question6" value="a">
                            <label for="q6OptionA">Crust and mantle</label>
                        </div>
                        <div>
                            <input type="radio" id="q6OptionB" name="question6" value="b">
                            <label for="q6OptionB">Mantle and outer core</label>
                        </div>
                        <div>
                            <input type="radio" id="q6OptionC" name="question6" value="c">
                            <label for="q6OptionC">Outer core and inner core</label>
                        </div>
                        <div>
                            <input type="radio" id="q6OptionD" name="question6" value="d">
                            <label for="q6OptionD">Lithosphere and asthenosphere</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="7" style="display: none;">
                        <h2>Which type of rock is primarily found in the Earth's mantle?</h2>
                        <div>
                            <input type="radio" id="q7OptionA" name="question7" value="a">
                            <label for="q7OptionA">Basalt</label>
                        </div>
                        <div>
                            <input type="radio" id="q7OptionB" name="question7" value="b">
                            <label for="q7OptionB">Granite</label>
                        </div>
                        <div>
                            <input type="radio" id="q7OptionC" name="question7" value="c">
                            <label for="q7OptionC">Obsidian</label>
                        </div>
                        <div>
                            <input type="radio" id="q7OptionD" name="question7" value="d">
                            <label for="q7OptionD">Gneiss</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="8" style="display: none;">
                        <h2>What term describes the large-scale motion of pieces of the Earth's lithosphere?</h2>
                        <div>
                            <input type="radio" id="q8OptionA" name="question8" value="a">
                            <label for="q8OptionA">Plate tectonics</label>
                        </div>
                        <div>
                            <input type="radio" id="q8OptionB" name="question8" value="b">
                            <label for="q8OptionB">Seismic activity</label>
                        </div>
                        <div>
                            <input type="radio" id="q8OptionC" name="question8" value="c">
                            <label for="q8OptionC">Earthquakes</label>
                        </div>
                        <div>
                            <input type="radio" id="q8OptionD" name="question8" value="d">
                            <label for="q8OptionD">Volcanism</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="9" style="display: none;">
                        <h2>At convergent plate boundaries, what typically happens between tectonic plates?</h2>
                        <div>
                            <input type="radio" id="q9OptionA" name="question9" value="a">
                            <label for="q9OptionA">They move apart.</label>
                        </div>
                        <div>
                            <input type="radio" id="q9OptionB" name="question9" value="b">
                            <label for="q9OptionB">They slide past each other.</label>
                        </div>
                        <div>
                            <input type="radio" id="q9OptionC" name="question9" value="c">
                            <label for="q9OptionC">They collide and one is subducted beneath the other.</label>
                        </div>
                        <div>
                            <input type="radio" id="q9OptionD" name="question9" value="d">
                            <label for="q9OptionD">They form transform faults.</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="10" style="display: none;">
                        <h2>What geological feature is formed when two tectonic plates move past each other horizontally?</h2>
                        <div>
                            <input type="radio" id="q10OptionA" name="question10" value="a">
                            <label for="q10OptionA">Mid-ocean ridge</label>
                        </div>
                        <div>
                            <input type="radio" id="q10OptionB" name="question10" value="b">
                            <label for="q10OptionB">Subduction zone</label>
                        </div>
                        <div>
                            <input type="radio" id="q10OptionC" name="question10" value="c">
                            <label for="q10OptionC">Rift valley</label>
                        </div>
                        <div>
                            <input type="radio" id="q10OptionD" name="question10" value="d">
                            <label for="q10OptionD">Transform fault</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="11" style="display: none;">
                        <h2>What term describes the bending or deformation of the Earth's crust due to the movement of tectonic plates?</h2>
                        <div>
                            <input type="radio" id="q11OptionA" name="question11" value="a">
                            <label for="q11OptionA">Subduction</label>
                        </div>
                        <div>
                            <input type="radio" id="q11OptionB" name="question11" value="b">
                            <label for="q11OptionB">Folding</label>
                        </div>
                        <div>
                            <input type="radio" id="q11OptionC" name="question11" value="c">
                            <label for="q11OptionC">Faulting</label>
                        </div>
                        <div>
                            <input type="radio" id="q11OptionD" name="question11" value="d">
                            <label for="q11OptionD">Rifting</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="12" style="display: none;">
                        <h2>Which process involves the sinking of one tectonic plate beneath another into the Earth's mantle?</h2>
                        <div>
                            <input type="radio" id="q12OptionA" name="question12" value="a">
                            <label for="q12OptionA">Seafloor spreading</label>
                        </div>
                        <div>
                            <input type="radio" id="q12OptionB" name="question12" value="b">
                            <label for="q12OptionB">Subduction</label>
                        </div>
                        <div>
                            <input type="radio" id="q12OptionC" name="question12" value="c">
                            <label for="q12OptionC">Rift valley formation</label>
                        </div>
                        <div>
                            <input type="radio" id="q12OptionD" name="question12" value="d">
                            <label for="q12OptionD">Transform faulting</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="13" style="display: none;">
                        <h2>What is the driving force behind the movement of tectonic plates?</h2>
                        <div>
                            <input type="radio" id="q13OptionA" name="question13" value="a">
                            <label for="q13OptionA">Gravitational pull</label>
                        </div>
                        <div>
                            <input type="radio" id="q13OptionB" name="question13" value="b">
                            <label for="q13OptionB">Solar radiation</label>
                        </div>
                        <div>
                            <input type="radio" id="q13OptionC" name="question13" value="c">
                            <label for="q13OptionC">Mantle convection currents</label>
                        </div>
                        <div>
                            <input type="radio" id="q13OptionD" name="question13" value="d">
                            <label for="q13OptionD">Earth's magnetic field</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="14" style="display: none;">
                        <h2>What is the primary cause of most earthquakes?</h2>
                        <div>
                            <input type="radio" id="q14OptionA" name="question14" value="a">
                            <label for="q14OptionA">Volcanic activity</label>
                        </div>
                        <div>
                            <input type="radio" id="q14OptionB" name="question14" value="b">
                            <label for="q14OptionB">Plate tectonics</label>
                        </div>
                        <div>
                            <input type="radio" id="q14OptionC" name="question14" value="c">
                            <label for="q14OptionC">Meteorite impact</label>
                        </div>
                        <div>
                            <input type="radio" id="q14OptionD" name="question14" value="d">
                            <label for="q14OptionD">Human activities</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="15" style="display: none;">
                        <h2>Which type of seismic wave arrives first at a seismograph station and can travel through both solids and liquids?</h2>
                        <div>
                            <input type="radio" id="q15OptionA" name="question15" value="a">
                            <label for="q15OptionA">P-waves (primary waves)</label>
                        </div>
                        <div>
                            <input type="radio" id="q15OptionB" name="question15" value="b">
                            <label for="q15OptionB">S-waves (secondary waves)</label>
                        </div>
                        <div>
                            <input type="radio" id="q15OptionC" name="question15" value="c">
                            <label for="q15OptionC">Love waves</label>
                        </div>
                        <div>
                            <input type="radio" id="q15OptionD" name="question15" value="d">
                            <label for="q15OptionD">Rayleigh waves</label>
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
            var correctAnswers = ['a', 'a', 'c', 'c', 'a', 'a', 'a', 'a', 'c', 'd', 'b', 'b', 'c', 'b', 'a'];
            var score = 0;

            for (var i = 1; i <= 15; i++) {
                var selectedOption = document.querySelector('input[name="question' + i + '"]:checked');

                if (selectedOption) {
                    if (selectedOption.value === correctAnswers[i - 1]) {
                        score++;
                    }
                }
            }

            if (score >= 11) {
                // Only set to true if the user passes the quiz
                <?php $_SESSION['sci_quiz1_completed'] = true; ?>
                Swal.fire({
                    title: 'Congratulations!',
                    text: 'You have passed with a score of ' + score + '/15.',
                    icon: 'success'
                }).then(() => {
                    // Redirect to science.php after displaying the success message
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