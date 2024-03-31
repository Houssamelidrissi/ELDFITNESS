<link rel="icon" href="{{ asset('image/ELD.png') }}" type="image/png">
<style>
    body {
        background-image: url("{{ asset('image/homepg.jpeg') }}");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    img {
        width: 300px;
    }

    span {
        font-size: 20px;
        font-weight: bold;
    }

    .container {
        margin: 80px;
        color: white;
        text-shadow: 2px 2px black;
        border: 2px solid black;
        border-radius: 15px;
        background-color: rgba(255, 255, 255, 0.4);
        padding: 20px;
    }

    .concluding-message {
        margin-top: 20px;
        text-align: center;
    }

    #bt:hover{
        font-size: 14px;
    }

</style>
<div class="container">
    <a href="{{ route('services') }}" style="text-decoration: none;">
    <button id="bt">⬅︎ Back to service</button>
    </a>
    <h1 style="text-decoration: underline; text-align:center">Back Exercises</h1>

    <!-- Exercise 1 -->
    <div>
        <h2><u>Deadlifts</u></h2>
        <img src="{{ asset('image/back/b1.gif') }}" alt="Deadlift Image" /><br />
        <span>🔴 Deadlifts target multiple muscles in the back, including the lower and upper back. Make sure to maintain proper form to avoid injuries.</span>
    </div>

    <!-- Exercise 2 -->
    <div>
        <h2><u>Pull-Ups</u></h2>
        <img src="{{ asset('image/back/b2.gif') }}" alt="Pull-Ups Image" /><br />
        <span>🔴 Pull-ups are excellent for targeting the upper back and lats. Use a wide grip for a broader back workout.</span>
    </div>

    <!-- Exercise 3 -->
    <div>
        <h2><u>Bent Over Rows</u></h2>
        <img src="{{ asset('image/back/b3.gif') }}" alt="Bent Over Rows Image" /><br />
        <span>🔴 Bent over rows help strengthen the middle and lower back. Maintain a flat back and engage your core during the exercise.</span>
    </div>

    <!-- Exercise 4 -->
    <div>
        <h2><u>Lat Pulldowns</u></h2>
        <img src="{{ asset('image/back/b4.gif') }}" alt="Lat Pulldowns Image" /><br />
        <span>🔴 Lat pulldowns focus on the latissimus dorsi muscles. Adjust the machine to target different areas of the back.</span>
    </div>

    <!-- Exercise 5 -->
    <div>
        <h2><u>T-Bar Rows</u></h2>
        <img src="{{ asset('image/back/b5.gif') }}" alt="T-Bar Rows Image" /><br />
        <span>🔴 T-Bar rows are effective for building thickness in the middle of the back. Keep your chest up and back straight.</span>
    </div>

    <!-- Exercise 6 -->
    <div>
        <h2><u>Face Pulls</u></h2>
        <img src="{{ asset('image/back/b6.gif') }}" alt="Face Pulls Image" /><br />
        <span>🔴 Face pulls target the upper back and rear deltoids. Use a cable machine with a rope attachment for this exercise.</span>
    </div>

    <!-- Exercise 7 -->
    <div>
        <h2><u>Hyperextensions</u></h2>
        <img src="{{ asset('image/back/b7.gif') }}" alt="Hyperextensions Image" /><br />
        <span>🔴 Hyperextensions strengthen the lower back and glutes. Focus on controlled movements for optimal results.</span>
    </div>

    <!-- Exercise 8 -->
    <div>
        <h2><u>Single-Arm Dumbbell Rows</u></h2><br />
        <img src="{{ asset('image/back/b8.gif') }}" alt="Single-Arm Dumbbell Rows Image" /><br />
        <span>🔴 Single-arm dumbbell rows help isolate each side of the back. Keep your back parallel to the ground during the exercise.</span>
    </div>

    <!-- Exercise 9 -->
    <div>
        <h2><u>Rack Pulls</u></h2><br />
        <img src="{{ asset('image/back/b9.gif') }}" alt="Rack Pulls Image" /><br />
        <span>🔴 Rack pulls target the upper back and traps. Adjust the height of the barbell on the squat rack based on your preference.</span>
    </div>

    <!-- Exercise 10 -->
    <div>
        <h2><u>Seated Cable Rows</u></h2><br />
        <img src="{{ asset('image/back/b10.gif') }}" alt="Seated Cable Rows Image" /><br />
        <span>🔴 Seated cable rows work on the mid and upper back muscles. Use different grips to vary the target muscles.</span><br/>
    </div><br/>


    <div class="concluding-message">
        <span> 🚨 Don't push yourself too hard. Remember to rest for at least 5 minutes between sets. Take care of your body! 🚨</span>
    </div>
</div>