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
    <h1 style="text-decoration: underline; text-align:center">Triceps Exercises</h1>

    <!-- Exercise 1 -->
    <div>
        <h2><u>Tricep Dips</u></h2>
        <img src="{{ asset('image/triceps/t1.gif') }}" alt="Tricep Dips Image" /><br />
        <span>🔴 Tricep dips target the triceps and are effective for building strength. Use parallel bars and keep your body upright.</span>
    </div>

    <!-- Exercise 2 -->
    <div>
        <h2><u>Close Grip Bench Press</u></h2>
        <img src="{{ asset('image/triceps/t2.gif') }}" alt="Close Grip Bench Press Image" /><br />
        <span>🔴 Close grip bench press emphasizes the triceps. Keep your hands closer together on the barbell to engage the triceps.</span>
    </div>

    <!-- Exercise 3 -->
    <div>
        <h2><u>Tricep Kickbacks</u></h2>
        <img src="{{ asset('image/triceps/t3.gif') }}" alt="Tricep Kickbacks Image" /><br />
        <span>🔴 Tricep kickbacks isolate the triceps muscles. Keep your upper arm parallel to the ground and extend the forearm.</span>
    </div>

    <!-- Exercise 4 -->
    <div>
        <h2><u>Skull Crushers</u></h2>
        <img src="{{ asset('image/triceps/t4.gif') }}" alt="Skull Crushers Image" /><br />
        <span>🔴 Skull crushers target the triceps long head. Lower the barbell or dumbbells toward your forehead with controlled movements.</span>
    </div>

    <!-- Exercise 5 -->
    <div>
        <h2><u>Rope Tricep Pushdown</u></h2>
        <img src="{{ asset('image/triceps/t5.gif') }}" alt="Rope Tricep Pushdown Image" /><br />
        <span>🔴 Rope tricep pushdowns work the lateral head of the triceps. Use a cable machine with a rope attachment and maintain proper form.</span>
    </div>

    <!-- Exercise 6 -->
    <div>
        <h2><u>Overhead Tricep Extension</u></h2>
        <img src="{{ asset('image/triceps/t6.gif') }}" alt="Overhead Tricep Extension Image" /><br />
        <span>🔴 Overhead tricep extensions target the triceps long head. Use a dumbbell or barbell and extend your arms overhead.</span>
    </div>

    <!-- Exercise 7 -->
    <div>
        <h2><u>Tricep Rope Overhead Extension</u></h2>
        <img src="{{ asset('image/triceps/t7.gif') }}" alt="Tricep Rope Overhead Extension Image" /><br />
        <span>🔴 Tricep rope overhead extensions target the triceps. Use a cable machine with a rope attachment and extend your arms overhead.</span>
    </div>

    <!-- Exercise 8 -->
    <div>
        <h2><u>Diamond Push-Ups</u></h2><br />
        <img src="{{ asset('image/triceps/t8.gif') }}" alt="Diamond Push-Ups Image" /><br />
        <span>🔴 Diamond push-ups focus on the triceps and chest. Place your hands close together in a diamond shape and maintain a straight body.</span>
    </div>

    <!-- Exercise 9 -->
    <div>
        <h2><u>Tricep Bench Dips</u></h2><br />
        <img src="{{ asset('image/triceps/t9.gif') }}" alt="Tricep Bench Dips Image" /><br />
        <span>🔴 Tricep bench dips are effective for targeting the triceps. Use a bench or elevated surface and lower your body with control.</span>
    </div>

    <!-- Exercise 10 -->
    <div>
        <h2><u>Reverse Grip Tricep Pushdown</u></h2><br />
        <img src="{{ asset('image/triceps/t10.gif') }}" alt="Reverse Grip Tricep Pushdown Image" /><br />
        <span>🔴 Reverse grip tricep pushdowns emphasize the medial head of the triceps. Use a cable machine with a reverse grip.</span><br />
    </div><br />


    <div class="concluding-message">
        <span> 🚨 Don't push yourself too hard. Remember to rest for at least 5 minutes between sets. Take care of your body! 🚨</span>
    </div>
</div>
