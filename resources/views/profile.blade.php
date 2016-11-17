
      <!-- top navbar-->
   @include('layouts.navbar')
     @include('layouts.sidebar')
      <!-- offsidebar-->
      <aside class="offsidebar hide">
         <!-- START Off Sidebar (right)-->
         <nav>
            <div role="tabpanel">
               <!-- Nav tabs-->
               <ul role="tablist" class="nav nav-tabs nav-justified">
                  <li role="presentation" class="active">
                     <a href="#app-settings" aria-controls="app-settings" role="tab" data-toggle="tab">
                        <em class="icon-equalizer fa-lg"></em>
                     </a>
                  </li>
                  <li role="presentation">
                     <a href="#app-chat" aria-controls="app-chat" role="tab" data-toggle="tab">
                        <em class="icon-user fa-lg"></em>
                     </a>
                  </li>
               </ul>
               <!-- Tab panes-->
               <div class="tab-content">
                  <div id="app-settings" role="tabpanel" class="tab-pane fade in active">
                     <h3 class="text-center text-thin">Settings</h3>
                     <div class="p">
                        <h4 class="text-muted text-thin">Themes</h4>
                        <div class="table-grid mb">
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-a.css">
                                    <input type="radio" name="setting-theme" checked="checked">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-info"></span>
                                       <span class="color bg-info-light"></span>
                                    </span>
                                    <span class="color bg-white"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-b.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-green"></span>
                                       <span class="color bg-green-light"></span>
                                    </span>
                                    <span class="color bg-white"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-c.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-purple"></span>
                                       <span class="color bg-purple-light"></span>
                                    </span>
                                    <span class="color bg-white"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-d.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-danger"></span>
                                       <span class="color bg-danger-light"></span>
                                    </span>
                                    <span class="color bg-white"></span>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="table-grid mb">
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-e.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-info-dark"></span>
                                       <span class="color bg-info"></span>
                                    </span>
                                    <span class="color bg-gray-dark"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-f.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-green-dark"></span>
                                       <span class="color bg-green"></span>
                                    </span>
                                    <span class="color bg-gray-dark"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-g.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-purple-dark"></span>
                                       <span class="color bg-purple"></span>
                                    </span>
                                    <span class="color bg-gray-dark"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-h.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-danger-dark"></span>
                                       <span class="color bg-danger"></span>
                                    </span>
                                    <span class="color bg-gray-dark"></span>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="p">
                        <h4 class="text-muted text-thin">Layout</h4>
                        <div class="clearfix">
                           <p class="pull-left">Fixed</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-fixed" type="checkbox" data-toggle-state="layout-fixed">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="pull-left">Boxed</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-boxed" type="checkbox" data-toggle-state="layout-boxed">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="pull-left">RTL</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-rtl" type="checkbox">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="p">
                        <h4 class="text-muted text-thin">Aside</h4>
                        <div class="clearfix">
                           <p class="pull-left">Collapsed</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-collapsed" type="checkbox" data-toggle-state="aside-collapsed">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="pull-left">Float</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-float" type="checkbox" data-toggle-state="aside-float">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="pull-left">Hover</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-hover" type="checkbox" data-toggle-state="aside-hover">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="pull-left">Show Scrollbar</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-hover" type="checkbox" data-toggle-state="show-scrollbar" data-target=".sidebar">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="app-chat" role="tabpanel" class="tab-pane fade">
                     <h3 class="text-center text-thin">Connections</h3>
                     <ul class="nav">
                        <!-- START list title-->
                        <li class="p">
                           <small class="text-muted">ONLINE</small>
                        </li>
                        <!-- END list title-->
                        <li>
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-success circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="img/user/05.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Juan Sims</strong>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-success circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="img/user/06.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Maureen Jenkins</strong>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-danger circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="img/user/07.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Billie Dunn</strong>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-warning circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="img/user/08.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Tomothy Roberts</strong>
                                    <br>
                                    <small class="text-muted">Designer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                        </li>
                        <!-- START list title-->
                        <li class="p">
                           <small class="text-muted">OFFLINE</small>
                        </li>
                        <!-- END list title-->
                        <li>
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="img/user/09.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Lawrence Robinson</strong>
                                    <br>
                                    <small class="text-muted">Developer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="img/user/10.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Tyrone Owens</strong>
                                    <br>
                                    <small class="text-muted">Designer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                        </li>
                        <li>
                           <div class="p-lg text-center">
                              <!-- Optional link to list more users-->
                              <a href="#" title="See more contacts" class="btn btn-purple btn-sm">
                                 <strong>Load more..</strong>
                              </a>
                           </div>
                        </li>
                     </ul>
                     <!-- Extra items-->
                     <div class="p">
                        <p>
                           <small class="text-muted">Tasks completion</small>
                        </p>
                        <div class="progress progress-xs m0">
                           <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-success progress-80">
                              <span class="sr-only">80% Complete</span>
                           </div>
                        </div>
                     </div>
                     <div class="p">
                        <p>
                           <small class="text-muted">Upload quota</small>
                        </p>
                        <div class="progress progress-xs m0">
                           <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-warning progress-40">
                              <span class="sr-only">40% Complete</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </nav>
         <!-- END Off Sidebar (right)-->
      </aside>
      <!-- Main section-->
      <section>
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="unwrap">
               <div style="background-image: url(img/profile-bg.jpg)" class="bg-cover">
                  <div class="p-xl text-center text-white">
                     <img src="img/user/09.jpg" alt="Image" class="img-thumbnail img-circle thumb128">
                     <h3 class="m0">Ted Berry</h3>
                     <p>Lead director</p>
                     <p>Proin metus justo, commodo in ultrices at, lobortis sit amet dui. Fusce dolor purus, adipiscing a tempus at, gravida vel purus.</p>
                  </div>
               </div>
               <div class="text-center bg-gray-dark p-lg mb-xl">
                  <div class="row row-table">
                     <div class="col-xs-4 br">
                        <h3 class="m0">400</h3>
                        <p class="m0">
                           <span class="hidden-xs">Profile</span>
                           <span>Views</span>
                        </p>
                     </div>
                     <div class="col-xs-4 br">
                        <h3 class="m0">2000</h3>
                        <p class="m0">Likes</p>
                     </div>
                     <div class="col-xs-4">
                        <h3 class="m0">100</h3>
                        <p class="m0">Following</p>
                     </div>
                  </div>
               </div>
               <div class="p-lg">
                  <div class="row">
                     <div class="col-lg-9">
                        <!-- START timeline-->
                        <ul class="timeline">
                           <li data-datetime="Today" class="timeline-separator"></li>
                           <!-- START timeline item-->
                           <li>
                              <div class="timeline-badge primary">
                                 <em class="fa fa-comment"></em>
                              </div>
                              <div class="timeline-panel">
                                 <div class="popover left">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                       <div class="table-grid table-grid-align-middle mb">
                                          <div class="col col-xs">
                                             <img src="img/user/05.jpg" alt="Image" class="media-object img-circle thumb48">
                                          </div>
                                          <div class="col">
                                             <p class="m0">
                                                <a href="#" class="text-muted">
                                                   <strong>Aiden Curtis</strong>
                                                </a>posted a comment</p>
                                          </div>
                                       </div>
                                       <p>
                                          <em>"Fusce pellentesque congue justo in rutrum. Praesent non nulla et ligula luctus mattis eget at lacus."</em>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <!-- END timeline item-->
                           <!-- START timeline item-->
                           <li class="timeline-inverted">
                              <div class="timeline-badge green">
                                 <em class="fa fa-picture-o"></em>
                              </div>
                              <div class="timeline-panel">
                                 <div class="popover right">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                       <div class="table-grid table-grid-align-middle mb">
                                          <div class="col col-xs">
                                             <img src="img/user/04.jpg" alt="Image" class="media-object img-circle thumb48">
                                          </div>
                                          <div class="col">
                                             <p class="m0">
                                                <a href="#" class="text-muted">
                                                   <strong>James Payne</strong>
                                                </a>shared a new idea</p>
                                          </div>
                                       </div>
                                       <a href="#">
                                          <img src="img/mockup.png" alt="Img" class="img-responsive">
                                       </a>
                                       <p class="text-muted mv">3 Comments</p>
                                       <div class="media bb p">
                                          <small class="pull-right text-muted">12m ago</small>
                                          <div class="pull-left">
                                             <img src="img/user/05.jpg" alt="Image" class="media-object img-circle thumb32">
                                          </div>
                                          <div class="media-body">
                                             <div class="media-heading">
                                                <p class="m0">
                                                   <a href="#">
                                                      <strong>Aiden Curtis</strong>
                                                   </a>
                                                </p>
                                                <p class="m0 text-muted">Hey looks great!</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="media bb p">
                                          <small class="pull-right text-muted">30m ago</small>
                                          <div class="pull-left">
                                             <img src="img/user/08.jpg" alt="Image" class="media-object img-circle thumb32">
                                          </div>
                                          <div class="media-body">
                                             <div class="media-heading">
                                                <p class="m0">
                                                   <a href="#">
                                                      <strong>Samantha Murphy</strong>
                                                   </a>
                                                </p>
                                                <p class="m0 text-muted">Excellento job!</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="media bb p">
                                          <small class="pull-right text-muted">30m ago</small>
                                          <div class="pull-left">
                                             <img src="img/user/04.jpg" alt="Image" class="media-object img-circle thumb32">
                                          </div>
                                          <div class="media-body">
                                             <div class="media-heading">
                                                <p class="m0">
                                                   <a href="#">
                                                      <strong>James Payne</strong>
                                                   </a>
                                                </p>
                                                <p class="m0 text-muted">WIP guys :)</p>
                                             </div>
                                          </div>
                                       </div>
                                       <form method="post" action="#" class="mt">
                                          <textarea placeholder="Comment..." rows="1" class="form-control no-resize"></textarea>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <!-- START timeline item-->
                           <li>
                              <div class="timeline-badge info">
                                 <em class="fa fa-file-o"></em>
                              </div>
                              <div class="timeline-panel">
                                 <div class="popover left">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                       <div class="table-grid table-grid-align-middle mb">
                                          <div class="col col-xs">
                                             <img src="img/user/08.jpg" alt="Image" class="media-object img-circle thumb48">
                                          </div>
                                          <div class="col">
                                             <p class="m0">
                                                <a href="#" class="text-muted">
                                                   <strong>Samantha Murphy</strong>
                                                </a>shared new files</p>
                                          </div>
                                       </div>
                                       <ul class="list-unstyled">
                                          <li class="pb">
                                             <em class="fa fa-file-o fa-fw mr"></em><a href="#" class="text-info">framework-docs-part1.pdf<em class="pull-right fa fa-download fa-fw"></em></a>
                                          </li>
                                          <li class="pb">
                                             <em class="fa fa-file-o fa-fw mr"></em><a href="#" class="text-info">framework-docs-part2.pdf<em class="pull-right fa fa-download fa-fw"></em></a>
                                          </li>
                                          <li class="pb">
                                             <em class="fa fa-file-o fa-fw mr"></em><a href="#" class="text-info">framework-docs-part3.pdf<em class="pull-right fa fa-download fa-fw"></em></a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <!-- END timeline item-->
                           <!-- START timeline item-->
                           <li>
                              <div class="timeline-badge purple">
                                 <em class="fa fa-map-marker"></em>
                              </div>
                              <div class="timeline-panel">
                                 <div class="popover left">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                       <div class="table-grid table-grid-align-middle mb">
                                          <div class="col col-xs">
                                             <img src="img/user/08.jpg" alt="Image" class="media-object img-circle thumb48">
                                          </div>
                                          <div class="col">
                                             <p class="m0">
                                                <a href="#" class="text-muted">
                                                   <strong>Samantha Murphy</strong>
                                                </a>shared new location</p>
                                          </div>
                                       </div>
                                       <p>
                                          <em>"Hey guys! Please check the new location for tomorrows's meeting."</em>
                                       </p>
                                       <div data-gmap="" data-address="276 N TUSTIN ST, ORANGE, CA 92867" data-styled class="gmap"></div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <!-- END timeline item-->
                           <!-- START timeline separator-->
                           <li data-datetime="Yesterday" class="timeline-separator"></li>
                           <!-- END timeline separator-->
                           <!-- START timeline item-->
                           <li>
                              <div class="timeline-badge success">
                                 <em class="fa fa-ticket"></em>
                              </div>
                              <div class="timeline-panel">
                                 <div class="popover left">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                       <div class="table-grid table-grid-align-middle mb">
                                          <div class="col col-xs">
                                             <img src="img/user/12.jpg" alt="Image" class="media-object img-circle thumb48">
                                          </div>
                                          <div class="col">
                                             <p class="m0">
                                                <a href="#" class="text-muted">
                                                   <strong>Dennis Green</strong>
                                                </a>closed issue <a href="#">#548795</a>
                                             </p>
                                             <p class="m0">
                                                <em>&mdash; bootstrap.js needs update</em>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <!-- END timeline item-->
                           <li class="timeline-inverted">
                              <div class="timeline-badge warning">
                                 <em class="fa fa-ticket"></em>
                              </div>
                              <div class="timeline-panel">
                                 <div class="popover right">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                       <div class="table-grid table-grid-align-middle mb">
                                          <div class="col col-xs">
                                             <img src="img/user/09.jpg" alt="Image" class="media-object img-circle thumb48">
                                          </div>
                                          <div class="col">
                                             <p class="m0">
                                                <a href="#" class="text-muted">
                                                   <strong>Ted Berry</strong>
                                                </a>assigned
                                                <a href="#" class="text-muted">
                                                   <strong>Dennis Green</strong>
                                                </a>to issue <a href="#">#548795</a>
                                             </p>
                                             <p class="m0">
                                                <em>&mdash; bootstrap.js needs update</em>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <!-- END timeline item-->
                           <!-- START timeline item-->
                           <li>
                              <div class="timeline-badge danger">
                                 <em class="fa fa-ticket"></em>
                              </div>
                              <div class="timeline-panel">
                                 <div class="popover left">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                       <div class="table-grid table-grid-align-middle mb">
                                          <div class="col col-xs">
                                             <img src="img/user/10.jpg" alt="Image" class="media-object img-circle thumb48">
                                          </div>
                                          <div class="col">
                                             <p class="m0">
                                                <a href="#" class="text-muted">
                                                   <strong>Jon Perry</strong>
                                                </a>opened issue <a href="#">#548795</a>
                                             </p>
                                             <p class="m0">
                                                <em>&mdash; bootstrap.js needs update</em>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <!-- END timeline item-->
                           <!-- START timeline item-->
                           <li class="timeline-end">
                              <a href="#" class="timeline-badge">
                                 <em class="fa fa-plus"></em>
                              </a>
                           </li>
                           <!-- END timeline item-->
                        </ul>
                        <!-- END timeline-->
                     </div>
                     <div class="col-lg-3">
                        <div class="panel panel-default">
                           <div class="panel-body">
                              <div class="text-center">
                                 <h3 class="mt0">Ted Berry</h3>
                                 <p>Lead director</p>
                              </div>
                              <hr>
                              <ul class="list-unstyled ph-xl">
                                 <li>
                                    <em class="fa fa-home fa-fw mr-lg"></em>Somewhere, Neverland</li>
                                 <li>
                                    <em class="fa fa-briefcase fa-fw mr-lg"></em><a href="#">Themicon.co</a>
                                 </li>
                                 <li>
                                    <em class="fa fa-graduation-cap fa-fw mr-lg"></em>Master Designer</li>
                              </ul>
                           </div>
                        </div>
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <a href="#" class="pull-right">
                                 <em class="icon-plus text-muted"></em>
                              </a>Contacts</div>
                           <div class="list-group">
                              <!-- START User status-->
                              <a href="#" class="media p mt0 list-group-item">
                                 <span class="pull-right">
                                    <span class="circle circle-success circle-lg"></span>
                                 </span>
                                 <span class="pull-left">
                                    <!-- Contact avatar-->
                                    <img src="img/user/05.jpg" alt="Image" class="media-object img-circle thumb32">
                                 </span>
                                 <!-- Contact info-->
                                 <span class="media-body">
                                    <span class="media-heading">
                                       <strong>Juan Sims</strong>
                                       <br>
                                       <small class="text-muted">Designeer</small>
                                    </span>
                                 </span>
                              </a>
                              <!-- END User status-->
                              <!-- START User status-->
                              <a href="#" class="media p mt0 list-group-item">
                                 <span class="pull-right">
                                    <span class="circle circle-success circle-lg"></span>
                                 </span>
                                 <span class="pull-left">
                                    <!-- Contact avatar-->
                                    <img src="img/user/06.jpg" alt="Image" class="media-object img-circle thumb32">
                                 </span>
                                 <!-- Contact info-->
                                 <span class="media-body">
                                    <span class="media-heading">
                                       <strong>Maureen Jenkins</strong>
                                       <br>
                                       <small class="text-muted">Designeer</small>
                                    </span>
                                 </span>
                              </a>
                              <!-- END User status-->
                              <!-- START User status-->
                              <a href="#" class="media p mt0 list-group-item">
                                 <span class="pull-right">
                                    <span class="circle circle-danger circle-lg"></span>
                                 </span>
                                 <span class="pull-left">
                                    <!-- Contact avatar-->
                                    <img src="img/user/07.jpg" alt="Image" class="media-object img-circle thumb32">
                                 </span>
                                 <!-- Contact info-->
                                 <span class="media-body">
                                    <span class="media-heading">
                                       <strong>Billie Dunn</strong>
                                       <br>
                                       <small class="text-muted">Designeer</small>
                                    </span>
                                 </span>
                              </a>
                              <!-- END User status-->
                              <!-- START User status-->
                              <a href="#" class="media p mt0 list-group-item">
                                 <span class="pull-right">
                                    <span class="circle circle-warning circle-lg"></span>
                                 </span>
                                 <span class="pull-left">
                                    <!-- Contact avatar-->
                                    <img src="img/user/08.jpg" alt="Image" class="media-object img-circle thumb32">
                                 </span>
                                 <!-- Contact info-->
                                 <span class="media-body">
                                    <span class="media-heading">
                                       <strong>Tomothy Roberts</strong>
                                       <br>
                                       <small class="text-muted">Designer</small>
                                    </span>
                                 </span>
                              </a>
                              <!-- END User status--><a href="#" class="media p mt0 list-group-item text-center text-muted">View all contacts</a>
                           </div>
                        </div>
                        <div class="panel panel-default">
                           <div class="list-group">
                              <a href="#" class="list-group-item">
                                 <em class="pull-right fa fa-users fa-lg fa-fw text-muted mt"></em>
                                 <h4 class="list-group-item-heading">1000</h4>
                                 <p class="list-group-item-text">Friends</p>
                              </a>
                              <a href="#" class="list-group-item">
                                 <em class="pull-right fa fa-rss fa-lg fa-fw text-muted mt"></em>
                                 <h4 class="list-group-item-heading">3000</h4>
                                 <p class="list-group-item-text">Subscriptions</p>
                              </a>
                              <a href="#" class="list-group-item">
                                 <em class="pull-right fa fa-map-marker fa-lg fa-fw text-muted mt"></em>
                                 <h4 class="list-group-item-heading">100</h4>
                                 <p class="list-group-item-text">Places</p>
                              </a>
                              <a href="#" class="list-group-item">
                                 <em class="pull-right fa fa-briefcase fa-lg fa-fw text-muted mt"></em>
                                 <h4 class="list-group-item-heading">400</h4>
                                 <p class="list-group-item-text">Projects</p>
                              </a>
                              <a href="#" class="list-group-item">
                                 <em class="pull-right fa fa-twitter fa-lg fa-fw text-muted mt"></em>
                                 <h4 class="list-group-item-heading">17300</h4>
                                 <p class="list-group-item-text">Twees</p>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
     @include('layouts.footer')