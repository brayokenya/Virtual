<div class="app-content content">








    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">


        <form method="POST" action="" enctype="multipart/form-data" class="add_user_form" id="export_btn">

            <input type="hidden" name="_token" value="gASzd3tZfEzxPAeUM7HuCairWkiB8sFInBuKWGXG">
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Monitoring</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="horizontal-vertical">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="jumbotron">
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-role">Merchant-ID</label>
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="user_id" id="user_id"
                                                        value="">
                                                </fieldset>
                                            </div>

                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-role">Transaction Number</label>
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="transaction_number"
                                                        id="transaction_number">
                                                </fieldset>
                                            </div>

                                            <div class="col-12 col-sm-6 col-lg-2">
                                                <label for="users-list-role">Currency</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control" name="currency_name"
                                                        id="currency_name">
                                                        <option value="">Select Currency</option>
                                                        <option value="GBP">GBP</option>
                                                        <option value="EUR">EUR</option>
                                                        <option value="KES">KES</option>
                                                        <option value="USD">USD </option>
                                                        <option value="UGX">UGX</option>
                                                        <option value="TSH">TSH</option>
                                                    </select>
                                                </fieldset>
                                            </div>

                                            <div class="col-12 col-sm-6 col-lg-2">
                                                <label for="users-list-role">From Date</label>
                                                <fieldset class="form-group">
                                                    <input type="date" class="form-control" id="date" name="date">
                                                </fieldset>
                                            </div>

                                            <div class="col-12 col-sm-6 col-lg-2">
                                                <label for="users-list-role">To Date</label>
                                                <fieldset class="form-group">
                                                    <input type="date" class="form-control" id="to_date" name="to_date">
                                                </fieldset>
                                            </div>


                                            <div class="col-12 col-sm-6 col-lg-2">
                                                <br />
                                                <button class="btn btn-success" id="filter"
                                                    type="button">Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>