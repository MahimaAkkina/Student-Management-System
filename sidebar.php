<div class="flex-shrink-0 px-3 pb-3 pt-0 bg-dark text-white" style="width: 230px; height:640px">
                    <div class="d-flex pb-2 mb-3 mt-1">
                        <div class="pic">
                            <img src="pics/face8.jpg" class="rounded-circle mt-1" width="45px" height="45px">
                        </div>
                        <div class="ms-3">
                            <p style="font-weight: bold;"><?php echo $_SESSION['Username']; ?></p>
                            <p><?php echo $_SESSION['Email'];?></p>
                        </div>
                    </div>
                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                        <a href="admin_dashboard.php" class="text-white" style="text-decoration:none"><button class="btn btn-toggle text-white d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="" aria-expanded="true">
                            Dashboard<i class="bi bi-speedometer2" style="margin-left: 100px !important;"></i>
                            </button></a>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle text-white d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#class-collapse" aria-expanded="false">
                            Class<i class="bi bi-stack" style="margin-left: 140px !important;"></i>
                            </button>
                            <div class="collapse" id="class-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="add_class.php" class="text-white  d-inline-flex text-decoration-none rounded">&gt;     Add Class</a></li>
                                    <li><a href="manage_class.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt;     Manage Class</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class=" btn btn-toggle text-white d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            Students<i class="bi bi-people-fill" style="margin-left: 110px !important;"></i>
                            </button>
                            <div class="collapse" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="add_students.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt;     Add Students</a></li>
                                    <li><a href="manage_Students.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt;     Manage Students</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle text-white d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#notice-collapse" aria-expanded="false">
                            Notice<i class="bi bi-file-earmark-fill" style="margin-left: 125px !important;"></i>
                            </button>
                            <div class="collapse" id="notice-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="add_notice.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt;     Add Notice</a></li>
                                    <li><a href="manage_notice.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt;     Manage Notice</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle text-white d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#pubnotice-collapse" aria-expanded="false">
                            Public Notice<i class="bi bi-file-earmark-fill" style="margin-left: 74px !important;"></i>
                            </button>
                            <div class="collapse" id="pubnotice-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="add_publicnotice.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt;     Add Public Notice</a></li>
                                    <li><a href="manage_publicnotice.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt;     Manage Public Notice</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle text-white d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#pages-collapse" aria-expanded="false">
                            Pages<i class="bi bi-file-earmark-fill" style="margin-left: 135px !important;"></i>
                            </button>
                            <div class="collapse" id="pages-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="about_us.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt;     About Us</a></li>
                                    <li><a href="contact_us.php" class="text-white link-body-emphasis d-inline-flex text-decoration-none rounded">&gt;     Contact Us</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <a href="reports.php"><button class="text-white btn btn-toggle d-inline-flex align-items-center rounded border-0" aria-expanded="false">
                            Reports<i class="bi bi-journal" style="margin-left: 120px !important;"></i>
                            </button></a>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <a href="search.php"><button class="text-white btn btn-toggle d-inline-flex align-items-center rounded border-0" aria-expanded="false">
                            Research<i class="bi bi-search" style="margin-left: 110px !important;"></i>
                            </button></a>
                        </li>
                    </ul>
                </div>