document.addEventListener("DOMContentLoaded", function () {
  let currentQuestionNumber = 1;
  const totalQuestions = 5; // Adjust this based on the total number of questions

  function showNextQuestion() {
      // Hide the current question
      document.querySelector(`.question[data-number="${currentQuestionNumber}"]`).style.display = 'none';

      // Move to the next question
      currentQuestionNumber++;

      if (currentQuestionNumber <= totalQuestions) {
          // Show the next question
          document.querySelector(`.question[data-number="${currentQuestionNumber}"]`).style.display = 'block';
      } else {
          // Show submit button when all questions are answered
          document.querySelector('.next-btn').style.display = 'none';
          document.querySelector('.submit-btn').style.display = 'block';
      }
  }

  function checkAnswers() {
      // Your logic to check answers and calculate score goes here
      // Update the value of the hidden input field with the calculated score
      // Then submit the form
      document.getElementById('quiz-form').submit();
  }
});
