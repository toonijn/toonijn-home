<?php
if (file_exists('private.php'))
    require_once('private.php');

function private_data($name)
{
    global $private_fields;
    if (isset($private_fields) && isset($private_fields[$name])) return $private_fields[$name];
    return "";
}

function print_date($date)
{
    return '<span class="date">' . str_replace('-', '<span class="dash">&dash;</span>', $date) . '</span>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - Toon Baeyens</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <h1>Resume - Toon Baeyens</h1>
        <a class="no-web" href="tel:<?= str_replace(' ', '', private_data("phone")) ?>">Phone: <?= private_data("phone") ?></a>
        <a href="mailto:<?= private_data("email") ?>">Email<span class="no-web">: <?= private_data("email") ?></span></a>
        <a href="https://toonijn.be/">Personal webpage<span class="no-web">: toonijn.be</span></a>
        <a href="https://github.com/toonijn">GitHub<span class="no-web">: github.com/toonijn</span></a>
        <a class="no-print" href="https://www.linkedin.com/in/toon-baeyens/">LinkedIn</a>
        <a class="no-print" href="https://orcid.org/0000-0002-2069-7824">ORCID</a>
        <a class="no-print" href="https://scholar.google.com/citations?user=7UMAtFoAAAAJ">Google Scholar</a>
    </header>
    <section>
        <h2>Work Experience</h2>
        <ul class="date-list">
            <li class="experience">
                <?= print_date("2018-2023") ?>
                <span class="title">Teaching Assistant</a></span>
                <span class="location"><a href="https://www.ugent.be/we/twist/en"> Department of Applied mathematics,
                        Computer science and Statistics</a> - Ghent
                    University</span>
                <ul class="description">
                    <li>Guiding students with their bachelor's and master's thesis.</li>
                    <li>Providing exercises for three Scientific Computing courses for mathematics and computer science students.</li>
                    <li>Assisting for the introductory Python-programming course for all students of the Faculty of Sciences.</li>
                    <li>Outreach for the mathematics program</li>
                </ul>
            </li>
            <li class="experience">
                <span class="date">summer 2018</span>
                <span class="title">Data engineer - Internship</a></span>
                <span class="location"><a href="https://www.kbc.com/">KBC</a> - Data Intelligence Services, Leuven</span>
                <ul class="description">
                    <li>Researching how <a href="https://mlflow.org/">MLflow</a> can be used within machine learning projects.</li>
                </ul>
            </li>
            <li class="experience">
                <span class="date">2017</span>
                <span class="title">Data scientist - Internship and Student Job</a></span>
                <span class="location"><a href="https://www.yazzoom.com/">Yazzoom</a> - Ghent</span>
                <ul class="description">
                    <li>Automatic pattern recognition in logging data.</li>
                    <li>Setting up a windows continuous integration server.</li>
                </ul>
            </li>
            <li class="experience">
                <?= print_date("2015-2017") ?>
                <span class="title">Assisting during summer course - Student job</a></span>
                <span class="location">Ghent University</span>
                <ul class="description">
                    <li>Assisting during the summer course mathematics for first year students.</li>
                </ul>
            </li>
            <li class="experience">
                <?= print_date("2012-2014") ?>
                <span class="title">Frontend developer - Student job</a></span>
                <span class="location">Blue Cherry - Antwerp</span>
                <ul class="description">
                    <li>Implementing web-site designs into HTML and CSS.</li>
                </ul>
            </li>
        </ul>
    </section>
    <section>
        <h2>Education</h2>
        <ul class="date-list">
            <li class="experience">
                <?= print_date("2018-2023") ?>
                <span class="title">Doctor of Science: Mathematics -
                    <a href="https://toonijn.be/thesis/">Algorithms for time-independent Schrödinger equations
                    </a></span>
                <span class="location">Department of Applied mathematics, Computer science and Statistics - Ghent
                    University</span>
                <ul class="description">
                    <li>To-do: C++, Python short summary</li>
                </ul>
                </li>
            <li class="experience">
                <?= print_date("2016-2018") ?>
                <span class="title">Master of Science: Mathematics - major Applied Mathematics and Computer
                    Science</span>
                <span class="location">Ghent University</span>
            </li>
            <li class="experience">
                <?= print_date("2013-2016") ?>
                <span class="title">Bachelor of Science: Mathematics</span>
                <span class="location">Ghent University</span>
            </li>
        </ul>
    </section>
    <section>
        <h2>Extra-curriculars</h2>
        <ul class="date-list">
            <li class="experience">
                <?= print_date("2018-2023") ?>
                <span class="title">Outreach and popularizing mathematics</span>
                <ul class="description">
                    <li>Yearly science festival at Ghent University<ul>
                            <li>2020: "Simulating the world" - An online interactive presentation about (partial) differential equations.</li>
                            <li>2019: "Hyperbolic geometry in VR" - Workshop and talk about hyperbolic geometry and VR.</li>
                        </ul>
                    </li>
                    <li>2019: Pint of science: Art in mathematics - Unexpected beauty in root finding algorithms.</li>
                    <li>Three poster images for the <a href="https://www.vwo.be/vwo/posters/">VWO</a>.</li>
                    <li>Five posters and interactive visualizations of fractals for <a href="https://www.imaginarymaths.be/">Imaginary</a>.</li>
                </ul>
            </li>
            <li class="experience">
                <?= print_date("2020-2023") ?>
                <span class="title">Faculty board member</span>
                <span class="location">Faculty of Sciences - Ghent University</span>
            </li>
            <li class="experience">
                <?= print_date("2014-2018") ?>
                <span class="title">Student representative</span>
                <span class="location">Ghent University</span>
            </li>
            <li class="experience">
                <span class="title">Participating in programming/math competitions</span>
                <ul class="description">
                    <li>Three times second place in the <a href="https://www.vlaamseprogrammeerwedstrijd.be/">Flemish Programming Competition (VPW)</a></li>
                    <li>Twice the top team from Ghent in the <a href="https://codingcompetitions.withgoogle.com/hashcode">Google Hash Code</a></li>
                    <li>Second round of the <a href="https://codingcompetitions.withgoogle.com/hashcode">Google Code Jam</a></li>
                    <li>Third prize at the <a href="https://www.imc-math.org.uk/">International Mathematics Competition for University Students (IMC)</a></li>
                    <li>Three times finalist at the <a href="https://www.cybersecuritychallenge.be/">Cyber Security Challenge Belgium</a></li>
                    <li>Bronze medal at the <a href="http://www.bxmo.org/">Benelux Mathematical Olympiad (BxMO)</a></li>
                    <li>Three times finalist at the <a href="https://www.vwo.be/">Flemish Mathematics Olympiad (VWO)</a></li>
                </ul>
            </li>
            <li class="experience">
                <span class="title">More than 350 problems solved on Project Euler</span>
                <span class="location"><a href="https://projecteuler.net/">ProjectEuler.net</a></span>
            </li>
            <li class="experience">
                <span class="title">Open-source contributions</span>
                <ul class="description">
                    <li><a href="https://trac.wildfiregames.com/changeset/24721">0 A. D.</a>: Real-time strategy game in C++ and JavaScript.</li>
                    <li><a href="https://github.com/jupyter/notebook/pull/5488">Jupyter Notebook</a>: Web application for creating computational documents.</li>
                    <li><a href="https://github.com/chalk/chalk/pull/392">Chalk</a>: JavaScript library for terminal string styling.</li>
                    <li><a href="https://github.com/deshaw/jupyterlab-execute-time/pull/17">jupyterlab-execute-time</a>: Plug-in for JupyterLab to display cell timings.</li>
                    <li><a href="https://github.com/ladisk/pyuff/pull/70">pyuff</a>: Universal file format reader and writer in Python.</li>
                    <li><a href="https://github.com/mlflow/mlflow">MLflow</a>: A machine learning lifecycle platform</li>
                </ul>
            </li>
        </ul>
    </section>
    <section>
        <h2>Publications</h2>
        <ul class="date-list">
            <li class="publication">
                <span class="authors">Baeyens, T., & Van Daele, M.</span>
                <span class="year">(2021)</span>
                <span class="title">
                    <a href="https://doi.org/10.1016/j.cpc.2020.107568">The fast and accurate computation of eigenvalues
                        and eigenfunctions of
                        time-independent one-dimensional Schrödinger equations.</a></span>
                <span class="journal">Computer Physics Communications, 258, 107568.</span>
            </li>
            <li class="publication">
                <span class="authors">Baeyens, T., & Van Daele, M.</span>
                <span class="year">(2022)</span>
                <span class="title"><a href="https://doi.org/10.1016/j.cam.2022.114292">Improvements to the computation
                        of eigenvalues and eigenfunctions of two-dimensional
                        Schrödinger equations by constant perturbation based algorithms.</a></span>
                <span class="journal">Journal of Computational and Applied Mathematics, 412, 114292.</span>
            </li>
            <li class="publication">
                <span class="authors">Maertens, R., Van Petegem, C., Strijbol, N., Baeyens, T., Jacobs, A. C., Dawyndt,
                    P., & Mesuere, B.</span>
                <span class="year">(2022)</span>
                <span class="title"><a href="https://doi.org/10.1111/jcal.12662">Dolos: Language-agnostic plagiarism
                        detection in source code.</a></span>
                <span class="journal">Journal of Computer Assisted Learning, 38(4), 1046-1061.</span>
            </li>
        </ul>

        <h3>Active research projects</h3>
        <ul class="date-list">
            <li class="publication">
                <span class="authors">Baeyens, T., & Van Daele, M.</span>
                <span class="title">Strands: new efficient technique for solving time-independent two-dimensional Schrödinger equations accurately.</span>
            </li>
            <li class="publication">
                <span class="authors">Baeyens, T., Van Daele, M., & Vernaeve, H.</span>
                <span class="title">Determining indices of eigenvalues of linear self-adjoint elliptic operators on bounded Lipschitz domains.</span>
            </li>
            <li class="publication">
                <span class="authors">Baeyens, T., Govaerts, W., Van Daele, M., & Vanden Bussche, C.</span>
                <span class="title">Local Lyapunov exponents, spiking and bistability in SEIR and SEIRS models for COVID-19</span>
            </li>
            <li class="publication">
                <span class="authors">Coudron, W., Baeyens, T., Lootens, P., Pardon, P., Reubens, B., Van Den Berge, S., De Frenne, P., Verheyen, K., & De Swaef, T.</span>
                <span class="title">Quantifying temporal and spatial variability in light availability in agroforestry systems</span>
            </li>
        </ul>
    </section>
</body>

</html>