<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <nav class="navbar navbar-light fixed-top bg-primary" style="padding:0;">
        <div class="container-fluid mt-2 mb-2">
            <div class="col-lg-12">
                <div class="col-md-1 float-left" style="display: flex;">
                    <div class="logo">
                        <span class="fa fa-money-bill-wave"></span>
                    </div>
                </div>
                <div class="col-md-4 float-left text-white">
                    <large><b>Loan Management System</b></large>
                </div>
                <div class="col-md-2 float-right text-white">
                    <a href="logout" class="text-white">{{Session::get("user")}} <i class="fa fa-power-off"></i></a>
                </div>
            </div>
        </div>
 </nav>

    <nav id="sidebar" class='mx-lt-5 bg-dark'>

        <div class="sidebar-list">

            <a href="/welcome" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
            <a href="loans" class="nav-item nav-loans"><span class='icon-field'><i class="fa fa-file-invoice-dollar"></i></span> Loans</a>
            <a href="payments" class="nav-item nav-payments"><span class='icon-field'><i class="fa fa-money-bill"></i></span> Payments</a>
            <a href="borrowers" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-user-friends"></i></span> Borrowers</a>
            <a href="loan_plan" class="nav-item nav-plan"><span class='icon-field'><i class="fa fa-list-alt"></i></span> Loan Plans</a>
            <a href="loan_type" class="nav-item nav-loan_type"><span class='icon-field'><i class="fa fa-th-list"></i></span> Loan Types</a>
            <a href="users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>

        </div>

    </nav>
</div>