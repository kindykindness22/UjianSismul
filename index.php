<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link rel="stylesheet" href="style.css">
    <script>
        // Simple tab switching
        window.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('nav a');
            const contents = document.querySelectorAll('.tab-content');
            tabs.forEach(tab => {
                tab.addEventListener('click', function(e) {
                    e.preventDefault();
                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    contents.forEach(c => c.classList.remove('active'));
                    document.querySelector(this.getAttribute('href')).classList.add('active');
                });
            });
            // Show Home by default
            tabs[0].classList.add('active');
            contents[0].classList.add('active');
        });
    </script>
</head>
<body>

<audio autoplay loop hidden>
    <source src="bgmusic.ogg" type="audio/ogg">
</audio>

<header>
    <h1>Kindy Bintang Naufaldi</h1>
</header>

<nav>
    <a href="#home">Home</a>
    <a href="#about">About Us</a>
    <a href="#posts">Posts</a>
    <a href="#focus">Focus</a>
</nav>

<main>
    <section id="home" class="tab-content">
        <div class="blog-post">
            <h2 class="post-title">Welcome to My Multimedia Blog</h2>
            <div class="post-content">
                <p>Explore the world of multimedia: text, images, audio, and video, all in one place. Enjoy a modern, dark-themed blog experience!</p>
            </div>
        </div>
    </section>

    <section id="about" class="tab-content">
        <div class="blog-post">
            <h2 class="post-title">About Us</h2>
            <div class="post-content">
                <p>Hello! I'm <span class="bold">Kindy Bintang Naufaldi</span>, a multimedia enthusiast. This blog showcases how multimedia elements can enhance web experiences. Feel free to explore and enjoy the content!</p>
            </div>
        </div>
    </section>

    <section id="posts" class="tab-content">
        <div class="blog-post">
            <h2 class="post-title">Understanding Multimedia</h2>
            <div class="post-content">
                <p>Multimedia refers to the integration of multiple forms of media, including text, images, audio, and video, to convey information or provide entertainment. It enhances the user experience by combining different content types.</p>
                <h3>Examples of Multimedia Text</h3>
                <div class="multimedia-text">
                    <span class="italic">This is italic text.</span><br>
                    <span class="bold">This is bold text.</span><br>
                    <span class="underline">This is underlined text.</span><br>
                    <span class="custom-font">This is custom font text with a random color.</span><br>
                    <span class="colorful-text">This is colorful text!</span><br>
                    <div class="moving-text">This text moves from left to right!</div>
                </div>
            </div>
        </div>

        <!-- Audio Player for Music -->
        <div class="audio-player">
            <h3>Music Player</h3>
            <audio controls>
                <source src="arcanemusic.flac" type="audio/flac">
            </audio>
            <p>Enjoy this relaxing music</p>
        </div>

        <!-- Media Container for Video and Image -->
        <div class="media-container">
            <div class="media-box">
                <h3>Video</h3>
                <video controls>
                    <source src="monk.mp4" type="video/mp4">
                </video>
            </div>
            <div class="media-box">
                <h3>Meme</h3>
                <img src="gambar.jpg" alt="meme">
            </div>
        </div>
    </section>

    <section id="focus" class="tab-content">
        <div class="blog-post">
            <h2 class="post-title">Focus Mode</h2>
            <div class="post-content">
                <p>
                    <span class="bold">Focus Mode</span> lets you concentrate on the main post content without distractions.
                </p>
                <div class="focus-content" style="margin-top:2em;">
                    <h3 style="font-family:'Manrope', 'Poppins', Arial, sans-serif; color:#4a90e2; font-size:1.18rem; margin-bottom:0.7em;">Understanding Multimedia</h3>
                    <p style="font-family:'Inter','Noto Sans',Arial,sans-serif; font-size:1.08rem; line-height:1.8; color:var(--text);">
                        Multimedia refers to the integration of multiple forms of media, including text, images, audio, and video, to convey information or provide entertainment. It enhances the user experience by combining different content types.
                    </p>
                    <div class="multimedia-text" style="margin-top:1.5em;">
                        <span class="italic">This is italic text.</span><br>
                        <span class="bold">This is bold text.</span><br>
                        <span class="underline">This is underlined text.</span><br>
                        <span class="custom-font">This is custom font text with a random color.</span><br>
                        <span class="colorful-text">This is colorful text!</span><br>
                        <div class="moving-text">This text moves from left to right!</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Kindy Bintang Naufaldi. All rights reserved.</p>
</footer>

</body>
</html>