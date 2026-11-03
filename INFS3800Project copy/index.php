<?php $pageTitle = 'Home'; $active = 'index.php'; include 'includes/header.php'; ?>

<div class="profile-picture">
    <img src="img/Portfolio.png" alt="Ryan Tran profile picture">
</div>

<section id="about">
    <h2>About Me</h2>
    <p>
        I'm a senior at the University of Colorado Colorado Springs, pursuing a
        Bachelor of Science in Information Technology. I also hold an Associate of
        Science in Computer and Information Sciences from Pikes Peak State College,
        along with certifications in IT and Security. Skilled in Microsoft Power BI
        and marketing, I'm motivated to apply my knowledge to meaningful real-world
        projects.
    </p>
    <div class="btn-row">
        <a class="btn" href="login.php">Login to view private pages</a>
    </div>
</section>

<section id="skills">
    <h2>Skills</h2>
    <p>Hover over a card to see what I've done with each skill.</p>
    <?php
    $skills = [
        ['python',     'Python',     'STEM lab sessions and data visualization with Matplotlib.'],
        ['java',       'Java',       'Object-oriented programming and data structures coursework.'],
        ['c',          'C',          'Low-level programming and memory management on Unix.'],
        ['r',          'R',          'Data analysis and charts using RStudio.'],
        ['mysql',      'SQL',        'Database design and queries, including this site\'s login and search.'],
        ['html5',      'HTML5',      'Interactive web pages and this portfolio\'s page structure.'],
        ['css3',       'CSS3',       'Consistent templates, responsive layout, and animations.'],
        ['git',        'Git',        'Version control for coursework and team projects.'],
        ['github',     'GitHub',     'Hosting code and sharing projects with students.'],
        ['docker',     'Docker',     'Containerized development environments.'],
        ['linux',      'Linux',      'Ubuntu and Unix command line administration.'],
        ['powershell', 'PowerShell',  'Automated Active Directory user and group provisioning.'],
        ['powerbi',    'Power BI',   'Interactive Walmart vs. Amazon sales dashboard.'],
    ];
    ?>
    <div class="skill-grid">
        <?php foreach ($skills as $i => $sk): ?>
        <div class="skill-card" style="--d: <?= $i * 0.15 ?>s">
            <img src="img/skills/<?= $sk[0] ?>.svg" alt="<?= e($sk[1]) ?> logo">
            <div class="skill-name"><?= e($sk[1]) ?></div>
            <div class="skill-desc"><?= e($sk[2]) ?></div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="marquee" aria-label="Other tools">
        <div class="marquee-track">
            <span>Unix</span><span>Visual Studio</span><span>Eclipse</span><span>RStudio</span><span>Matplotlib</span><span>Ubuntu</span><span>MS Office</span><span>Excel</span><span>Power BI</span><span>Active Directory</span><span>Spiceworks</span>
            <span>Unix</span><span>Visual Studio</span><span>Eclipse</span><span>RStudio</span><span>Matplotlib</span><span>Ubuntu</span><span>MS Office</span><span>Excel</span><span>Power BI</span><span>Active Directory</span><span>Spiceworks</span>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
