<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode')) || false"
  :class="darkMode ? 'dark' : ''" @click.away="localStorage.setItem('darkMode', JSON.stringify(darkMode))">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Emmanuel Jr. Santos | Web Developer Portfolio</title>

  <!-- Fonts & CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code&family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>
<body>
  <header>
    <h1>Emmanuel Santos Jr.</h1>
    <p>Web & Full Stack Developer | Clean Code Advocate</p>
    <a href="resume.pdf" class="btn" download>📄 Download Resume</a>
    <br>
    <button class="btn" @click="darkMode = !darkMode">
      Toggle <span x-text="darkMode ? 'Light' : 'Dark'"></span> Mode
    </button>
  </header>

  <div class="container">
    <aside>
      <section data-aos="fade-right">
        <h2>Contact</h2>
        <p>Email: <a href="mailto:es4390221@gmail.com">emmanueljrsantos6@gmail.com</a></p>
        <p>Phone: +63 961-534-7640</p>
        <p>Location: Famy, Laguna</p>
        <p>GitHub: <a href="https://github.com/EmmanSantos1" target="_blank">EmmanSantos1</a></p>
      </section>

        <section data-aos="fade-right">
        <h2>Skills</h2>
        <div class="skill"><span>HTML/CSS/Livewire</span><div class="bar"><div class="fill" data-percent="80%"></div></div></div>
        <div class="skill"><span>Laravel/PHP</span><div class="bar"><div class="fill" data-percent="80%"></div></div></div>
        <div class="skill"><span>Alpinejs/JavaScript</span><div class="bar"><div class="fill" data-percent="70%"></div></div></div>
        <div class="skill"><span>MySQL</span><div class="bar"><div class="fill" data-percent="80%"></div></div></div>
        <div class="skill"><span>Git/GitHub</span><div class="bar"><div class="fill" data-percent="80%"></div></div></div>
      </section>
      <section data-aos="fade-right">
        <h2>Certifications</h2>
        <ul>
          <li>Cybersecurity Awareness – LSPU (2024)</li>
          <li>Data Visualization Workshop – Zuitt (2024)</li>
          <li>Basic Web Development – Zuitt (2024)</li>
        </ul>
      </section>
    </aside>

    <main>
      <section class="about" data-aos="fade-up">
        <h2>About Me</h2>
        <div class="card">
          <p>I’m a BSIT graduate specialized in Web and Mobile App Development. During my internship at DevTeam Outsourcing Inc., I worked on full stack applications using Laravel, PHP, HTML, and CSS. I'm committed to writing clean, scalable, and maintainable code.</p>
        </div>
      </section>

      <section class="projects" data-aos="fade-up">
        <h2>Projects</h2>
        <div class="card" x-data="{ open: false }">
          <h3 @click="open = !open" style="cursor: pointer;">DevTeam Internship System 🔽</h3>
          <div x-show="open" x-transition>
            <p>Developed internal tools for task management and code reviews using Laravel and Tailwind CSS. Integrated role-based access, validation, and secure authentication.</p>
          </div>
        </div>

        <div class="card" x-data="{ open: false }">
          <h3 @click="open = !open" style="cursor: pointer;">Zuitt Capstone 🔽</h3>
          <div x-show="open" x-transition>
            <p>Created a responsive user management dashboard with CRUD features and secure login. Focused on file structure and reusable UI components.</p>
          </div>
        </div>
      </section>

      <section class="live-projects" data-aos="fade-up">
        <h2>Live Projects</h2>
        <div class="card">
          <h3>Personal Portfolio Website</h3>
          <p>A modern, responsive portfolio built with HTML and CSS. Deployed via GitHub Pages.</p>
          <p><a href="https://emmansantos1.github.io/" target="_blank">🌐 View Live</a> |
            <a href="https://github.com/EmmanSantos1" target="_blank">💻 View Code</a></p>
        </div>
      </section>

      <section class="code-examples" data-aos="fade-up">
        <h2>Code Sample</h2>
        <div class="card">
          <h3>Laravel Route Example</h3>
          <code>
Route::middleware(['auth'])->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'index']);
  Route::resource('/users', UserController::class);
});
          </code>
        </div>
      </section>
    </main>
  </div>

  <footer>
    <p>&copy; <?php echo date("Y"); ?> Emmanuel Santos Jr. | Built with ❤️ and clean code.</p>
  </footer>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800 });

    // Animate skill bars
    window.addEventListener('load', () => {
      document.querySelectorAll('.fill').forEach(el => {
        el.style.width = el.getAttribute('data-percent');
      });
    });
  </script>
</body>
</html>