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
    <h1 style="text-decoration: underline; text-align:center">Legs Exercises</h1>

    <!-- Exercise 1 -->
    <div>
        <h2><u>Squats</u></h2>
        <img src="{{ asset('image/legs/l1.gif') }}" alt="Squats Image" /><br />
        <span>🔴 Squats are a fundamental lower body exercise. Keep your back straight, chest up, and lower down as if sitting back into a chair. </span>
    </div>

    <!-- Exercise 2 -->
    <div>
        <h2><u>Deadlifts</u></h2>
        <img src="{{ asset('image/legs/l2.gif') }}" alt="Deadlifts Image" /><br />
        <span>🔴 Deadlifts target the hamstrings, glutes, and lower back. Maintain a flat back, hinge at your hips, and lift with your legs. </span>
    </div>

    <!-- Exercise 3 -->
    <div>
        <h2><u>Lunges</u></h2>
        <img src="{{ asset('image/legs/l3.gif') }}" alt="Lunges Image" /><br />
        <span>🔴 Lunges work on each leg individually, targeting the quads and glutes. Keep your upper body straight and lunge forward with control. </span>
    </div>

    <!-- Exercise 4 -->
    <div>
        <h2><u>Leg Press</u></h2>
        <img src="{{ asset('image/legs/l4.gif') }}" alt="Leg Press Image" /><br />
        <span>🔴 Leg press is a machine exercise targeting the quads, hamstrings, and glutes. Adjust the seat and weight according to your comfort. </span>
    </div>

    <!-- Exercise 5 -->
    <div>
        <h2><u>Leg Curls</u></h2>
        <img src="{{ asset('image/legs/l5.gif') }}" alt="Leg Curls Image" /><br />
        <span>🔴 Leg curls isolate the hamstrings. Use a leg curl machine and control the movement throughout. </span>
    </div>

    <!-- Exercise 6 -->
    <div>
        <h2><u>Calf Raises</u></h2>
        <img src="{{ asset('image/legs/l6.gif') }}" alt="Calf Raises Image" /><br />
        <span>🔴 Calf raises target the calf muscles. Use a calf raise machine or stand on an elevated surface to perform this exercise. </span>
    </div>

    <!-- Exercise 7 -->
    <div>
        <h2><u>Box Jumps</u></h2>
        <img src="{{ asset('image/legs/l7.gif') }}" alt="Box Jumps Image" /><br />
        <span>🔴 Box jumps are a plyometric exercise to enhance leg power. Jump onto a sturdy box with both feet and step back down. </span>
    </div>

    <!-- Exercise 8 -->
    <div>
        <h2><u>Step-Ups</u></h2><br />
        <img src="{{ asset('image/legs/l8.gif') }}" alt="Step-Ups Image" /><br />
        <span>🔴 Step-ups target the quads and glutes. Step onto a bench or platform with one foot at a time, alternating legs. </span>
    </div>

    <!-- Exercise 9 -->
    <div>
        <h2><u>Hamstring Curls</u></h2><br />
        <img src="{{ asset('image/legs/l9.gif') }}" alt="Hamstring Curls Image" /><br />
        <span>🔴 Hamstring curls focus on the hamstrings. Use a hamstring curl machine and control the movement. </span>
    </div>

    <!-- Exercise 10 -->
    <div>
        <h2><u>Wall Sit</u></h2><br />
        <img src="{{ asset('image/legs/l10.webp') }}" alt="Wall Sit Image" /><br />
        <span>🔴 Wall sit is an isometric exercise targeting the quads. Slide your back down a wall, bend your knees, and hold the seated position. </span>
    </div><br />


    <div class="concluding-message">
        <span> 🚨 Don't push yourself too hard. Remember to rest for at least 5 minutes between sets. Take care of your body! 🚨</span>
    </div>
</div>
