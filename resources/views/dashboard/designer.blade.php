<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>about me profile - Bootdey.com</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">


        body {
            margin-top: 80px;
        }
        .card-box {
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #e7eaed;
            padding: 1.5rem;
            margin-bottom: 24px;
            border-radius: .25rem;
        }
        .avatar-xl {
            height: 6rem;
            width: 6rem;
        }
        .rounded-circle {
            border-radius: 50%!important;
        }
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #1abc9c;
        }
        .nav-pills .nav-link {
            border-radius: .25rem;
        }
        .navtab-bg li>a {
            background-color: #f7f7f7;
            margin: 0 5px;
        }
        .nav-pills>li>a, .nav-tabs>li>a {
            color: #6c757d;
            font-weight: 600;
        }
        .mb-4, .my-4 {
            margin-bottom: 2.25rem!important;
        }
        .tab-content {
            padding: 20px 0 0 0;
        }
        .progress-sm {
            height: 5px;
        }
        .m-0 {
            margin: 0!important;
        }
        .table .thead-light th {
            color: #6c757d;
            background-color: #f1f5f7;
            border-color: #dee2e6;
        }
        .social-list-item {
            height: 2rem;
            width: 2rem;
            line-height: calc(2rem - 4px);
            display: block;
            border: 2px solid #adb5bd;
            border-radius: 50%;
            color: #adb5bd;
        }

        .text-purple {
            color: #6559cc!important;
        }
        .border-purple {
            border-color: #6559cc!important;
        }

        .timeline {
            margin-bottom: 50px;
            position: relative;
        }
        .timeline:before {
            background-color: #dee2e6;
            bottom: 0;
            content: "";
            left: 50%;
            position: absolute;
            top: 30px;
            width: 2px;
            z-index: 0;
        }
        .timeline .time-show {
            margin-bottom: 30px;
            margin-top: 30px;
            position: relative;
        }
        .timeline .timeline-box {
            background: #fff;
            display: block;
            margin: 15px 0;
            position: relative;
            padding: 20px;
        }
        .timeline .timeline-album {
            margin-top: 12px;
        }
        .timeline .timeline-album a {
            display: inline-block;
            margin-right: 5px;
        }
        .timeline .timeline-album img {
            height: 36px;
            width: auto;
            border-radius: 3px;
        }
        @media (min-width: 768px) {
            .timeline .time-show {
                margin-right: -69px;
                text-align: right;
            }
            .timeline .timeline-box {
                margin-left: 45px;
            }
            .timeline .timeline-icon {
                background: #dee2e6;
                border-radius: 50%;
                display: block;
                height: 20px;
                left: -54px;
                margin-top: -10px;
                position: absolute;
                text-align: center;
                top: 50%;
                width: 20px;
            }
            .timeline .timeline-icon i {
                color: #98a6ad;
                font-size: 13px;
                position: absolute;
                left: 4px;
            }
            .timeline .timeline-desk {
                display: table-cell;
                vertical-align: top;
                width: 50%;
            }
            .timeline-item {
                display: table-row;
            }
            .timeline-item:before {
                content: "";
                display: block;
                width: 50%;
            }
            .timeline-item .timeline-desk .arrow {
                border-bottom: 12px solid transparent;
                border-right: 12px solid #fff !important;
                border-top: 12px solid transparent;
                display: block;
                height: 0;
                left: -12px;
                margin-top: -12px;
                position: absolute;
                top: 50%;
                width: 0;
            }
            .timeline-item.timeline-item-left:after {
                content: "";
                display: block;
                width: 50%;
            }
            .timeline-item.timeline-item-left .timeline-desk .arrow-alt {
                border-bottom: 12px solid transparent;
                border-left: 12px solid #fff !important;
                border-top: 12px solid transparent;
                display: block;
                height: 0;
                left: auto;
                margin-top: -12px;
                position: absolute;
                right: -12px;
                top: 50%;
                width: 0;
            }
            .timeline-item.timeline-item-left .timeline-desk .album {
                float: right;
                margin-top: 20px;
            }
            .timeline-item.timeline-item-left .timeline-desk .album a {
                float: right;
                margin-left: 5px;
            }
            .timeline-item.timeline-item-left .timeline-icon {
                left: auto;
                right: -56px;
            }
            .timeline-item.timeline-item-left:before {
                display: none;
            }
            .timeline-item.timeline-item-left .timeline-box {
                margin-right: 45px;
                margin-left: 0;
                text-align: right;
            }
        }
        @media (max-width: 767.98px) {
            .timeline .time-show {
                text-align: center;
                position: relative;
            }
            .timeline .timeline-icon {
                display: none;
            }
        }
        .timeline-sm {
            padding-left: 110px;
        }
        .timeline-sm .timeline-sm-item {
            position: relative;
            padding-bottom: 20px;
            padding-left: 40px;
            border-left: 2px solid #dee2e6;
        }
        .timeline-sm .timeline-sm-item:after {
            content: "";
            display: block;
            position: absolute;
            top: 3px;
            left: -7px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #fff;
            border: 2px solid #1abc9c;
        }
        .timeline-sm .timeline-sm-item .timeline-sm-date {
            position: absolute;
            left: -104px;
        }
        @media (max-width: 420px) {
            .timeline-sm {
                padding-left: 0;
            }
            .timeline-sm .timeline-sm-date {
                position: relative !important;
                display: block;
                left: 0 !important;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<div class="container-fluid ">
    <div class="row">
        <div class="col-lg-1 col-xl-1 "> </div>
        <div class="col-lg-3 col-xl-3 ">
            <div class="card-box text-center ">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-circle avatar-xl img-thumbnail" alt="profile-image">
                <h4 class="mb-0">{{$userName }}</h4>
                <h4 class="mb-0"></h4>
                <p class="text-muted">@Designer</p>
                <div class="text-left mt-3">
                    <h4 class="font-13 text-uppercase ">About Me :</h4>
                     {{$profile->bio ?? 'Please update your bio'}}

                    <p class="text-muted font-13 mb-3">

                    </p>
                    <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2">{{$profile->first_name ?? '??'}} {{$profile->last_name ?? '??'}}</span></p>
                    <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ml-2">{{$profile->contact_number ?? '??'}}</span></p>
                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 "><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6411170116240109050d084a000b09050d0a">{{$profile->contact_email ?? '??'}}</a></span></p>
                    <p class="text-muted mb-1 font-13"><strong>Company :</strong> <span class="ml-2">{{$profile->company_name ?? '??'}}</span></p>
                    <p class="text-muted mb-1 font-13"><strong>Website :</strong> <span class="ml-2">{{$profile->website_url?? '??'}}</span></p>

                </div>
                <ul class="social-list list-inline mt-3 mb-0">
                    <li class="list-inline-item">
                        <a href="{{$profile->fb_url ?? ''}}" class="social-list-item border-purple text-purple"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{$profile->instagram ?? ''}}" class="social-list-item border-danger text-danger"><i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{$profile->twitter_url ?? ''}}" class="social-list-item border-info text-info"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{$profile->skype?? ''}}" class="social-list-item border-secondary text-secondary"><i class="fab fa-skype"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{$profile->linkedin?? ''}}" class="social-list-item border-secondary text-secondary"><i class="fab fa-linkedin"></i></a>

                    </li>
                </ul>
            </div>
            <div class="text-center">
                <h2>Work Time</h2>
                <table class="table table-bordered table-hover table-sm">
                    <thead class="thead-light">
                    <tr>
                        <th>Day</th>
                        <th>Start</th>
                        <th>End</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Monday</td>
                        <td>8:00</td>
                        <td>17:00</td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>8:00</td>
                        <td>17:00</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>8:00</td>
                        <td>17:00</td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td>8:00</td>
                        <td>17:00</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>8:00</td>
                        <td>17:00</td>
                    </tr>
                    <tr>
                        <td>Saturday</td>
                        <td>8:00</td>
                        <td>17:00</td>
                    </tr>
                    <tr>
                        <td>Sunday</td>
                        <td>8:00</td>
                        <td>17:00</td>
                    </tr>
                    </tbody>

                </table>

            </div>


        </div>
        <div class="col-lg-7 col-xl-7 ">
            <div class="card-box">

                <ul class="nav nav-pills navtab-bg">
                        <li class="nav-item">
                            <a href="#settings" data-toggle="tab" aria-expanded="true" class="nav-link ml-0 active">
                                <i class="mdi mdi-settings-outline mr-1"></i>Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#todo" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="mdi mdi-settings-outline mr-1"></i>Todo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#project" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="mdi mdi-settings-outline mr-1"></i>Project
                            </a>
                        </li>

                </ul>
                @if (Auth::user()->role == 'InteriorDesigner' && Auth::user()->interiorDesigner->designer_id == ($profile->designer_id ?? 0) )
                <div class="tab-content">
                    <div class="tab-pane show active" id="settings">
                        <form method="POST" action="{{ route('update.profile') }}">
                            @csrf
                            @method('PUT')

                            <!-- Thông tin cá nhân -->
                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="first_name" value="{{ old('first_name', $profile->first_name ?? '') }}" required autocomplete="given-name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" name="last_name" value="{{ old('last_name', $profile->last_name ?? '') }}" required autocomplete="family-name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="userbio">Bio</label>
                                        <textarea class="form-control" id="userbio" name="bio" rows="4" placeholder="Write something..." autocomplete="off">{{ old('bio', $profile->bio ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Thông tin công ty -->
                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building mr-1"></i> Company Info</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="companyname">Company Name</label>
                                        <input type="text" class="form-control" id="companyname" name="company_name" value="{{ old('company_name', $profile->company_name ?? '') }}" autocomplete="organization">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cwebsite">Website</label>
                                        <input type="text" class="form-control" id="cwebsite" name="website_url" value="{{ old('website_url', $profile->website_url?? '') }}" autocomplete="url">
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building mr-1"></i> Contact</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="contact_number" value="{{ old('contact_number', $profile->contact_number ?? '') }}" autocomplete="organization">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="contact_email" value="{{ old('contact_email', $profile->contact_email ?? '') }}" autocomplete="mail">
                                    </div>
                                </div>
                            </div>

                            <!-- Thông tin mạng xã hội -->
                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth mr-1"></i> Social</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="social-fb">Facebook</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="social-fb" name="fb_url" value="{{ old('fb_url', $profile->fb_url ?? '') }}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="social-tw">Twitter</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="social-tw" name="twitter_url" value="{{ old('twitter_url', $profile->twitter_url ?? '') }}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="social-insta">Instagram</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="social-insta" name="instagram" value="{{ old('instagram', $profile->instagram ?? '') }}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="social-lin">Linkedin</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="social-lin" name="linkedin" value="{{ old('linkedin', $profile->linkedin ?? '') }}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="social-sky">Skype</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-skype"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="social-sky" name="skype" value="{{ old('skype', $profile->skype ?? '') }}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Nút lưu -->
                            <div class="text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                            </div>
                        </form>


                    </div>
                    <div class="tab-pane" id="todo">
                        @include('dashboard.interior_design.todo')
                    </div>
                    @endif
                    <div class="tab-pane" id="project">
                       <h1>111111</h1>
                    </div>
                    <div class="col-lg-1 col-xl-1 "> </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>
