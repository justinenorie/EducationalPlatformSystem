<?php
session_start();
if (!isset($_SESSION['eng_quiz1_completed'])) { //changes
    // Set it to true only if the user passes the quiz
    $_SESSION['eng_quiz1_completed'] = true; //changes
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATH QUIZ</title>
    <link rel="stylesheet" href="../../Content/css/style-courses.css">
    <script src="../../js/courses.js"></script>
</head>
<body>
    <div class="quiz-container">
        <div class="questionnaire">
        
            <form id="quiz-form" method="post">
                <div class="options-container" id="question-container">
                    <h1>21ST CENTURY QUIZ</h1>
                    <p>Let's Test Your Knowledge to Unlock the Next Topic.</p>
                    <div class="question" data-number="1" style="display: block;">
                        <h2>The products of written literature are called</h2>
                        <div>
                            <input type="radio" id="q1OptionA" name="question1" value="a">
                            <label for="q1OptionA">Literary Structure</label>
                        </div>
                        <div>
                            <input type="radio" id="q1OptionB" name="question1" value="b">
                            <label for="q1OptionB">Literary Text</label>
                        </div>
                        <div>
                            <input type="radio" id="q1OptionC" name="question1" value="c">
                            <label for="q1OptionC">Literature</label>
                        </div>
                        <div>
                            <input type="radio" id="q1OptionD" name="question1" value="d">
                            <label for="q1OptionD">Literary Elements</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="2" style="display: none;">
                        <h2>It is traditionally defined as the body of written works associated with imaginative and creative works of poetry and prose and can be classified according to a variety of systems such as language, national origin, historical period, genre, and subject matter.</h2>
                        <div>
                            <input type="radio" id="q2OptionA" name="question2" value="a">
                            <label for="q2OptionA">Literary Structure</label>
                        </div>
                        <div>
                            <input type="radio" id="q2OptionB" name="question2" value="b">
                            <label for="q2OptionB">Literary Text</label>
                        </div>
                        <div>
                            <input type="radio" id="q2OptionC" name="question2" value="c">
                            <label for="q2OptionC">Literature</label>
                        </div>
                        <div>
                            <input type="radio" id="q2OptionD" name="question2" value="d">
                            <label for="q2OptionD">Literary Elements</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="3" style="display: none;">
                        <h2>This literary type is usually written in lines and is characterized by having the element of rhythm, sound, imagery, and form.</h2>
                        <div>
                            <input type="radio" id="q3OptionA" name="question3" value="a">
                            <label for="q3OptionA">Genre</label>
                        </div>
                        <div>
                            <input type="radio" id="q3OptionB" name="question3" value="b">
                            <label for="q3OptionB">Fiction</label>
                        </div>
                        <div>
                            <input type="radio" id="q3OptionC" name="question3" value="c">
                            <label for="q3OptionC">Prose</label>
                        </div>
                        <div>
                            <input type="radio" id="q3OptionD" name="question3" value="d">
                            <label for="q3OptionD">Poetry</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="4" style="display: none;">
                        <h2>It refers to the forms of literature.</h2>
                        <div>
                            <input type="radio" id="q4OptionA" name="question4" value="a">
                            <label for="q4OptionA">Genre</label>
                        </div>
                        <div>
                            <input type="radio" id="q4OptionB" name="question4" value="b">
                            <label for="q4OptionB">Fiction</label>
                        </div>
                        <div>
                            <input type="radio" id="q4OptionC" name="question4" value="c">
                            <label for="q4OptionC">Prose</label>
                        </div>
                        <div>
                            <input type="radio" id="q4OptionD" name="question4" value="d">
                            <label for="q4OptionD">Poetry</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="5" style="display: none;">
                        <h2>This literary piece applies a natural flow of speech and grammatical structures which are mainly consisting of complete sentences arranged logically and sequentially in a paragraph form.</h2>
                        <div>
                            <input type="radio" id="q5OptionA" name="question5" value="a">
                            <label for="q5OptionA">Genre</label>
                        </div>
                        <div>
                            <input type="radio" id="q5OptionB" name="question5" value="b">
                            <label for="q5OptionB">Fiction</label>
                        </div>
                        <div>
                            <input type="radio" id="q5OptionC" name="question5" value="c">
                            <label for="q5OptionC">Prose</label>
                        </div>
                        <div>
                            <input type="radio" id="q5OptionD" name="question5" value="d">
                            <label for="q5OptionD">Poetry</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="6" style="display: none;">
                        <h2>Refers to the specific traits of literary works that define a generation or period in history.</h2>
                        <div>
                            <input type="radio" id="q6OptionA" name="question6" value="a">
                            <label for="q6OptionA">Fiction</label>
                        </div>
                        <div>
                            <input type="radio" id="q6OptionB" name="question6" value="b">
                            <label for="q6OptionB">Literature</label>
                        </div>
                        <div>
                            <input type="radio" id="q6OptionC" name="question6" value="c">
                            <label for="q6OptionC">Prose</label>
                        </div>
                        <div>
                            <input type="radio" id="q6OptionD" name="question6" value="d">
                            <label for="q6OptionD">Tradition</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="7" style="display: none;">
                        <h2>This poetry tells a story and has the elements of a narrative such as characters, setting, conflict, etc.</h2>
                        <div>
                            <input type="radio" id="q7OptionA" name="question7" value="a">
                            <label for="q7OptionA">Narrative Poetry</label>
                        </div>
                        <div>
                            <input type="radio" id="q7OptionB" name="question7" value="b">
                            <label for="q7OptionB">Dramatic Poetry</label>
                        </div>
                        <div>
                            <input type="radio" id="q7OptionC" name="question7" value="c">
                            <label for="q7OptionC">Lyrical Poetry</label>
                        </div>
                        <div>
                            <input type="radio" id="q7OptionD" name="question7" value="d">
                            <label for="q7OptionD">Lyric Poetry</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="8" style="display: none;">
                        <h2>It is the most common type of poetry that focuses on expressing feelings rather than telling a story.</h2>
                        <div>
                            <input type="radio" id="q8OptionA" name="question8" value="a">
                            <label for="q8OptionA">Narrative Poetry</label>
                        </div>
                        <div>
                            <input type="radio" id="q8OptionB" name="question8" value="b">
                            <label for="q8OptionB">Dramatic Poetry</label>
                        </div>
                        <div>
                            <input type="radio" id="q8OptionC" name="question8" value="c">
                            <label for="q8OptionC">Lyrical Poetry</label>
                        </div>
                        <div>
                            <input type="radio" id="q8OptionD" name="question8" value="d">
                            <label for="q8OptionD">Lyric Poetry</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="9" style="display: none;">
                        <h2>This is an emotionally appealing drama written in verse that tells a story and is intended to be recited or sung in front of the audience by a character speaking in poetry.</h2>
                        <div>
                            <input type="radio" id="q9OptionA" name="question9" value="a">
                            <label for="q9OptionA">Narrative Poetry</label>
                        </div>
                        <div>
                            <input type="radio" id="q9OptionB" name="question9" value="b">
                            <label for="q9OptionB">Dramatic Poetry</label>
                        </div>
                        <div>
                            <input type="radio" id="q9OptionC" name="question9" value="c">
                            <label for="q9OptionC">Lyrical Poetry</label>
                        </div>
                        <div>
                            <input type="radio" id="q9OptionD" name="question9" value="d">
                            <label for="q9OptionD">Lyric Poetry</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="10" style="display: none;">
                        <h2>These were songs modified based on the folkways of Filipinos during this period.</h2>
                        <div>
                            <input type="radio" id="q10OptionA" name="question10" value="a">
                            <label for="q10OptionA">Songs</label>
                        </div>
                        <div>
                            <input type="radio" id="q10OptionB" name="question10" value="b">
                            <label for="q10OptionB">Folk Songs</label>
                        </div>
                        <div>
                            <input type="radio" id="q10OptionC" name="question10" value="c">
                            <label for="q10OptionC">Novels</label>
                        </div>
                        <div>
                            <input type="radio" id="q10OptionD" name="question10" value="d">
                            <label for="q10OptionD">Books</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="11" style="display: none;">
                        <h2>These are fictitious prose usually lengthy and complex in nature.</h2>
                        <div>
                            <input type="radio" id="q11OptionA" name="question11" value="a">
                            <label for="q11OptionA">Songs</label>
                        </div>
                        <div>
                            <input type="radio" id="q11OptionB" name="question11" value="b">
                            <label for="q11OptionB">Folk Songs</label>
                        </div>
                        <div>
                            <input type="radio" id="q11OptionC" name="question11" value="c">
                            <label for="q11OptionC">Novels</label>
                        </div>
                        <div>
                            <input type="radio" id="q11OptionD" name="question11" value="d">
                            <label for="q11OptionD">Books</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="12" style="display: none;">
                        <h2>These were mostly poetic in nature and intended to be performed during the Spanish era.</h2>
                        <div>
                            <input type="radio" id="q12OptionA" name="question12" value="a">
                            <label for="q12OptionA">Plays</label>
                        </div>
                        <div>
                            <input type="radio" id="q12OptionB" name="question12" value="b">
                            <label for="q12OptionB">Folk Songs</label>
                        </div>
                        <div>
                            <input type="radio" id="q12OptionC" name="question12" value="c">
                            <label for="q12OptionC">Recreational Plays</label>
                        </div>
                        <div>
                            <input type="radio" id="q12OptionD" name="question12" value="d">
                            <label for="q12OptionD">Novels</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="13" style="display: none;">
                        <h2>These are a form of prose which deal with the origin of a thing, location or name.</h2>
                        <div>
                            <input type="radio" id="q13OptionA" name="question13" value="a">
                            <label for="q13OptionA">Folk Tales</label>
                        </div>
                        <div>
                            <input type="radio" id="q13OptionB" name="question13" value="b">
                            <label for="q13OptionB">Legends</label>
                        </div>
                        <div>
                            <input type="radio" id="q13OptionC" name="question13" value="c">
                            <label for="q13OptionC">Myths</label>
                        </div>
                        <div>
                            <input type="radio" id="q13OptionD" name="question13" value="d">
                            <label for="q13OptionD">Epics</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="14" style="display: none;">
                        <h2>These are stories which can be characterized as anonymous, timeless, and placeless tales circulated orally among a group of people.</h2>
                        <div>
                            <input type="radio" id="q14OptionA" name="question14" value="a">
                            <label for="q14OptionA">Folk Tales</label>
                        </div>
                        <div>
                            <input type="radio" id="q14OptionB" name="question14" value="b">
                            <label for="q14OptionB">Legends</label>
                        </div>
                        <div>
                            <input type="radio" id="q14OptionC" name="question14" value="c">
                            <label for="q14OptionC">Myths</label>
                        </div>
                        <div>
                            <input type="radio" id="q14OptionD" name="question14" value="d">
                            <label for="q14OptionD">Epics</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="15" style="display: none;">
                        <h2>These pertain to a type of a long narrative poem mainly focusing on the heroic achievements and deeds of the main character.</h2>
                        <div>
                            <input type="radio" id="q15OptionA" name="question15" value="a">
                            <label for="q15OptionA">Folk Tales</label>
                        </div>
                        <div>
                            <input type="radio" id="q15OptionB" name="question15" value="b">
                            <label for="q15OptionB">Legends</label>
                        </div>
                        <div>
                            <input type="radio" id="q15OptionC" name="question15" value="c">
                            <label for="q15OptionC">Myths</label>
                        </div>
                        <div>
                            <input type="radio" id="q15OptionD" name="question15" value="d">
                            <label for="q15OptionD">Epics</label>
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
            var correctAnswers = ['b', 'c', 'd', 'a', 'c', 'd', 'a', 'd', 'b', 'b', 'c', 'c' , 'b' , 'a', 'd']; //change this
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
            $_SESSION['eng_quiz1_completed'] = true;
            ?>
            
            if (score >= 11) {
                Swal.fire({
                    title: 'Congratulations!',
                    text: 'You have passed with a score of ' + score + '/15.',
                    icon: 'success'
                }).then(() => {
                    // Redirect to math.php after displaying the success message
                    window.location.href = 'english.php';
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