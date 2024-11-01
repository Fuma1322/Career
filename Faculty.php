<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Dashboard</title>
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
                        <a class="nav-link" href="Course.php">Add Course</a>
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
                                            <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Audiences</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Demographics</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">More</a>
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
                                                                        <h4 class="card-title card-title-dash">Faculties</h4>
                                                                    </div>
                                                                    <div>
                                                                        <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button" onclick="showAddFacultyForm()">
                                                                            <i class="mdi mdi-account-plus"></i>Add Faculty
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                                <!-- Form to Add/Update Faculty -->
                                                                <div id="facultyForm" style="display: none; margin-top: 20px;">
                                                                    <h5 id="formTitle">Add Faculty</h5>
                                                                    <form id="form">
                                                                        <div class="mb-3">
                                                                            <label for="name" class="form-label">Name</label>
                                                                            <input type="text" class="form-control" id="name" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="email" class="form-label">Email</label>
                                                                            <input type="email" class="form-control" id="email" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="phone" class="form-label">Phone</label>
                                                                            <input type="tel" class="form-control" id="phone" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="department" class="form-label">Department</label>
                                                                            <input type="text" class="form-control" id="department" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="institute_id" class="form-label">Institute ID</label>
                                                                            <input type="number" class="form-control" id="institute_id" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <button type="submit" class="btn btn-success">Save Faculty</button>
                                                                            <button type="button" class="btn btn-secondary" onclick="hideAddFacultyForm()">Cancel</button>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                                <div class="table-responsive mt-1">
                                                                    <table class="table select-table" id="facultyTable">
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
                                                                                <th>Name</th>
                                                                                <th>Email</th>
                                                                                <th>Phone</th>
                                                                                <th>Department</th>
                                                                                <th>Institute ID</th>
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
        let faculties = [
            { id: 1, institute_id: 1, name: 'John Doe', email: 'john.doe@example.com', phone: '1234567890', department: 'Computer Science', created_at: '2024-06-22' },
            { id: 2, institute_id: 1, name: 'Jane Smith', email: 'jane.smith@example.com', phone: '0987654321', department: 'Mathematics', created_at: '2024-06-22' },
            // Add more dummy data as needed
        ];
        let currentId = null;

        function populateTable(data) {
            const tableBody = document.querySelector('#facultyTable tbody');
            tableBody.innerHTML = ''; // Clear existing rows
            data.forEach((faculty) => {
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
                    <td>${faculty.name}</td>
                    <td>${faculty.email}</td>
                    <td>${faculty.phone}</td>
                    <td>${faculty.department}</td>
                    <td>${faculty.institute_id}</td>
                    <td>${faculty.created_at}</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editFaculty(${faculty.id})">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteFaculty(${faculty.id})">Delete</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }

        function showAddFacultyForm() {
            document.getElementById('facultyForm').style.display = 'block';
            document.getElementById('formTitle').innerText = 'Add Faculty';
            clearForm();
        }

        function hideAddFacultyForm() {
            document.getElementById('facultyForm').style.display = 'none';
            clearForm();
        }

        function clearForm() {
            document.getElementById('form').reset();
            currentId = null;
        }

        document.getElementById('form').addEventListener('submit', function (event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const department = document.getElementById('department').value;
            const institute_id = document.getElementById('institute_id').value;

            if (currentId) {
                // Update existing faculty
                const facultyIndex = faculties.findIndex(faculty => faculty.id === currentId);
                if (facultyIndex !== -1) {
                    faculties[facultyIndex] = { id: currentId, name, email, phone, department, institute_id, created_at: new Date().toISOString().slice(0, 10) };
                }
            } else {
                // Add new faculty
                const newFaculty = { id: faculties.length + 1, name, email, phone, department, institute_id, created_at: new Date().toISOString().slice(0, 10) };
                faculties.push(newFaculty);
            }

            hideAddFacultyForm();
            populateTable(faculties);
        });

        function editFaculty(id) {
            const faculty = faculties.find(f => f.id === id);
            if (faculty) {
                document.getElementById('name').value = faculty.name;
                document.getElementById('email').value = faculty.email;
                document.getElementById('phone').value = faculty.phone;
                document.getElementById('department').value = faculty.department;
                document.getElementById('institute_id').value = faculty.institute_id;
                currentId = faculty.id;

                showAddFacultyForm();
            }
        }

        function deleteFaculty(id) {
            faculties = faculties.filter(faculty => faculty.id !== id);
            populateTable(faculties);
        }

        // Populate the table on initial load
        window.onload = () => {
            populateTable(faculties);
        };
    </script>
</body>
</html>
