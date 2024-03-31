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
    <h1 style="text-decoration: underline; text-align:center">Cardio Exercises</h1>

    <!-- Exercise 1 -->
    <div>
        <h2><u>Running</u></h2>
        <img src="{{ asset('image/cardio/c1.gif') }}" alt="Running Image" /><br />
        <span>🔴 Running is an effective cardiovascular exercise. Start with a comfortable pace and gradually increase intensity. </span>
    </div>

    <!-- Exercise 2 -->
    <div>
        <h2><u>Jump Rope</u></h2>
        <img src="{{ asset('image/cardio/c2.gif') }}" alt="Jump Rope Image" /><br />
        <span>🔴 Jump rope is a simple and efficient cardio workout. Focus on maintaining a steady rhythm and proper form. </span>
    </div>

    <!-- Exercise 3 -->
    <div>
        <h2><u>Cycling</u></h2>
        <img src="{{ asset('image/cardio/c3.gif') }}" alt="Cycling Image" /><br />
        <span>🔴 Cycling is a low-impact cardio option. Whether indoors or outdoors, adjust resistance for varying intensity. </span>
    </div>

    <!-- Exercise 4 -->
    <div>
        <h2><u>High-Intensity Interval Training (HIIT)</u></h2>
        <img src="{{ asset('image/cardio/c4.gif') }}" alt="HIIT Image" /><br />
        <span>🔴 HIIT involves short bursts of intense exercise followed by rest. Choose exercises like burpees, squats, and sprints. </span>
    </div>

    <!-- Exercise 5 -->
    <div>
        <h2><u>Rowing</u></h2>
        <img src="{{ asset('image/cardio/c5.gif') }}" alt="Rowing Image" /><br />
        <span>🔴 Rowing engages multiple muscle groups. Focus on proper technique to maximize the cardiovascular benefits. </span>
    </div>

    <!-- Exercise 6 -->
    <div>
        <h2><u>Swimming</u></h2>
        <img src="{{ asset('image/cardio/c6.gif') }}" alt="Swimming Image" /><br />
        <span>🔴 Swimming provides a full-body workout and is easy on the joints. Incorporate different strokes for variety. </span>
    </div>

    <!-- Exercise 7 -->
    <div>
        <h2><u>Elliptical Trainer</u></h2>
        <img src="{{ asset('image/cardio/c7.gif') }}" alt="Elliptical Trainer Image" /><br />
        <span>🔴 Elliptical trainers offer a low-impact cardio option. Adjust resistance and incline for added intensity. </span>
    </div>

    <!-- Exercise 8 -->
    <div>
        <h2><u>Stair Climbing</u></h2><br />
        <img src="{{ asset('image/cardio/c8.gif') }}" alt="Stair Climbing Image" /><br />
        <span>🔴 Stair climbing is an effective way to elevate the heart rate. Use stairs at home or find a stairwell. </span>
    </div>

    <!-- Exercise 9 -->
    <div>
        <h2><u>Zumba</u></h2><br />
        <img src="{{ asset('image/cardio/c9.gif') }}" alt="Zumba Image" /><br />
        <span>🔴 Zumba combines dance and cardio. Follow along with videos or join a class for an enjoyable workout. </span>
    </div>

    <!-- Exercise 10 -->
    <div>
        <h2><u>Boxing</u></h2><br />
        <img src="{{ asset('image/cardio/c10.gif') }}" alt="Boxing Image" /><br />
        <span>🔴 Boxing workouts improve cardiovascular fitness. Use a punching bag or follow shadow boxing routines. </span>
    </div><br />


    <div class="concluding-message">
        <span> 🚨 Don't push yourself too hard. Remember to rest for at least 5 minutes between sets. Take care of your body! 🚨</span>
    </div>
</div>
