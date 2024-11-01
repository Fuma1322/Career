<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerSpark</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <style>
        /* Modal styling */
        .modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); }
        .modal-content { background: #fff; padding: 20px; margin: 50px auto; width: 400px; border-radius: 8px; }
        .close { float: right; font-size: 24px; cursor: pointer; color: #333; }
        .modal-content h3 { margin-top: 0; }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
</head>

<body>

    <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>CareerSpark</h3>
        </div>

        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                <h4>Limkokwing University</h4>
                <small>Institute</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li><a href="index.php"><span class="las la-home"></span><small>Home</small></a></li>
                    <li><a href="#" class="active"><span class="las la-home"></span><small>Dashboard</small></a></li>
                    <li><a href="javascript:openProfile()"><span class="las la-tasks"></span><small>Profile</small></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div class="header-menu">
                    <label><span class="las la-search"></span></label>
                    <div class="user">
                        <div class="bg-img" style="background-image: url(img/1.jpeg)"></div>
                        <span class="las la-power-off"></span>
                        <span>Logout</span>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="page-header">
                <h1>Dashboard</h1>
                <small>Welcome to your Dashboard</small>
            </div>

            <div class="page-content">
                <div class="analytics">
                    <div class="card"><div class="card-head"><h2>107,200</h2><span class="las la-user-friends"></span></div></div>
                    <div class="card"><div class="card-head"><h2>340,230</h2><span class="las la-eye"></span></div></div>
                    <div class="card"><div class="card-head"><h2>47,500</h2><span class="las la-envelope"></span></div></div>
                </div>

                <div class="records table-responsive">
                    <div class="record-header">
                        <div class="add"><button onclick="openFacultyModal()">Add Faculty</button></div>
                        <div class="add"><button onclick="openCourseModal()">Add Course</button></div>
                        <div class="add"><button onclick="publishAdmissions()">Publish Admissions</button></div>
                    </div>

                    <table width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>COURSE</th>
                                <th>FACULTY</th>
                                <th>APPLICANTS</th>
                                <th>DURATION</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody id="course-table-body">
                            <!-- Courses data will be loaded here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal for Adding Faculty -->
    <div id="faculty-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeFacultyModal()">&times;</span>
            <h3>Add Faculty</h3>
            <form id="add-faculty-form" onsubmit="addFaculty(event)">
                <label for="facultyName">Faculty Name:</label>
                <input type="text" id="facultyName" name="facultyName" required>
                <button type="submit">Save</button>
            </form>
        </div>
    </div>

    <!-- Modal for Adding Course -->
    <div id="course-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeCourseModal()">&times;</span>
            <h3>Add Course</h3>
            <form id="add-course-form" onsubmit="addCourse(event)">
                <label for="courseName">Course Name:</label>
                <input type="text" id="courseName" name="courseName" required>
                
                <label for="facultySelect">Faculty:</label>
                <select id="facultySelect" required>
                    <option value="">Select Faculty</option>
                </select>

                <label for="applicants">Applicants:</label>
                <input type="number" id="applicants" name="applicants" required>

                <label for="duration">Duration:</label>
                <input type="text" id="duration" name="duration" required>

                <button type="submit">Save</button>
            </form>
        </div>
    </div>

    <!-- Modal for Profile -->
    <div id="profile-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeProfile()">&times;</span>
            <h3>Profile</h3>
            <form id="profile-form">
                <label for="instituteName">Institute Name:</label>
                <input type="text" id="instituteName" value="Limkokwing University" required>
                <button type="submit">Update</button>
            </form>
        </div>
    </div>

    <script>
        // Predefined data for faculties
        const faculties = [{ id: 1, name: "Faculty of Arts" }];
        const courses = [];
        
        // Predefined list of names for admitted students
        const studentNames = [
            "Thato Lesaoana", "Thabang Libantshe", "Lerato Pule", "Mpho Nona",
            "Sebabatso Bosiu", "Thembane Tsiu", "Ranko Ranko", "Lebajoa Lejone"
        ];

        function loadCourses() {
            const tbody = document.getElementById("course-table-body");
            tbody.innerHTML = "";
            courses.forEach((course, index) => {
                const row = `<tr>
                    <td>${index + 1}</td>
                    <td>${course.name}</td>
                    <td>${course.faculty}</td>
                    <td>${course.applicants}</td>
                    <td>${course.duration}</td>
                    <td><button onclick="viewApplications(${course.id})">View Applications</button></td>
                </tr>`;
                tbody.innerHTML += row;
            });
        }

        function openFacultyModal() { document.getElementById("faculty-modal").style.display = "block"; }
        function closeFacultyModal() { document.getElementById("faculty-modal").style.display = "none"; }
        function openCourseModal() { document.getElementById("course-modal").style.display = "block"; loadFacultyOptions(); }
        function closeCourseModal() { document.getElementById("course-modal").style.display = "none"; }

        function loadFacultyOptions() {
            const facultySelect = document.getElementById("facultySelect");
            facultySelect.innerHTML = '<option value="">Select Faculty</option>';
            faculties.forEach(faculty => {
                facultySelect.innerHTML += `<option value="${faculty.id}">${faculty.name}</option>`;
            });
        }

        function addFaculty(event) {
            event.preventDefault();
            const facultyName = document.getElementById("facultyName").value;
            const newFaculty = { id: faculties.length + 1, name: facultyName };
            faculties.push(newFaculty);
            closeFacultyModal();
            loadFacultyOptions(); // Reload faculty options in course modal
        }

        function addCourse(event) {
            event.preventDefault();
            const courseName = document.getElementById("courseName").value;
            const facultyId = document.getElementById("facultySelect").value;
            const applicants = document.getElementById("applicants").value;
            const duration = document.getElementById("duration").value;

            const faculty = faculties.find(f => f.id == facultyId);
            const newCourse = {
                id: courses.length + 1,
                name: courseName,
                faculty: faculty.name,
                applicants: parseInt(applicants),
                duration: duration
            };

            courses.push(newCourse);
            closeCourseModal();
            loadCourses(); // Refresh the course table
        }

        function publishAdmissions() {
            const { jsPDF } = window.jspdf; // Ensure jsPDF is accessible
            const doc = new jsPDF();
            doc.setFontSize(16);
            doc.text("List of Admitted Students", 20, 20);
            doc.setFontSize(12);
            let y = 30;
            courses.forEach(course => {
                doc.text(`Course: ${course.name}`, 20, y);
                doc.text(`Faculty: ${course.faculty}`, 20, y + 10);
                doc.text(`Applicants: ${course.applicants}`, 20, y + 20);
                doc.text(`Duration: ${course.duration}`, 20, y + 30);
                doc.text("Students:", 20, y + 40);

                const studentsForCourse = studentNames.slice(0, course.applicants); // List students for the current course
                studentsForCourse.forEach((student, index) => {
                    doc.text(`${index + 1}. ${student}`, 20, y + 50 + (index * 10));
                });

                y += 60 + (studentsForCourse.length * 10); // Increase y for the next course
            });
            doc.save("admitted_students.pdf");
            console.log("PDF generated and download triggered."); // Debugging line
        }

        function viewApplications(courseId) {
            alert(`Viewing applications for Course ID: ${courseId}`);
        }

        // Close modals when clicking outside of them
        window.onclick = function(event) {
            const modals = [document.getElementById("faculty-modal"), document.getElementById("course-modal"), document.getElementById("profile-modal")];
            modals.forEach(modal => {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            });
        };
    </script>
</body>
</html>
