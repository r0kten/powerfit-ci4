<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerFit - Фітнес Клуб</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom CSS (можна винести у окремий CSS-файл) */
        .hero {
            background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?...');
            background-size: cover;
            background-position: center;
        }
        .trainer-card:hover { transform: translateY(-10px); box-shadow: 0 20px 25px rgba(0,0,0,0.1); }
        .membership-card:hover { transform: scale(1.05); }
        .active-tab { border-bottom:3px solid #3b82f6; color:#3b82f6; }
        @keyframes pulse { 0%,100% { transform: scale(1); } 50% { transform: scale(1.05); } }
        .cta-pulse { animation: pulse 2s infinite; }
    </style>
</head>
<body class="font-sans bg-gray-50">
<header class="bg-gray-900 text-white sticky top-0 z-50 shadow-lg">
  <div class="container mx-auto px-4 py-3 flex justify-between items-center">
    <div class="flex items-center space-x-2">
      <i class="fas fa-dumbbell text-blue-400 text-2xl"></i>
      <a href="#home" class="text-2xl font-bold">Power<span class="text-blue-400">Fit</span></a>
    </div>
    <nav class="hidden md:flex space-x-8">
      <a href="#home" class="hover:text-blue-400">Головна</a>
      <a href="#about" class="hover:text-blue-400">Про нас</a>
      <a href="#trainers" class="hover:text-blue-400">Тренери</a>
      <a href="#membership" class="hover:text-blue-400">Абонементи</a>
      <a href="#contact" class="hover:text-blue-400">Контакти</a>
    </nav>
    <div class="flex items-center space-x-4">
      <button id="language-switcher" class="px-3 py-1 bg-blue-600 hover:bg-blue-700 rounded-md">
        <span class="hidden md:inline">UA</span><i class="fas fa-globe md:ml-1"></i>
      </button>
      <button id="mobile-menu-button" class="md:hidden text-2xl"><i class="fas fa-bars"></i></button>
    </div>
  </div>
  <div id="mobile-menu" class="hidden bg-gray-800 px-4 py-2">
    <a href="#home" class="block py-2 hover:text-blue-400">Головна</a>
    <a href="#about" class="block py-2 hover:text-blue-400">Про нас</a>
    <a href="#trainers" class="block py-2 hover:text-blue-400">Тренери</a>
    <a href="#membership" class="block py-2 hover:text-blue-400">Абонементи</a>
    <a href="#contact" class="block py-2 hover:text-blue-400">Контакти</a>
  </div>
</header>