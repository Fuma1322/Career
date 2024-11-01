<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Courses Management</title>
</head>
<body>
    <div class="container-scroller">
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <!-- Page Body -->
        <div class="container-fluid page-body-wrapper">
            <!-- Sidebar -->
            <div class="sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="institutions.php">Institutions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Faculty.php">Add Faculty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Course.php">Manage Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">
                                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Courses</a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Tab Content -->
                                <div class="tab-content tab-content-basic">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                                        <div class="row">
                                            <div class="col-lg-8 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="d-sm-flex justify-content-between align-items-start">
                                                                    <div>
                                                                        <h4 class="card-title card-title-dash">Courses</h4>
                                                                    </div>
                                                                    <div>
                                                                        <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button" onclick="showAddCourseForm()">
                                                                            <i class="mdi mdi-book-plus"></i>Add Course
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                                <!-- Form to Add/Update Course -->
                                                                <div id="courseForm" style="display: none; margin-top: 20px;">
                                                                    <h5 id="formTitle">Add Course</h5>
                                                                    <form id="form">
                                                                        <div class="mb-3">
                                                                            <label for="course_code" class="form-label">Course Code</label>
                                                                            <input type="text" class="form-control" id="course_code" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="course_name" class="form-label">Course Name</label>
                                                                            <input type="text" class="form-control" id="course_name" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="description" class="form-label">Description</label>
                                                                            <textarea class="form-control" id="description" rows="3"></textarea>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="credits" class="form-label">Credits</label>
                                                                            <input type="number" class="form-control" id="credits" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="start_date" class="form-label">Start Date</label>
                                                                            <input type="date" class="form-control" id="start_date" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="end_date" class="form-label">End Date</label>
                                                                            <input type="date" class="form-control" id="end_date" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="faculty_id" class="form-label">Faculty ID</label>
                                                                            <input type="number" class="form-control" id="faculty_id" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="institution_id" class="form-label">Institution ID</label>
                                                                            <input type="number" class="form-control" id="institution_id" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <button type="submit" class="btn btn-success">Save Course</button>
                                                                            <button type="button" class="btn btn-secondary" onclick="hideAddCourseForm()">Cancel</button>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                                <div class="table-responsive mt-1">
                                                                    <table class="table select-table" id="courseTable">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>
                                                                                    <div class="form-check form-check-flat mt-0">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" class="form-check-input" aria-checked="false" id="check-all">
                                                                                            <i class="input-helper"></i>
                                                                                        </label>
                                                                                    </div>
                                                                                </th>
                                                                                <th>Course Code</th>
                                                                                <th>Course Name</th>
                                                                                <th>Description</th>
                                                                                <th>Credits</th>
                                                                                <th>Start Date</th>
                                                                                <th>End Date</th>
                                                                                <th>Faculty ID</th>
                                                                                <th>Institution ID</th>
                                                                                <th>Created At</th>
                                                                                <th>Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <!-- Data will be populated here -->
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
                        <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- JS Plugins -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/todolist.js"></script>

    <script>
        let courses = [
            { course_id: 1, course_code: 'CS101', course_name: 'Introduction to Computer Science', description: 'Basics of Computer Science', credits: 3, start_date: '2024-01-10', end_date: '2024-05-20', faculty_id: 1, institution_id: 1, created_at: '2024-06-22' },
            { course_id: 2, course_code: 'MATH101', course_name: 'Calculus I', description: 'Introduction to Calculus', credits: 4, start_date: '2024-01-15', end_date: '2024-05-15', faculty_id: 2, institution_id: 1, created_at: '2024-06-22' },
            // Add more dummy data as needed
        ];
        let currentId = null;

        function populateTable(data) {
            const tableBody = document.querySelector('#courseTable tbody');
            tableBody.innerHTML = '';
            data.forEach(course => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>
                        <div class="form-check form-check-flat mt-0">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" aria-checked="false">
                                <i class="input-helper"></i>
                            </label>
                        </div>
                    </td>
                    <td>${course.course_code}</td>
                    <td>${course.course_name}</td>
                    <td>${course.description}</td>
                    <td>${course.credits}</td>
                    <td>${course.start_date}</td>
                    <td>${course.end_date}</td>
                    <td>${course.faculty_id}</td>
                    <td>${course.institution_id}</td>
                    <td>${course.created_at}</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editCourse(${course.course_id})">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteCourse(${course.course_id})">Delete</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }

        function showAddCourseForm() {
            document.getElementById('courseForm').style.display = 'block';
            document.getElementById('formTitle').innerText = 'Add Course';
            clearForm();
        }

        function hideAddCourseForm() {
            document.getElementById('courseForm').style.display = 'none';
            clearForm();
        }

        function clearForm() {
            document.getElementById('form').reset();
            currentId = null;
        }

        document.getElementById('form').addEventListener('submit', function (event) {
            event.preventDefault();
            const course_code = document.getElementById('course_code').value;
            const course_name = document.getElementById('course_name').value;
            const description = document.getElementById('description').value;
            const credits = document.getElementById('credits').value;
            const start_date = document.getElementById('start_date').value;
            const end_date = document.getElementById('end_date').value;
            const faculty_id = document.getElementById('faculty_id').value;
            const institution_id = document.getElementById('institution_id').value;

            if (currentId) {
                // Update existing course
                const courseIndex = courses.findIndex(course => course.course_id === currentId);
                if (courseIndex !== -1) {
                    courses[courseIndex] = { course_id: currentId, course_code, course_name, description, credits, start_date, end_date, faculty_id, institution_id, created_at: new Date().toISOString().slice(0, 10) };
                }
            } else {
                // Add new course
                const newCourse = { course_id: courses.length + 1, course_code, course_name, description, credits, start_date, end_date, faculty_id, institution_id, created_at: new Date().toISOString().slice(0, 10) };
                courses.push(newCourse);
            }

            hideAddCourseForm();
            populateTable(courses);
        });

        function editCourse(id) {
            const course = courses.find(c => c.course_id === id);
            if (course) {
                document.getElementById('course_code').value = course.course_code;
                document.getElementById('course_name').value = course.course_name;
                document.getElementById('description').value = course.description;
                document.getElementById('credits').value = course.credits;
                document.getElementById('start_date').value = course.start_date;
                document.getElementById('end_date').value = course.end_date;
                document.getElementById('faculty_id').value = course.faculty_id;
                document.getElementById('institution_id').value = course.institution_id;
                currentId = course.course_id;

                showAddCourseForm();
            }
        }

        function deleteCourse(id) {
            courses = courses.filter(course => course.course_id !== id);
            populateTable(courses);
        }

        // Populate the table on initial load
        window.onload = () => {
            populateTable(courses);
        };
    </script>
</body>
</html>
