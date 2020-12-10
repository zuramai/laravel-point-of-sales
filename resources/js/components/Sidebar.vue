<template>
    <div id="left-sidebar" class="sidebar">
        <div class="sidebar_icon">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link" href="page-search-results.html"><i class="fa fa-search"></i></a></li>
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Home-icon"><i class="fa fa-dashboard"></i></a></li>                
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Envelope-icon"><i class="fa fa-envelope"></i></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Components-icon"><i class="icon-diamond"></i></a></li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Profile-icon"><i class="fa fa-user"></i></a>
                    <a class="nav-link" data-toggle="tab" href="#Setting-icon"><i class="fa fa-cog"></i></a>
                </li>
            </ul>
        </div>
        <div class="sidebar_list">
            <div class="tab-content" id="main-menu">
                <div class="tab-pane active" id="Home-icon">
                    <nav class="sidebar-nav sidebar-scroll">
                        <ul class="metismenu">
                            <li class="active"><a href="index.html"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                            <li class="header">Ready App</li>
                            <li><a href="app-campaign.html"><i class="icon-paper-plane"></i><span>Campaign</span></a></li>
                            <li><a href="app-chat.html"><i class="icon-bubbles"></i><span>Messenger</span></a></li>
                            <li><a href="app-calendar.html"><i class="icon-calendar"></i><span>Calendar</span></a></li>
                            <li><a href="app-contact.html"><i class="icon-book-open"></i><span>Contact List</span></a></li>
                            <li><a href="app-todo.html"><i class="icon-check"></i><span>ToDo List</span></a></li>
                            <li><a href="app-support-ticket.html"><i class="icon-earphones-alt"></i><span>Support Ticket</span></a></li>
                            <li><a href="page-timeline.html"><i class="icon-list"></i><span>Timeline</span></a></li>
                            <li class="header">Extra</li>
                            <li><a href="page-profile.html"><i class="icon-user"></i><span>Profile</span></a></li>
                            <li><a href="app-social.html"><i class="icon-share"></i><span>Social</span></a></li>
                            <li><a href="app-news.html"><i class="icon-microphone"></i><span>News</span></a></li>
                            <li>
                                <a href="#Pages" class="has-arrow"><i class="icon-lock"></i><span>Authentication</span></a>
                                <ul>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-forgot-password.html">Forgot Password</a></li>
                                    <li><a href="page-404.html">Page 404</a></li>
                                    <li><a href="page-maintenance.html">Maintenance</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Invoices" class="has-arrow"><i class="icon-printer"></i>Invoices</a>
                                <ul>
                                    <li><a href="page-invoices.html">Invoices List</a></li>
                                    <li><a href="page-invoices-detail.html">Invoices Detail</a></li>
                                </ul>
                            </li>
                            <li><a href="widgets.html"><i class="icon-puzzle"></i><span>Widgets</span></a></li>
                            <li><a href="page-gallery.html"><i class="icon-picture"></i><span>Image Gallery</span></a></li>
                            <li><a href="page-pricing.html"><i class="icon-credit-card"></i><span>Pricing</span></a></li>                            
                            <li><a href="page-blank.html"><i class="icon-tag"></i><span>Blank Page</span></a></li>
                            <li>
                                <a href="#icon" class="has-arrow"><i class="icon-tag"></i><span>Icons</span></a>
                                <ul>
                                    <li><a href="ui-icons.html">FontAwesome</a></li>
                                    <li><a href="ui-icons-line.html">Simple Line</a></li>
                                    <li><a href="ui-icons-themify.html">Themify Icon</a></li>
                                </ul>
                            </li>                            
                            <li><a href="map-jvectormap.html"><i class="icon-map"></i><span>jVector Map</span></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane" id="Profile-icon">
                    <nav class="sidebar-nav sidebar-scroll">
                        <div class="user-detail">
                            <div class="text-center mb-3">
                                <img class="img-thumbnail rounded-circle" src="/assets/images/sm/avatar1.jpg" alt="">
                                <h6 class="mt-3 mb-0">Michelle Green</h6>
                                <div class="text-center text-muted">Manager</div>
                                <hr>
                                <small class="text-muted">Address: </small>
                                <p> San Francisco</p>
                                <small class="text-muted">Email address: </small>
                                <p>louispierce@example.com</p>
                                <small class="text-muted">Mobile: </small>
                                <p>+ 202-222-2121</p>
                                <a href="page-profile.html" class="btn btn-block btn-success mb-2" title="">View Profile</a>
                                <a href="../documentation/index.html" class="btn btn-block btn-info">Documentation</a>
                            </div>
                            <hr>
                            <div class="card-text">
                                <div class="mt-0">
                                    <small class="float-right text-muted">10/200 GB</small>
                                    <span>Memory</span>
                                    <div class="progress progress-xxs">
                                        <div style="width: 60%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <small class="float-right text-muted">40 MB</small>
                                    <span>Bandwidth</span>
                                    <div class="progress progress-xxs">
                                        <div style="width: 50%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <small class="float-right text-muted">73%</small>
                                    <span>Activity</span>
                                    <div class="progress progress-xxs">
                                        <div style="width: 40%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <small class="float-right text-muted">400 GB</small>
                                    <span>FTP</span>
                                    <div class="progress progress-xxs mb-0">
                                        <div style="width: 80%;" class="progress-bar bg-danger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="tab-pane" id="Envelope-icon">
                    <nav class="sidebar-nav sidebar-scroll">
                        <a href="app-compose.html" class="btn btn-danger btn-block mb-3">Compose</a>
                        <ul class="metismenu">
                            <li class="active"><a href="app-inbox.html"><i class="icon-drawer"></i><span>Inbox</span><span class="badge badge-primary float-right">6</span></a></li>
                            <li><a href="javascript:void(0);"><i class="icon-cursor"></i><span>Sent</span><span class="badge badge-warning float-right">6</span></a></li>
                            <li><a href="javascript:void(0);"><i class="icon-envelope-open"></i><span>Draft</span></a></li>
                            <li><a href="javascript:void(0);"><i class="icon-action-redo"></i><span>Outbox</span></a></li>
                            <li><a href="javascript:void(0);"><i class="icon-trash"></i><span>Trash</span></a></li>
                            <li class="header">Labels</li>
                            <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-danger"></i><span>Workshop</span></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-info"></i><span>Private</span></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-dark"></i><span>Paypal</span></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-primary"></i><span>Comapny</span></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane" id="Components-icon">
                    <nav class="sidebar-nav sidebar-scroll">
                        <ul class="metismenu">
                            <li><a href="ui-helper-class.html"><i class="icon-info"></i>Helper Classes</a></li>
                            <li><a href="ui-bootstrap.html"><i class="icon-key"></i>Bootstrap UI</a></li>
                            <li><a href="ui-typography.html"><i class="icon-target"></i>Typography</a></li>
                            <li><a href="ui-colors.html"><i class="icon-drop"></i>Colors</a></li>
                            <li><a href="ui-buttons.html"><i class="icon-tag"></i>Buttons</a></li>
                            <li><a href="ui-tabs.html"><i class="icon-tag"></i>Tabs</a></li>
                            <li><a href="ui-progressbars.html"><i class="icon-graph"></i>Progress Bars</a></li>
                            <li><a href="ui-modals.html"><i class="icon-tag"></i>Modals</a></li>
                            <li><a href="ui-notifications.html"><i class="icon-question"></i>Notifications</a></li>
                            <li><a href="ui-dialogs.html"><i class="icon-tag"></i>Dialogs</a></li>
                            <li><a href="ui-list-group.html"><i class="icon-list"></i>List Group</a></li>
                            <li><a href="ui-media-object.html"><i class="icon-tag"></i>Media Object</a></li>
                            <li><a href="ui-nestable.html"><i class="icon-loop"></i>Nestable</a></li>
                            <li><a href="ui-range-sliders.html"><i class="icon-equalizer"></i>Range Sliders</a></li>
                            <li>
                                <a href="#Charts" class="has-arrow"><i class="icon-bar-chart"></i><span>Charts</span></a>
                                <ul>
                                    <li><a href="chart-c3.html">C3 Charts</a></li>
                                    <li><a href="chart-chartjs.html">ChartJS</a></li>
                                    <li><a href="chart-morris.html">Morris Charts</a></li>
                                    <li><a href="chart-flot.html">Flot Charts</a></li>
                                    <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                    <li><a href="chart-jquery-knob.html">Jquery Knob</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Forms" class="has-arrow"><i class="icon-layers"></i><span>Forms</span></a>
                                <ul>
                                    <li><a href="forms-basic.html">Basic Elements</a></li>
                                    <li><a href="forms-advanced.html">Advanced Elements</a></li>
                                    <li><a href="forms-validation.html">Form Validation</a></li>
                                    <li><a href="forms-wizard.html">Form Wizard</a></li>
                                    <li><a href="forms-summernote.html">Summernote</a></li>
                                    <li><a href="forms-dragdropupload.html">Drag &amp; Drop Upload</a></li>                            
                                    <li><a href="forms-editors.html">CKEditor</a></li>
                                    <li><a href="forms-markdown.html">Markdown</a></li>
                                    <li><a href="forms-cropping.html">Image Cropping</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Tables" class="has-arrow"><i class="icon-film"></i><span>Tables</span></a>
                                <ul>
                                    <li><a href="table-normal.html">Normal Tables</a></li>
                                    <li><a href="table-color.html">Tables Color</a></li>
                                    <li><a href="table-jquery-datatable.html">Jquery Datatables</a></li>
                                    <li><a href="table-editable.html">Editable Tables</a></li>                            
                                    <li><a href="table-filter.html">Table Filter</a></li>
                                    <li><a href="table-dragger.html">Table dragger</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane" id="Setting-icon">
                    <nav class="sidebar-nav sidebar-scroll">
                        <p>General Settings</p>                        
                        <ul class="setting-list list-unstyled">
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Report Panel Usag</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked="">
                                    <span>Email Redirect</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked="">
                                    <span>Notifications</span>
                                </label>                      
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Offline</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Location Permission</span>
                                </label>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item">
                                Dark Menu
                                <div class="float-right">
                                    <label class="switch">
                                        <input type="checkbox" class="dark_menu_btn">
                                        <span class="slider round"></span>
                                    </label>
                                </div>            
                            </li>
                            <li class="list-group-item">
                                Dark version
                                <div class="float-right">
                                    <label class="switch">
                                        <input type="checkbox" class="light-btn">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <hr>
                        <p>Choose Skin</p>
                        <ul class="choose-skin list-unstyled mb-0">
                            <li data-theme="blue" class="active"><div class="blue"></div></li>
                            <li data-theme="green"><div class="green"></div></li>
                            <li data-theme="orange"><div class="orange"></div></li>
                            <li data-theme="blush"><div class="blush"></div></li>
                            <li data-theme="cyan"><div class="cyan"></div></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</template>