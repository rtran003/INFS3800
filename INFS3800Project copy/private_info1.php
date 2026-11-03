<?php
require 'includes/session_check.php';   // Session check (common)
$pageTitle = 'Projects'; $active = 'private_info1.php';
include 'includes/header.php';
?>

<section id="projects">
    <h2>Projects <span class="badge">Private</span></h2>
    <div class="entry">
        <div class="entry-title">Ticketing System and Management</div>
        <div class="entry-subtitle">Spiceworks</div>
        <ul>
            <li>Managed 50+ weekly IT support tickets in Spiceworks, maintaining a sub-2-hour response time and 90%+ SLA closure rate.</li>
            <li>Escalated 100% of Tier 1 issues to Tier 2/3 teams with detailed notes, reducing resolution time by 30% and minimizing repeat tickets.</li>
            <li>Developed 15+ knowledge base articles, decreasing recurring support requests by 25% and accelerating technician onboarding.</li>
        </ul>
    </div>
    <div class="entry">
        <div class="entry-title">Active Directory Project</div>
        <div class="entry-subtitle">PowerShell, Windows Server</div>
        <ul>
            <li>Deployed and configured an enterprise-grade Active Directory environment on HackTheBox, simulating real-world IT infrastructure.</li>
            <li>Automated provisioning and group management for 0–25 user accounts using PowerShell scripts.</li>
            <li>Enforced domain-wide security policies through Group Policy Objects (GPOs), documenting repeatable processes analogous to standard operating procedures.</li>
        </ul>
    </div>
    <div class="entry">
        <div class="entry-title">Power BI Portfolio Dashboard</div>
        <div class="entry-subtitle">Power BI, Excel</div>
        <ul>
            <li>Built an interactive Power BI dashboard comparing sales and performance data across Walmart and Amazon to identify trends and inform business choices.</li>
            <li>Connected and modeled data from multiple retail sources in Excel to create unified reporting views across stores.</li>
            <li>Analyzed pricing, volume, and performance metrics across both platforms to surface insights and support data-driven strategy recommendations.</li>
        </ul>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
