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
    <h1 style="text-decoration: underline; text-align:center">Chest Exercises</h1>

    <!-- Exercise 1 -->
    <div>
        <h2><u>Bench Press</u></h2>
        <img src="{{ asset('image/chest/b1.gif') }}" alt="Deadlift Image" /><br />
        <span>🔴 Bench press is a compound exercise that targets the chest, shoulders, and triceps. Use proper form and control the weight.</span>
    </div>

    <!-- Exercise 2 -->
    <div>
        <h2><u>Dumbbell Flyes</u></h2>
        <img src="{{ asset('image/chest/b2.gif') }}" alt="Pull-Ups Image" /><br />
        <span>🔴 Dumbbell flyes isolate the chest muscles. Keep a slight bend in your elbows and focus on a full range of motion.</span>
    </div>

    <!-- Exercise 3 -->
    <div>
        <h2><u>Push-Ups</u></h2>
        <img src="{{ asset('image/chest/b3.webp') }}" alt="Bent Over Rows Image" /><br />
        <span>🔴 Push-ups are a bodyweight exercise that effectively targets the chest. Maintain a straight line from head to heels.</span>
    </div>

    <!-- Exercise 4 -->
    <div>
        <h2><u>Incline Bench Press</u></h2>
        <img src="{{ asset('image/chest/b4.gif') }}" alt="Lat Pulldowns Image" /><br />
        <span>🔴 Incline bench press emphasizes the upper chest. Adjust the bench to a 15-30 degree incline for optimal results.</span>
    </div>

    <!-- Exercise 5 -->
    <div>
        <h2><u>Chest Dips</u></h2>
        <img src="{{ asset('image/chest/b5.gif') }}" alt="T-Bar Rows Image" /><br />
        <span>🔴 Chest dips target the lower chest. Use parallel bars and keep your body upright for effective engagement.</span>
    </div>

    <!-- Exercise 6 -->
    <div>
        <h2><u>Cable Crossover</u></h2>
        <img src="{{ asset('image/chest/b6.gif') }}" alt="Face Pulls Image" /><br />
        <span>🔴 Cable crossovers provide constant tension on the chest muscles. Focus on a controlled and deliberate movement.</span>
    </div>

    <!-- Exercise 7 -->
    <div>
        <h2><u>Decline Bench Press</u></h2>
        <img src="{{ asset('image/chest/b7.gif') }}" alt="Hyperextensions Image" /><br />
        <span>🔴 Decline bench press targets the lower chest. Adjust the bench to a decline position for this exercise.</span>
    </div>

    <!-- Exercise 8 -->
    <div>
        <h2><u>Pec Deck Machine</u></h2><br />
        <img src="{{ asset('image/chest/b8.gif') }}" alt="Single-Arm Dumbbell Rows Image" /><br />
        <span>🔴 The pec deck machine isolates the chest. Adjust the seat and handles to align with your chest height.</span>
    </div>

    <!-- Exercise 9 -->
    <div>
        <h2><u>Medicine Ball Chest Pass</u></h2><br />
        <img src="{{ asset('image/chest/b9.gif') }}" alt="Rack Pulls Image" /><br />
        <span>🔴 Medicine ball chest pass is an explosive exercise. Use a moderate-weight medicine ball and perform with a partner if possible.</span>
    </div>

    <!-- Exercise 10 -->
    <div>
        <h2><u>Wide Grip Chest Press</u></h2><br />
        <img src="{{ asset('image/chest/b10.gif') }}" alt="Seated Cable Rows Image" /><br />
        <span>🔴 Wide grip chest press emphasizes the outer chest. Use a wide grip on the barbell or machine handles.</span><br />
    </div><br />


    <div class="concluding-message">
        <span> 🚨 Don't push yourself too hard. Remember to rest for at least 5 minutes between sets. Take care of your body! 🚨</span>
    </div>
</div>