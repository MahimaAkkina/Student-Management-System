<div class="flex-shrink-0 px-3 pb-3 pt-0 bg-dark text-white" style="width: 230px; height:640px">
                    <div class="d-flex pb-2 mb-3 mt-1">
                        <div class="pic">
                            <img src="pics/face8.jpg" class="rounded-circle mt-1" width="45px" height="45px">
                        </div>
                        <div class="ms-3">
                            <p style="font-weight: bold;"><?php echo $_SESSION['Username']; ?></p>
                            <p><?php echo $_SESSION['StudentEmail']; ?></p>
                        </div>
                    </div>
                    <p class="h5 mb-2" style="color:springgreen">DASHBOARD</p>
                    <ul class="list-unstyled ps-0">
                        <li class="mb-0">
                        <a href="student_dashboard.php" class="text-white"><button class="btn btn-toggle text-white d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="" aria-expanded="true">
                            Dashboard<i class="bi bi-speedometer2 fs-4" style="margin-left: 90px !important; color:springgreen;"></i>
                            </button></a>
                        </li>
                      
                        <li class="border-top my-2"></li>
                        <li class="mb-1">
                            <a href="stu_notice.php"><button class="text-white btn btn-toggle d-inline-flex align-items-center rounded border-0" aria-expanded="false">View Notice<i class="bi bi-file-earmark-fill" style="margin-left: 90px !important;"></i>
                            </button></a>
                        </li>
                    </ul>
                </div>