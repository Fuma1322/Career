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
                                                                        <h4 class="card-title card-title-dash">Institutions</h4>
                                                                    </div>
                                                                    <div>
                                                                        <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button" onclick="showAddInstitutionForm()">
                                                                            <i class="mdi mdi-account-plus"></i>Add Institution
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                                <!-- Form to Add/Update Institution -->
                                                                <div id="institutionForm" style="display: none; margin-top: 20px;">
                                                                    <h5 id="formTitle">Add Institution</h5>
                                                                    <form id="form">
                                                                        <div class="mb-3">
                                                                            <label for="name" class="form-label">Name</label>
                                                                            <input type="text" class="form-control" id="name" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="address" class="form-label">Address</label>
                                                                            <input type="text" class="form-control" id="address" required>
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
                                                                            <button type="submit" class="btn btn-success">Save Institution</button>
                                                                            <button type="button" class="btn btn-secondary" onclick="hideAddInstitutionForm()">Cancel</button>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                                <div class="table-responsive mt-1">
                                                                    <table class="table select-table" id="institutionTable">
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
                                                                                <th>Address</th>
                                                                                <th>Email</th>
                                                                                <th>Phone</th>
                                                                                <th>Created At</th>
                                                                                <th>Admin ID</th>
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
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> <a href="https://www.bootstrapdash.com/" target="_blank"></span>
                        <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">.</span>
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
        let institutions = [
            { id: 1, name: 'Botho University', address: 'Maseru Mall', email: 'botho@gmail.org.ls', phone: '2201264', created_at: '22/06/24', admin_id: '12' },
            { id: 2, name: 'Example University', address: 'Main Street', email: 'example@university.com', phone: '123456789', created_at: '01/01/24', admin_id: '13' },
            // Add more dummy data as needed
        ];
        let currentId = null;

        function populateTable(data) {
            const tableBody = document.querySelector('#institutionTable tbody');
            tableBody.innerHTML = ''; // Clear existing rows
            data.forEach((institution) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td><input type="checkbox" aria-label="Select ${institution.name}"></td>
                    <td>${institution.name}</td>
                    <td>${institution.address}</td>
                    <td>${institution.email}</td>
                    <td>${institution.phone}</td>
                    <td>${institution.created_at}</td>
                    <td>${institution.admin_id}</td>
                    <td>
                        <button class="btn btn-success btn-sm" onclick="showEditInstitutionForm(${institution.id})">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteInstitution(${institution.id})">Delete</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }

        function showAddInstitutionForm() {
            document.getElementById('institutionForm').style.display = 'block';
            document.getElementById('formTitle').innerText = 'Add Institution';
            document.getElementById('form').reset();
            currentId = null; // Reset current ID for adding
        }

        function showEditInstitutionForm(id) {
            const institution = institutions.find(inst => inst.id === id);
            if (institution) {
                document.getElementById('institutionForm').style.display = 'block';
                document.getElementById('formTitle').innerText = 'Edit Institution';
                document.getElementById('name').value = institution.name;
                document.getElementById('address').value = institution.address;
                document.getElementById('email').value = institution.email;
                document.getElementById('phone').value = institution.phone;
                currentId = id; // Set current ID for updating
            }
        }

        function hideAddInstitutionForm() {
            document.getElementById('institutionForm').style.display = 'none';
        }

        function deleteInstitution(id) {
            institutions = institutions.filter(inst => inst.id !== id);
            populateTable(institutions);
        }

        document.getElementById('form').addEventListener('submit', function (event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const address = document.getElementById('address').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;

            if (currentId) {
                // Update existing institution
                const institution = institutions.find(inst => inst.id === currentId);
                if (institution) {
                    institution.name = name;
                    institution.address = address;
                    institution.email = email;
                    institution.phone = phone;
                }
            } else {
                // Add new institution
                const newInstitution = {
                    id: institutions.length + 1,
                    name,
                    address,
                    email,
                    phone,
                    created_at: new Date().toLocaleDateString(),
                    admin_id: '1' // Replace with actual admin ID
                };
                institutions.push(newInstitution);
            }

            hideAddInstitutionForm();
            populateTable(institutions);
        });

        // Initialize table with dummy data
        populateTable(institutions);
    </script>
</body>
</html>
