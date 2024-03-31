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
    <h1 style="text-decoration: underline; text-align:center">Biceps Exercises</h1>

    <!-- Exercise 1 -->
    <div>
        <h2><u>Barbell Curl</u></h2>
        <img src="{{ asset('image/biceps/b1.gif') }}" alt="Barbell Curl Image" /><br />
        <span>🔴 Barbell curls are a classic biceps exercise. Keep your elbows close to your body and lift the bar with controlled movements. </span>
    </div>

    <!-- Exercise 2 -->
    <div>
        <h2><u>Dumbbell Hammer Curl</u></h2>
        <img src="{{ asset('image/biceps/b2.gif') }}" alt="Dumbbell Hammer Curl Image" /><br />
        <span>🔴 Dumbbell hammer curls target both the biceps and forearms. Maintain a neutral grip and lift the dumbbells with control. </span>
    </div>

    <!-- Exercise 3 -->
    <div>
        <h2><u>Preacher Curl</u></h2>
        <img src="{{ asset('image/biceps/b3.gif') }}" alt="Preacher Curl Image" /><br />
        <span>🔴 Preacher curls isolate the biceps and minimize cheating. Use a preacher bench and focus on the full range of motion. </span>
    </div>

    <!-- Exercise 4 -->
    <div>
        <h2><u>Concentration Curl</u></h2>
        <img src="{{ asset('image/biceps/b4.gif') }}" alt="Concentration Curl Image" /><br />
        <span>🔴 Concentration curls target the biceps while sitting. Keep your elbow against your inner thigh and lift the dumbbell. </span>
    </div>

    <!-- Exercise 5 -->
    <div>
        <h2><u>Spider Curl</u></h2>
        <img src="{{ asset('image/biceps/b5.gif') }}" alt="Spider Curl Image" /><br />
        <span>🔴 Spider curls are performed on an incline bench, focusing on the biceps. Control the movement and squeeze at the top. </span>
    </div>

    <!-- Exercise 6 -->
    <div>
        <h2><u>Chin-Ups</u></h2>
        <img src="{{ asset('image/biceps/b6.gif') }}" alt="Chin-Ups Image" /><br />
        <span>🔴 Chin-ups target the biceps and back. Use an underhand grip and lift your body with controlled movements. </span>
    </div>

    <!-- Exercise 7 -->
    <div>
        <h2><u>Cable Curl</u></h2>
        <img src="{{ asset('image/biceps/b7.gif') }}" alt="Cable Curl Image" /><br />
        <span>🔴 Cable curls provide constant tension on the biceps. Use a cable machine and maintain a steady, controlled pace. </span>
    </div>

    <!-- Exercise 8 -->
    <div>
        <h2><u>Reverse Curl</u></h2><br />
        <img src="{{ asset('image/biceps/b8.gif') }}" alt="Reverse Curl Image" /><br />
        <span>🔴 Reverse curls target the brachialis and brachioradialis muscles. Lift the barbell with a pronated (palms down) grip. </span>
    </div>

    <!-- Exercise 9 -->
    <div>
        <h2><u>Zottman Curl</u></h2><br />
        <img src="{{ asset('image/biceps/b9.gif') }}" alt="Zottman Curl Image" /><br />
        <span>🔴 Zottman curls work both the biceps and forearms. Perform the curl with a supinated (palms up) grip and lower with a pronated grip. </span>
    </div>

    <!-- Exercise 10 -->
    <div>
        <h2><u>21s</u></h2><br />
        <img src="{{ asset('image/biceps/b10.gif') }}" alt="21s Image" /><br />
        <span>🔴 21s involve three sets of seven partial reps. Perform the lower, upper, and full range of motion in each set. </span><br />
    </div><br />


    <div class="concluding-message">
        <span> 🚨 Don't push yourself too hard. Remember to rest for at least 5 minutes between sets. Take care of your body! 🚨</span>
    </div>
</div>
