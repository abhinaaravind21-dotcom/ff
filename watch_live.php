<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Watch Live - Football Club</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Extra animation for video container */
    .video-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      min-height: 80vh;
      animation: fadeIn 1.2s ease-in;
    }

    iframe {
      width: 80%;
      height: 450px;
      border-radius: 20px;
      box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s;
    }

    iframe:hover {
      transform: scale(1.02);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1 {
      color: white;
      text-shadow: 0 0 10px #00ff88;
      margin-bottom: 20px;
      animation: glow 2s infinite alternate;
    }

    @keyframes glow {
      from { text-shadow: 0 0 10px #00ff88; }
      to { text-shadow: 0 0 20px #00ffff; }
    }
  </style>
</head>
<body>
  <header>
    <h1>🏟️ Watch Live Match</h1>
  </header>

  <div class="video-container">
  <h1>Messi vs Ronaldo - Full Match Highlights</h1>

  <iframe 
    src="https://www.youtube.com/embed/YTqPs1bDGus"
    title="Portugal 1 x 2 Argentina (C. Ronaldo x Messi) 2011 Friendly Highlights"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    allowfullscreen>
  </iframe>
</div>


  <footer>
    <p>&copy; 2025 Football Club | All Rights Reserved</p>
  </footer>
</body>
</html>
