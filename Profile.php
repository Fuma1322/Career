<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Admin Profile Management</title>
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
                        <a class="nav-link" href="Profile.php">Admin Profiles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
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
                                            <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Admin Profiles</a>
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
                                                                        <h4 class="card-title card-title-dash">Admin Profiles</h4>
                                                                    </div>
                                                                    <div>
                                                                        <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button" onclick="showAddProfileForm()">
                                                                            <i class="mdi mdi-account-plus"></i>Add Admin Profile
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                                <!-- Form to Add/Update Admin Profile -->
                                                                <div id="adminProfileForm" style="display: none; margin-top: 20px;">
                                                                    <h5 id="formTitle">Add Admin Profile</h5>
                                                                    <form id="form">
                                                                        <div class="mb-3">
                                                                            <label for="admin_id" class="form-label">Admin ID</label>
                                                                            <input type="number" class="form-control" id="admin_id" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="full_name" class="form-label">Full Name</label>
                                                                            <input type="text" class="form-control" id="full_name" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="phone" class="form-label">Phone</label>
                                                                            <input type="text" class="form-control" id="phone">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="profile_image" class="form-label">Profile Image</label>
                                                                            <input type="file" class="form-control" id="profile_image" accept="image/*" onchange="previewImage(event)">
                                                                            <img id="image_preview" src="" alt="Image Preview" style="display:none; margin-top: 10px; width: 100px;"/>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <button type="submit" class="btn btn-success">Save Profile</button>
                                                                            <button type="button" class="btn btn-secondary" onclick="hideAddProfileForm()">Cancel</button>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                                <div class="table-responsive mt-1">
                                                                    <table class="table select-table" id="adminProfileTable">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Admin ID</th>
                                                                                <th>Full Name</th>
                                                                                <th>Phone</th>
                                                                                <th>Profile Image</th>
                                                                                <th>Updated At</th>
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
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"><a href="https://www.bootstrapdash.com/" target="_blank"></span>
                        <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center"> All rights reserved.</span>
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
        let adminProfiles = [
            { admin_id: 1, full_name: 'Alice Johnson', phone: '123-456-7890', profile_image: 'https://via.placeholder.com/150', updated_at: '2024-01-01' },
            { admin_id: 2, full_name: 'Bob Smith', phone: '098-765-4321', profile_image: 'https://via.placeholder.com/150', updated_at: '2024-01-02' },
            // Add more dummy data as needed
        ];
        let currentId = null;

        function populateTable(data) {
            const tableBody = document.querySelector('#adminProfileTable tbody');
            tableBody.innerHTML = '';
            data.forEach(profile => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${profile.admin_id}</td>
                    <td>${profile.full_name}</td>
                    <td>${profile.phone || 'N/A'}</td>
                    <td><img src="${profile.profile_image}" alt="${profile.full_name}" width="50"></td>
                    <td>${profile.updated_at}</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editProfile(${profile.admin_id})">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteProfile(${profile.admin_id})">Delete</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }

        function showAddProfileForm() {
            document.getElementById('adminProfileForm').style.display = 'block';
            document.getElementById('formTitle').innerText = 'Add Admin Profile';
            clearForm();
        }

        function hideAddProfileForm() {
            document.getElementById('adminProfileForm').style.display = 'none';
            clearForm();
        }

        function clearForm() {
            document.getElementById('form').reset();
            document.getElementById('image_preview').style.display = 'none'; // Hide the image preview
            currentId = null;
        }

        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                const imagePreview = document.getElementById('image_preview');
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block'; // Show the image preview
            }

            if (file) {
                reader.readAsDataURL(file); // Convert the image to base64 string
            }
        }

        document.getElementById('form').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            const admin_id = document.getElementById('admin_id').value;
            const full_name = document.getElementById('full_name').value;
            const phone = document.getElementById('phone').value;
            const profile_image = document.getElementById('image_preview').src || ''; // Get the image preview src
            const updated_at = new Date().toISOString().slice(0, 10);

            if (currentId) {
                // Update existing profile
                const profileIndex = adminProfiles.findIndex(profile => profile.admin_id == currentId);
                if (profileIndex !== -1) {
                    adminProfiles[profileIndex] = { admin_id, full_name, phone, profile_image, updated_at };
                }
            } else {
                // Add new profile
                const newProfile = { admin_id: parseInt(admin_id), full_name, phone, profile_image, updated_at };
                adminProfiles.push(newProfile);
            }

            hideAddProfileForm();
            populateTable(adminProfiles);
        });

        function editProfile(id) {
            const profile = adminProfiles.find(p => p.admin_id == id);
            if (profile) {
                document.getElementById('admin_id').value = profile.admin_id;
                document.getElementById('full_name').value = profile.full_name;
                document.getElementById('phone').value = profile.phone;
                document.getElementById('image_preview').src = profile.profile_image;
                document.getElementById('image_preview').style.display = 'block'; // Show the image preview
                currentId = profile.admin_id;

                showAddProfileForm();
            }
        }

        function deleteProfile(id) {
            adminProfiles = adminProfiles.filter(profile => profile.admin_id !== id);
            populateTable(adminProfiles);
        }

        // Populate the table on initial load
        window.onload = () => {
            populateTable(adminProfiles);
        };
    </script>
</body>
</html>
