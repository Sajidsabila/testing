<!DOCTYPE html>
<html lang="en">
<!-- divinectorweb.com -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Resume website html css</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('cv.css') }}">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="img-area">
                <img src="https://images.pexels.com/photos/3823495/pexels-photo-3823495.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="">
            </div>
            <h1>Jason Holder</h1>
            <h3>Full-Stack Web Developer</h3>
        </div>

        <div class="main">
            <div class="left">
                <h2>Personal Information</h2>
                <p><strong>Name:</strong> Jason Holder</p>
                <p><strong>Age:</strong> 30</p>
                <p><strong>Email:</strong> jholder@email.com</p>
                <p><strong>Phone:</strong> 000 000 0000</p>
                <h2>Skills</h2>
                <ul>
                    <li>HTML/CSS</li>
                    <li>JavaScript</li>
                    <li>React</li>
                    <li>Node.js</li>
                    <li>SQL</li>
                </ul>
                <h2>Education</h2>
                <h3>B.Sc in Computer Science</h3>
                <p>University of XYZ, 2014-2018</p> <br>
                <h3>M.Sc in Computer Science</h3>
                <p>University of XYZ, 2019-2020</p>
            </div>

            <div class="right">
                <h2>Work Experience</h2>
                <h3>XYZ Company</h3>
                <p><strong>Position:</strong> Software Developer</p>
                <p><strong>Duration:</strong> 2018-2022</p>
                <ul>
                    <li>Developed and maintained web applications using React, Node.js, and SQL</li>
                    <li>Implemented responsive design using CSS flexbox and media queries</li>
                    <li>Collaborated with cross-functional teams to deliver high-quality software products</li>
                </ul> <br>
                <h3>ABC Company</h3>
                <p><strong>Position:</strong> Web Developer</p>
                <p><strong>Duration:</strong> 2016-2018</p>
                <ul>
                    <li>Created and maintained websites using HTML, CSS, and JavaScript</li>
                    <li>Optimized website performance and user experience using best practices</li>
                    <li>Worked with clients to understand their needs and deliver custom solutions</li>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>
