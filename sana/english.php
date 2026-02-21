<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English BacII 2022 - Exercises</title>
    <link rel="stylesheet" href="sub.css">
</head>
<body>

<div class="container">
    <h1>English BacII 2022 Exam Practice</h1>

    <div class="section">
        <h2>I. Grammar & Vocabulary</h2>
        
        <div class="question">
            1. If I ________ enough money, I would buy a new laptop for my online classes.
            <div class="options">
                A. have &nbsp;&nbsp; B. had &nbsp;&nbsp; C. will have &nbsp;&nbsp; D. am having
            </div>
            <button onclick="toggleAns('ans1')">Show Answer</button>
            <div id="ans1" class="solution">Answer: B. had (Conditional Sentence Type 2)</div>
        </div>

        <div class="question">
            2. Our teacher suggests ________ more time on reading English books.
            <div class="options">
                A. spend &nbsp;&nbsp; B. to spend &nbsp;&nbsp; C. spending &nbsp;&nbsp; D. spent
            </div>
            <button onclick="toggleAns('ans2')">Show Answer</button>
            <div id="ans2" class="solution">Answer: C. spending (Suggest + Gerund/V-ing)</div>
        </div>
    </div>

    <div class="section">
        <h2>II. Reading Comprehension (Topic: Plastic Pollution)</h2>
        <p class="reading-text"><i>"Plastic pollution has become one of the most pressing environmental issues, as rapidly increasing production of disposable plastic products overwhelms the world’s ability to deal with them..."</i></p>
        
        <div class="question">
            3. According to the text, what is the main cause of plastic pollution?
            <div class="options">
                A. Lack of plastic production <br>
                B. Rapidly increasing production of disposable plastic <br>
                C. The world's ability to clean oceans <br>
                D. Using too many glass bottles
            </div>
            <button onclick="toggleAns('ans3')">Show Answer</button>
            <div id="ans3" class="solution">Answer: B. Rapidly increasing production of disposable plastic</div>
        </div>
    </div>

    <div class="section">
        <h2>III. Writing Task (Essay)</h2>
        <p><b>Topic:</b> "The advantages and disadvantages of using smartphones in education."</p>
        <div class="structure-box">
            <strong>Structure Tip:</strong>
            <ul>
                <li>Introduction: Hook + Thesis statement</li>
                <li>Body 1: Advantages (Research, E-books)</li>
                <li>Body 2: Disadvantages (Distraction, Eye strain)</li>
                <li>Conclusion: Summary + Final opinion</li>
            </ul>
        </div>
    </div>
</div>

<script>
    function toggleAns(id) {
        var x = document.getElementById(id);
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>

</body>
</html>