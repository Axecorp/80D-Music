<?php
    global $post;
    get_header();

    $post_title = $post->post_title;
    $song = get_field('song_mp3_file', $post->ID);
?>

<section class="song-banner" style="background-image: url(/wp-content/uploads/2024/10/Rectangle-14.png)">
    <img src="<?php echo "/wp-content/uploads/2024/10/Group-206.png" ?>" alt="" class="audio-img">
    <img src="<?php echo "/wp-content/uploads/2024/10/Group-207.png" ?>" alt="" class="audio-img-2">
    <div class="song-banner-container">
        <div class="heading">
            <h2><?php echo $post_title; ?></h2>
        </div>
        <div class="music-box">
            <!-- Password Form -->
            <div id="password-form">
                <label for="password" class="passlabel">Enter Password:</label>
                <input type="password" id="password" />
                <input type="checkbox" id="toggle-password" />
                <label for="toggle-password">(Show Password)</label>
                <button id="submit-password">Submit</button>
                <p id="password-error" style="color: red; display: none;"></p>
            </div>

            <!-- Music Player Section (Initially Hidden) -->
            <div id="music-player-container" style="display: none;">
                <audio id="audio-player" src="<?php echo $song; ?>" preload="metadata"></audio>
                <button id="play-pause">
                    <img src="/wp-content/uploads/2024/10/play.png" alt="Play" id="play-icon">
                </button>
                <p id="current-time">00:00</p> 
                <div class="song-controls">
                    <button id="download-song">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.92791 0C9.28419 0.109747 9.56366 0.307468 9.66167 0.689582C9.69434 0.816212 9.69964 0.952173 9.70008 1.08414C9.70229 3.97665 9.70185 6.86916 9.70185 9.76167C9.70185 9.83054 9.70185 9.89941 9.70185 10.0083C9.77867 9.93451 9.82237 9.89407 9.86476 9.85186C10.527 9.18583 11.1875 8.51891 11.851 7.85421C12.1106 7.59384 12.4259 7.51031 12.7773 7.60761C13.1305 7.70536 13.3543 7.94618 13.436 8.30475C13.5181 8.66376 13.4042 8.96811 13.1473 9.22626C12.4488 9.92606 11.753 10.6285 11.0559 11.3301C10.538 11.8513 10.021 12.3734 9.50229 12.8932C9.02989 13.3669 8.49524 13.3664 8.02505 12.8937C6.81403 11.6753 5.60256 10.4575 4.39286 9.23782C3.99287 8.83438 3.9549 8.28564 4.29441 7.89598C4.66218 7.47387 5.27541 7.45654 5.686 7.86576C6.34736 8.52469 7.00299 9.18939 7.66081 9.85142C7.70276 9.89363 7.7469 9.93406 7.82417 10.0083C7.82417 9.89985 7.82417 9.83142 7.82417 9.76256C7.82417 6.85894 7.82373 3.95532 7.82461 1.0517C7.82461 0.490083 8.04227 0.191501 8.57074 0.01955C8.58089 0.0164398 8.58884 0.00710909 8.59767 0.000888636C8.7076 0 8.81753 0 8.92791 0Z" fill="black"/>
                            <path d="M0.302246 12.1065C0.319906 12.0678 0.339773 12.0296 0.354343 11.9901C0.514605 11.5507 0.933585 11.2965 1.38214 11.3667C1.84042 11.4387 2.17066 11.8124 2.18213 12.2842C2.18964 12.589 2.18302 12.8938 2.18434 13.1986C2.19008 14.313 2.99316 15.1327 4.10131 15.1341C7.20679 15.1385 10.3118 15.1381 13.4173 15.1341C14.5343 15.1327 15.3365 14.3143 15.3409 13.1884C15.3422 12.8947 15.3378 12.601 15.3422 12.3073C15.3502 11.7706 15.7661 11.3498 16.2835 11.3507C16.8023 11.3512 17.223 11.7719 17.2204 12.3091C17.2177 12.9058 17.2601 13.5043 17.1272 14.0966C16.7559 15.7561 15.2535 17.0158 13.5652 17.0233C10.3661 17.0371 7.1675 17.038 3.96842 17.0233C2.12651 17.0149 0.552133 15.5606 0.332268 13.7131C0.327853 13.6758 0.3124 13.6398 0.302246 13.603C0.302246 13.104 0.302246 12.6055 0.302246 12.1065Z" fill="black"/>
                        </svg>
                    </button>
                    <button id="share-song">
                        <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.8417 17.3587C12.4902 17.2495 12.1202 17.1799 11.7903 17.0245C10.5411 16.4356 9.87066 14.9839 10.2111 13.6413C10.2584 13.4558 10.2137 13.3806 10.0508 13.2978C8.58472 12.5514 7.12285 11.7952 5.66013 11.042C5.61077 11.0165 5.56099 10.9919 5.49897 10.9605C4.82689 11.8321 3.95019 12.2856 2.84735 12.2283C2.07612 12.1884 1.40952 11.878 0.872871 11.3201C-0.285235 10.1168 -0.291566 8.29316 0.857681 7.06821C1.94322 5.91076 3.9928 5.70398 5.31544 7.17817C6.98067 6.16976 8.64758 5.1605 10.3124 4.15209C9.66689 2.42187 10.6554 0.760437 12.0025 0.225024C13.4403 -0.346479 14.9954 0.197426 15.7852 1.5523C16.5126 2.80061 16.2067 4.45228 15.0743 5.40167C13.9681 6.32856 12.1092 6.44787 10.8398 5.02463C10.795 5.05053 10.7478 5.07728 10.7014 5.10531C9.13403 6.05427 7.56753 7.00494 5.99807 7.95009C5.87994 8.02142 5.84999 8.07831 5.89808 8.21418C6.08625 8.7479 6.1297 9.29265 5.9774 9.84547C5.96263 9.89982 5.95335 9.95544 5.94196 10.0106C5.94112 10.0157 5.94449 10.0213 5.95208 10.048C7.52492 10.8586 9.11125 11.6759 10.6858 12.4869C10.9098 12.2758 11.1115 12.0538 11.3439 11.8725C13.1319 10.4777 15.8367 11.5965 16.1426 13.8524C16.375 15.5694 15.2553 17.067 13.5437 17.3285C13.5112 17.3336 13.4804 17.3485 13.4488 17.3591C13.2463 17.3587 13.0437 17.3587 12.8417 17.3587Z" fill="black"/>
                        </svg>
                    </button>
                </div>
                <div id="audio-visualizer-container">
                    <canvas id="audio-visualizer"></canvas>
                </div>
            </div>
			<a href="<?php echo get_site_url(); ?>" id="homepage-btn">Go Back</a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var correctPassword = 'testingsongs123'; // Replace with your actual password
    var passwordInput = document.getElementById('password');
    var passwordForm = document.getElementById('password-form');
    var musicPlayerContainer = document.getElementById('music-player-container');
    var passwordError = document.getElementById('password-error');
    var audioPlayer = document.getElementById('audio-player');
    var playPauseButton = document.getElementById('play-pause');
    var currentTimeSpan = document.getElementById('current-time');
    var durationTimeSpan = document.getElementById('duration-time');
    var playIcon = document.getElementById('play-icon');

    var audioContext, analyser, source, bufferLength, dataArray, canvas, canvasContext;
    var visualizerRunning = false; // To track if visualizer is running

    // Password Submission
    document.getElementById('submit-password').addEventListener('click', function () {
        var enteredPassword = passwordInput.value;

        if (enteredPassword === correctPassword) {
            passwordForm.style.display = 'none';
            musicPlayerContainer.style.display = 'flex';
        } else {
            passwordError.textContent = 'Incorrect password. Please try again.';
            passwordError.style.display = 'block';
        }
    });

    // Toggle password visibility
    document.getElementById('toggle-password').addEventListener('change', function () {
        passwordInput.type = this.checked ? 'text' : 'password';
    });

    // Play/Pause functionality
    playPauseButton.addEventListener('click', function () {
        if (audioPlayer.paused) {
            audioPlayer.play();
            playIcon.src = "/wp-content/uploads/2024/10/pause.png"; 
            if (!visualizerRunning) {
                startVisualizer(); // Start the visualizer only once
                visualizerRunning = true;
            }
        } else {
            audioPlayer.pause();
            playIcon.src = "/wp-content/uploads/2024/10/play.png"; 
        }
    });

    // Display song current time and duration
    audioPlayer.addEventListener('canplay', function () {
        var duration = audioPlayer.duration;
        durationTimeSpan.textContent = formatTime(duration);
    });

    audioPlayer.addEventListener('timeupdate', function () {
        var currentTime = audioPlayer.currentTime;
        currentTimeSpan.textContent = formatTime(currentTime);
    });

    // Format time in mm:ss
    function formatTime(seconds) {
        var minutes = Math.floor(seconds / 60);
        var seconds = Math.floor(seconds % 60);
        return minutes + ':' + (seconds < 10 ? '0' : '') + seconds;
    }

    // Share functionality
    document.getElementById('share-song').addEventListener('click', function () {
        var songUrl = audioPlayer.src;
        navigator.clipboard.writeText(songUrl).then(function () {
            alert('Song URL copied to clipboard!');
        });
    });

    // Download functionality
    document.getElementById('download-song').addEventListener('click', function () {
        var songUrl = audioPlayer.src;
        var link = document.createElement('a');
        link.href = songUrl;
        link.download = 'song.mp3'; // Modify the filename as needed
        link.click();
    });

    // Initialize the visualizer
    function initVisualizer() {
        if (!audioContext) {
            audioContext = new (window.AudioContext || window.webkitAudioContext)();
            analyser = audioContext.createAnalyser();
            source = audioContext.createMediaElementSource(audioPlayer);
            source.connect(analyser);
            analyser.connect(audioContext.destination);

            analyser.fftSize = 256;
            bufferLength = analyser.frequencyBinCount;
            dataArray = new Uint8Array(bufferLength);

            canvas = document.getElementById('audio-visualizer');
            canvasContext = canvas.getContext('2d');
            canvas.width = 600;
            canvas.height = 100;
        }
    }

    // Start the visualizer
    function startVisualizer() {
        initVisualizer();
        drawVisualizer();
    }

    // Draw the visualizer bars
    function drawVisualizer() {
        if (!audioContext) return;

        requestAnimationFrame(drawVisualizer);

        analyser.getByteFrequencyData(dataArray);

        canvasContext.clearRect(0, 0, canvas.width, canvas.height);

        var barWidth = (canvas.width / bufferLength) * 2.5;
        var barHeight;
        var x = 0;

        // Create a gradient from #0575E6 to #29A2E4
        var gradient = canvasContext.createLinearGradient(0, 0, canvas.width, canvas.height);
        gradient.addColorStop(0, '#0575E6');
        gradient.addColorStop(1, '#29A2E4');

        for (var i = 0; i < bufferLength; i++) {
            barHeight = dataArray[i] / 2;

            // Apply the gradient as fill color
            canvasContext.fillStyle = gradient;
            canvasContext.fillRect(x, canvas.height - barHeight / 2, barWidth, barHeight);

            x += barWidth + 1;
        }
    }

    });

</script>

<?php get_footer(); ?>
