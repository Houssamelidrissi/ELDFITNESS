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

    #bt:hover {
        font-size: 14px;
    }
</style>
<div class="container">
    <a href="{{ route('services') }}" style="text-decoration: none;">
        <button id="bt">⬅︎ Back to service</button>
    </a>
    <h1 style="text-decoration: underline; text-align:center">Shoulder Exercises</h1>

    <!-- Exercise 1 -->
    <div>
        <h2><u>Overhead Press</u></h2>
        <img src="{{ asset('image/shoulders/s1.gif') }}" alt="Overhead Press Image" /><br />
        <span>🔴 Overhead press is a compound exercise targeting the shoulders and triceps. Lift the weight overhead with control and proper form.</span>
    </div>

    <!-- Exercise 2 -->
    <div>
        <h2><u>Front Raises</u></h2>
        <img src="{{ asset('image/shoulders/s2.gif') }}" alt="Front Raises Image" /><br />
        <span>🔴 Front raises isolate the front deltoids. Lift the weights to shoulder height and control the descent.</span>
    </div>

    <!-- Exercise 3 -->
    <div>
        <h2><u>Lateral Raises</u></h2>
        <img src="{{ asset('image/shoulders/s3.gif') }}" alt="Lateral Raises Image" /><br />
        <span>🔴 Lateral raises target the side deltoids. Keep a slight bend in your elbows and lift the weights to the sides.</span>
    </div>

    <!-- Exercise 4 -->
    <div>
        <h2><u>Shoulder Press Machine</u></h2>
        <img src="{{ asset('image/shoulders/s4.gif') }}" alt="Shoulder Press Machine Image" /><br />
        <span>🔴 Shoulder press machine provides stability while targeting the shoulders. Adjust the seat and handles for proper alignment.</span>
    </div>

    <!-- Exercise 5 -->
    <div>
        <h2><u>Reverse Flyes</u></h2>
        <img src="{{ asset('image/shoulders/s5.gif') }}" alt="Reverse Flyes Image" /><br />
        <span>🔴 Reverse flyes work the rear deltoids. Keep a slight bend in your elbows and lift the weights to the sides.</span>
    </div>

    <!-- Exercise 6 -->
    <div>
        <h2><u>Upright Rows</u></h2>
        <img src="{{ asset('image/shoulders/s6.gif') }}" alt="Upright Rows Image" /><br />
        <span>🔴 Upright rows target the upper traps and deltoids. Lift the weights close to your body, leading with your elbows.</span>
    </div>

    <!-- Exercise 7 -->
    <div>
        <h2><u>Shrugs</u></h2>
        <img src="{{ asset('image/shoulders/s7.gif') }}" alt="Shrugs Image" /><br />
        <span>🔴 Shrugs focus on the trapezius muscles. Lift your shoulders toward your ears and hold for a moment.</span>
    </div>

    <!-- Exercise 8 -->
    <div>
        <h2><u>Arnold Press</u></h2><br />
        <img src="{{ asset('image/shoulders/s8.gif') }}" alt="Arnold Press Image" /><br />
        <span>🔴 Arnold press is a rotational shoulder exercise. Rotate the palms during the press for a comprehensive shoulder workout.</span>
    </div>

    <!-- Exercise 9 -->
    <div>
        <h2><u>Face Pulls</u></h2><br />
        <img src="{{ asset('image/shoulders/s9.gif') }}" alt="Face Pulls Image" /><br />
        <span>🔴 Face pulls target the upper back and rear deltoids. Use a cable machine with a rope attachment for this exercise.</span>
    </div>

    <!-- Exercise 10 -->
    <div>
        <h2><u>Rotator Cuff Exercises</u></h2><br />
        <img src="{{ asset('image/shoulders/s10.gif') }}" alt="Rotator Cuff Exercises Image" /><br />
        <span>🔴 Rotator cuff exercises help strengthen and stabilize the shoulder joints. Perform external and internal rotations with light weights.</span>
    </div><br />


    <div class="concluding-message">
        <span> 🚨 Don't push yourself too hard. Remember to rest for at least 5 minutes between sets. Take care of your body! 🚨</span>
    </div>
</div>
