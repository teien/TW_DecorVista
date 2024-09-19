
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body{
            background-color: #f8f9fa;
            margin-top: 80px ;
        }

        .card {
            margin-bottom: 1.5rem;
            box-shadow: 0 .25rem .5rem rgba(0, 0, 0, .025)
        }

        .card-border-primary {
            border-top: 4px solid #2979ff
        }

        .card-border-secondary {
            border-top: 4px solid #efefef
        }

        .card-border-success {
            border-top: 4px solid #00c853
        }

        .card-border-info {
            border-top: 4px solid #3d5afe
        }

        .card-border-warning {
            border-top: 4px solid #ff9100
        }

        .card-border-danger {
            border-top: 4px solid #ff1744
        }

        .card-border-light {
            border-top: 4px solid #f8f9fa
        }

        .card-border-dark {
            border-top: 4px solid #6c757d
        }

        .card-header {

            border-bottom-width: 1px
        }

        .card-actions a {
            color: #495057;
            text-decoration: none
        }

        .card-actions svg {
            width: 16px;
            height: 16px
        }

        .card-actions .dropdown {
            line-height: 1.4
        }

        .card-title {
            font-weight: 500;
            margin-top: .1rem
        }

        .card-subtitle {
            font-weight: 400
        }

        .card-table {
            margin-bottom: 0
        }

        .card-table tr td:first-child,
        .card-table tr th:first-child {
            padding-left: 1.25rem
        }

        .card-table tr td:last-child,
        .card-table tr th:last-child {
            padding-right: 1.25rem
        }

        .card-img-top {
            height: 100%
        }
        .card {
            margin-bottom: 1.5rem;
            box-shadow: 0 0.25rem 0.5rem rgba(0,0,0,.025);
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;

            background-clip: border-box;
            border: 1px solid #e5e9f2;
            border-radius: .2rem;
        }

        .card-header:first-child {
            border-radius: calc(.2rem - 1px) calc(.2rem - 1px) 0 0;
        }

        .card-header {
            border-bottom-width: 1px;
        }
        .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            color: inherit;

            border-bottom: 1px solid #e5e9f2;
        }
    </style>
    <title></title>
</head>
<body>
<main class="content">
    <div class="container p-0">
        <div class="row mt-4">
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card card-border-warning">
                    <div class="card-header">
                        <div class="card-actions float-right">
                            <div class="dropdown show">
                                <a href="#" data-toggle="dropdown" data-display="static">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">In Progress</h5>
                        <h6 class="card-subtitle text-muted">Nam pretium turpis et arcu. Duis arcu tortor.</h6>
                    </div>
                    <div class="card-body">
                        <div class="card mb-3 bg-light">
                            <div class="card-body p-3">
                                <div class="float-right mr-n2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada.</p>
                                <div class="float-right mt-n1">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                                </div>
                                <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                            </div>
                        </div>
                        <div class="card mb-3 bg-light">
                            <div class="card-body p-3">
                                <div class="float-right mr-n2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis.</p>
                                <div class="float-right mt-n1">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                                </div>
                                <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                            </div>
                        </div>
                        <div class="card mb-3 bg-light">
                            <div class="card-body p-3">
                                <div class="float-right mr-n2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
                                <div class="float-right mt-n1">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar8.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                                </div>
                                <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                            </div>
                        </div>
                        <div class="card mb-3 bg-light">
                            <div class="card-body p-3">
                                <div class="float-right mr-n2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <p>In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis tristique.</p>
                                <div class="float-right mt-n1">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                                </div>
                                <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary btn-block">Add new</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card card-border-danger">
                    <div class="card-header">
                        <div class="card-actions float-right">
                            <div class="dropdown show">
                                <a href="#" data-toggle="dropdown" data-display="static">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">On hold</h5>
                        <h6 class="card-subtitle text-muted">Nam pretium turpis et arcu. Duis arcu tortor.</h6>
                    </div>
                    <div class="card-body">
                        <div class="card mb-3 bg-light">
                            <div class="card-body p-3">
                                <div class="float-right mr-n2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <p>In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis tristique.</p>
                                <div class="float-right mt-n1">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                                </div>
                                <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                            </div>
                        </div>
                        <div class="card mb-3 bg-light">
                            <div class="card-body p-3">
                                <div class="float-right mr-n2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis.</p>
                                <div class="float-right mt-n1">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                                </div>
                                <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                            </div>
                        </div>
                        <div class="card mb-3 bg-light">
                            <div class="card-body p-3">
                                <div class="float-right mr-n2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
                                <div class="float-right mt-n1">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                                </div>
                                <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary btn-block">Add new</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card card-border-success">
                    <div class="card-header">
                        <div class="card-actions float-right">
                            <div class="dropdown show">
                                <a href="#" data-toggle="dropdown" data-display="static">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">Completed</h5>
                        <h6 class="card-subtitle text-muted">Nam pretium turpis et arcu. Duis arcu tortor.</h6>
                    </div>
                    <div class="card-body">
                        <div class="card mb-3 bg-light">
                            <div class="card-body p-3">
                                <div class="float-right mr-n2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
                                <div class="float-right mt-n1">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                                </div>
                                <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                            </div>
                        </div>
                        <div class="card mb-3 bg-light">
                            <div class="card-body p-3">
                                <div class="float-right mr-n2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <p>In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis tristique.</p>
                                <div class="float-right mt-n1">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                                </div>
                                <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                            </div>
                        </div>
                        <div class="card mb-3 bg-light">
                            <div class="card-body p-3">
                                <div class="float-right mr-n2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis.</p>
                                <div class="float-right mt-n1">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar8.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                                </div>
                                <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                            </div>
                        </div>
                        <div class="card mb-3 bg-light">
                            <div class="card-body p-3">
                                <div class="float-right mr-n2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada.</p>
                                <div class="float-right mt-n1">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                                </div>
                                <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary btn-block">Add new</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>
