<!DOCTYPE html>
<html>
<head>
  <title>Java MCQ Test Series</title>
  <style>
    .question {
      margin-bottom: 10px;
    }

    .question label {
      display: block;
      font-weight: bold;
    }

    .submit-btn {
      margin-top: 10px;
    }

    .result {
      margin-top: 20px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h1>Java MCQ Test Series</h1>
  <form id="quiz-form">
    <div class="question">
      <label for="q1">Question 1:Which of the following is not a Java features?<br></label>
      <input type="radio" name="q1" value="a" required> a) Dynamic<br>
      <input type="radio" name="q1" value="b">b) Architecture neutral<br>
      <input type="radio" name="q1" value="c"> c) Use of pointers
      <br>
      <input type="radio" name="q1" value="d">d)object-oriented<br>
    </div>
    <div class="question">
      <label for="q2">Question 2:____ is used to find and fix bugs in the Java programs.</label>
      <input type="radio" name="q2" value="a" required> a)JVM<br>
      <input type="radio" name="q2" value="b">b)JRE<br>
      <input type="radio" name="q2" value="c"> c)JDK<br>
      <input type="radio" name="q2" value="d"> d)JDB<br>
    </div>
    <!-- Add more questions here -->
    <div class="question">
        <label for="q3">Question 3:What is the return type of the hashCode() method in the Object class? </label>
        <input type="radio" name="q3" value="a" required> a)object<br>
        <input type="radio" name="q3" value="b">b)int<br>
        <input type="radio" name="q3" value="c"> c)long<br>
        <input type="radio" name="q3" value="d"> d)void<br>
      </div>
      <div class="question">
        <label for="q4">Question 4:Which of the following tool is used to generate API documentation in HTML format from doc comments in source code? </label>
        <input type="radio" name="q4" value="a" required> a)javaw command<br>
        <input type="radio" name="q4" value="b">b)javap tool<br>
        <input type="radio" name="q4" value="c"> c)javadoc tool<br>
        <input type="radio" name="q4" value="d"> d)javah command<br>
      </div>
      <div class="question">
        <label for="q5">Question 5:  Which of the following creates a List of 3 visible items and multiple selections abled?</label>
        <input type="radio" name="q5" value="a" required> a)new List(false, 3)<br>
        <input type="radio" name="q5" value="b"> b)new List(3,true)<br>
        <input type="radio" name="q5" value="c"> c)new List(true, 3)<br>
        <input type="radio" name="q5" value="d"> d)new List(3, false)<br>
      </div>
      <div class="question">
        <label for="q6">Question 6:In which process, a local variable has the same name as one of the instance variables?
        </label>
        <input type="radio" name="q6" value="a" required> a)Serialization<br>
        <input type="radio" name="q6" value="b">b)Variable Shadowing<br>
        <input type="radio" name="q6" value="c"> c)Abstraction
        <br>
        <input type="radio" name="q6" value="d"> d)multi-threading<br>
      </div>
      <div class="question">
        <label for="q7">Question 7: What do you mean by nameless objects?
        </label>
        <input type="radio" name="q7" value="a" required> a)An object created by using the new keyword.<br>
        <input type="radio" name="q7" value="b">b)An object of a superclass created in the subclass<br>
        <input type="radio" name="q7" value="c"> c)An object without having any name but having a reference.<br>
        <input type="radio" name="q7" value="d"> d)An object that has no reference.
        <br>
      </div>
      <div class="question">
        <label for="q8">Question 8: Which of these classes are the direct subclasses of the Throwable class?
        </label>
        <input type="radio" name="q8" value="a" required> a) RuntimeException and Error class<br>
        <input type="radio" name="q8" value="b">b)Exception and VirtualMachineError clas<br>
        <input type="radio" name="q8" value="c"> c)Error and Exception class<br>
        <input type="radio" name="q8" value="d"> d)IOException and VirtualMachineError class<br>
      </div>
      <div class="question">
        <label for="q9">Question 9: What is the use of the intern() method?
        </label>
        <input type="radio" name="q9" value="a" required> a)It returns the existing string from memory<br>
        <input type="radio" name="q9" value="b"> b)It creates a new string in the database<br>
        <input type="radio" name="q9" value="c"> c)It modifies the existing string in the database<br>
        <input type="radio" name="q9" value="d"> d)none of these mentioned<br>
      </div>
      <div class="question">
        <label for="q10">Question 10: Which of the given methods are of Object class?
        </label>
        <input type="radio" name="q10" value="a" required> a)notify(), wait( long msecs ), and synchronized() <br>
        <input type="radio" name="q10" value="b"> b)wait( long msecs ), interrupt(), and notifyAll()<br>
        <input type="radio" name="q10" value="c"> c)notify(), notifyAll(), and wait()<br>
        <input type="radio" name="q10" value="d"> d)sleep( long msecs ), wait(), and notify()<br>
      </div>

    <button type="submit" class="submit-btn">Submit</button>
  </form>

  <div id="result" class="result"></div>

  <script>
    document.getElementById('quiz-form').addEventListener('submit', function(event) {
      event.preventDefault();

      // Store the correct answers here
      const correctAnswers = {
        q1: 'c',
        q2: 'd',
        q3: 'b',
        q4: 'c',
        q5:'b',
        q6:'b',
        q7:'d',
        q8:'c',
        q9:'a',
        q10:'c',
        // Add more correct answers here
      };

      const solutions = {
        q1: 'Explanation:One of the major factors of not using pointers in Java is security concerns. Due to pointers, most of the users consider C-language very confusing and complex. This is the reason why Green Team (Java Team members) has not introduced pointers in Java.',
        q2: 'Explanation: he JVM (Java Virtual Machine) enables a computer to run Java or other language (kotlin, groovy, Scala, etc.) programs that are compiled to the Java bytecode. The JRE (Java Runtime Environment) is a part of JDK that contains the Java class libraries, Java class loader, and the Java Virtual Machine. The JDK (Java Development Kit) is a software development environment used to develop Java applications and applets. ',
        q3: 'Explanation:In Java, the return type of hashCode() method is an integer, as it returns a hash code value for the object.',
        q4:'Explanation:The javap tool is used to get the information of any class or interface. It is also known as a disassembler. The javaw command is identical to java that displays a window with error information, and the javah command is used to generate native method functions.',
        q5: 'Explanation:From the above statements, the new List(3, true) is the correct answer; this is because of the constructor type. To create a list of 3 visible items along with the multiple selections abled, we have to use the following constructor of the List class.',
        q6:'Explanation:When we define a variable in a local scope with a variable name same as the name of a variable defined in an instance scope.',
        q7:'Explanation:The nameless objects are basically referred to as anonymous objects. The anonymous objects do not have any names. We can also say that, when an object is initialized but is not assigned to any reference variable, it is called an anonymous object. ',
        q8:'Explanation: According to the class hierarchy of Throwable class, the Error and Exception classes are the direct subclasses of the Throwable class',
        q9:'Explanation:The intern() method is used to return the existing strings from the database. In other words, the intern() method returns a reference of the string. For example, if the string constant pool already has a string object with the same value, the intern() method will return a reference of the string from the pool.',
        q10:'Explanation:',
        // Add more solutions here
      };

      const formData = new FormData(event.target);
      let score = 0;
      let solutionHTML = '';

      for (const [key, value] of formData.entries()) {
        if (correctAnswers[key] === value) {
          score++;
        }
        solutionHTML += `<p><strong>Question ${key.slice(1)}:</strong> ${solutions[key]}</p>`;
      }

      const resultElement = document.getElementById('result');
      resultElement.innerHTML = `<p>Your score: ${score}/${Object.keys(correctAnswers).length}</p>`;
      resultElement.innerHTML += solutionHTML;
    });
  </script>
</body>
</html>