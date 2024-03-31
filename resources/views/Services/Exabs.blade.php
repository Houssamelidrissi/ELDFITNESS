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
    <h1 style="text-decoration: underline; text-align:center">Abs Exercises</h1>

    <!-- Exercise 1 -->
    <div>
        <h2><u>Crunches</u></h2>
        <img src="{{ asset('image/abs/a1.gif') }}" alt="Crunches Image" /><br />
        <span>🔴 Crunches target the upper and lower abs. Lie on your back, bend your knees, and lift your upper body towards your knees. </span>
    </div>

    <!-- Exercise 2 -->
    <div>
        <h2><u>Leg Raises</u></h2>
        <img src="{{ asset('image/abs/a2.gif') }}" alt="Leg Raises Image" /><br />
        <span>🔴 Leg raises focus on the lower abs. Lie on your back and lift your legs towards the ceiling, then lower them without touching the floor. </span>
    </div>

    <!-- Exercise 3 -->
    <div>
        <h2><u>Plank</u></h2>
        <img src="{{ asset('image/abs/a3.gif') }}" alt="Plank Image" /><br />
        <span>🔴 Planks engage the entire core. Hold a push-up position with your body in a straight line from head to heels. </span>
    </div>

    <!-- Exercise 4 -->
    <div>
        <h2><u>Russian Twists</u></h2>
        <img src="{{ asset('image/abs/a4.gif') }}" alt="Russian Twists Image" /><br />
        <span>🔴 Russian twists work on the obliques. Sit on the floor, lean back slightly, and rotate your torso to touch the floor on each side. </span>
    </div>

    <!-- Exercise 5 -->
    <div>
        <h2><u>Bicycle Crunches</u></h2>
        <img src="{{ asset('image/abs/a5.gif') }}" alt="Bicycle Crunches Image" /><br />
        <span>🔴 Bicycle crunches target the entire core. Lie on your back, lift your legs, and bring opposite elbow to knee in a cycling motion. </span>
    </div>

    <!-- Exercise 6 -->
    <div>
        <h2><u>Mountain Climbers</u></h2>
        <img src="{{ asset('image/abs/a6.gif') }}" alt="Mountain Climbers Image" /><br />
        <span>🔴 Mountain climbers are a dynamic ab exercise. From a plank position, bring your knees towards your chest in a running motion. </span>
    </div>

    <!-- Exercise 7 -->
    <div>
        <h2><u>Reverse Crunches</u></h2>
        <img src="{{ asset('image/abs/a7.gif') }}" alt="Reverse Crunches Image" /><br />
        <span>🔴 Reverse crunches target the lower abs. Lie on your back, bring your knees towards your chest, and lift your hips off the ground. </span>
    </div>

    <!-- Exercise 8 -->
    <div>
        <h2><u>Hanging Leg Raises</u></h2><br />
        <img src="{{ asset('image/abs/a8.webp') }}" alt="Hanging Leg Raises Image" /><br />
        <span>🔴 Hanging leg raises focus on the lower abs. Hang from a pull-up bar and lift your legs towards the ceiling. </span>
    </div>

    <!-- Exercise 9 -->
    <div>
        <h2><u>Ab Rollouts</u></h2><br />
        <img src="{{ asset('image/abs/a9.webp') }}" alt="Ab Rollouts Image" /><br />
        <span>🔴 Ab rollouts engage the entire core. Use an ab roller or an exercise ball to extend and roll out in front of you. </span>
    </div>

    <!-- Exercise 10 -->
    <div>
        <h2><u>Side Plank</u></h2><br />
        <img src="{{ asset('image/abs/a10.gif') }}" alt="Side Plank Image" /><br />
        <span>🔴 Side planks target the obliques. Support your body on one forearm and the side of your foot, keeping your body in a straight line. </span>
    </div><br />


    <div class="concluding-message">
        <span> 🚨 Don't push yourself too hard. Remember to rest for at least 5 minutes between sets. Take care of your body! 🚨</span>
    </div>
</div>
