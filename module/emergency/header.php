<div class="page-header">
    <div class="header-wrapper row m-0">
        <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Medicine Feature .." name="q" title="" autofocus>
                        <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                    </div>
                    <div class="Typeahead-menu"></div>
                </div>
            </div>
        </form>
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
        </div>
        <div class="left-header col horizontal-wrapper ps-0">
            <ul class="horizontal-menu">
                <!-- <li class="mega-menu outside"><a class="nav-link" href="javascript:;"><i data-feather="layers"></i><span>Menu</span></a>
               <div class="mega-menu-container nav-submenu menu-to-be-close header-mega">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col mega-box">
                           <div class="mobile-title d-none">
                              <h5>Mega menu</h5><i data-feather="x"></i>
                           </div>
                           <div class="link-section icon">
                              <div>
                                 <h6>Menu</h6>
                              </div>
                              <ul>
                                 <li><a href="javascript:;">[A]Registrasi, Tagihan Ranap & Rajal, Pelayanan & Biling Pasien</a></li>
                                 <li><a href="javascript:;">[B]Input Data Tindakan, Obat & BHP Via Barcode No.Rawat</a></li>
                                 <li><a href="javascript:;">[C]Presensi, Manajemen & Penggajian Pegawai Rumah Sakit</a></li>
                                 <li><a href="javascript:;">[D]Transaksi Inventory Obat, BHP Medis, Alat Kesehatan Pasien</a></li>
                                 <li><a href="javascript:;">[E]Transaksi Inventory Barang Non Medis, Penunjang (LAB, RO)</a></li>
                                 <li><a href="javascript::">[F]Transaksi Inventory Barang Dapur Kering & Basah</a></li>
                                 <li><a href="javascript:;">[G]Aset, Inventaris Barang & Instalasi Kesehatan Lingkungan</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <li class="level-menu outside"><a class="nav-link" href="javascript"><i data-feather="inbox"></i><span>Shortcut</span></a>
               <ul class="header-level-menu menu-to-be-close">
                  <li><a href="javascript:;" data-original-title="" title=""> <i data-feather="file"></i><span>Master Data</span></a></li>
                  <li><a href="javascript:;" data-original-title="" title=""> <i data-feather="folder"></i><span>Integration</span></a>
                     <ul class="header-level-sub-menu">
                        <li><a href="javascript:;" data-original-title="" title=""> <i data-feather="user"></i><span>KEMKES</span></a></li>
                        <li><a href="javascript:;" data-original-title="" title=""> <i data-feather="user-minus"></i><span>BPJS</span></a></li>
                        <li><a href="javascript:;" data-original-title="" title=""> <i data-feather="user-check"></i><span>Devices</span></a></li>
                     </ul>
                  </li>
                  <li><a href="javascript:;" data-original-title="" title=""> <i data-feather="heart"></i><span>Front Office</span></a></li>
                  <li><a href="javascript:;" data-original-title="" title=""> <i data-feather="monitor"></i><span>Back Office</span></a></li>
                  <li><a href="javascript:;" data-original-title="" title=""> <i data-feather="box"></i><span>Utility</span></a></li>
               </ul>
            </li> -->
            </ul>
        </div>
        <div class="nav-right col-8 pull-right right-header p-0">
            <ul class="nav-menus">
                <li class="language-nav">
                    <div class="translate_wrapper">
                        <div class="current_lang">
                            <div class="lang"><i class="flag-icon flag-icon-id"></i><span class="lang-txt">ID </span></div>
                        </div>
                    </div>
                </li>
                <li> <span class="header-search"><i data-feather="search"></i></span></li>
                <li class="onhover-dropdown">
                    <div class="notification-box"><i data-feather="bell"> </i><span class="badge rounded-pill badge-secondary">1</span></div>
                    <ul class="notification-dropdown onhover-show-div">
                        <li><i data-feather="bell"></i>
                            <h6 class="f-18 mb-0">Notitications</h6>
                        </li>
                        <li>
                            <p><i class="fa fa-circle-o me-3 font-primary"> </i>Recipt Order Obat ID : <?= rand(11111, 9999) ?> <span class="pull-right">10 min.</span></p>
                        </li>
                        <li><a class="btn btn-primary" href="javascript:;">Check all notification</a></li>
                    </ul>
                </li>
                <li>
                    <div class="mode"><i class="fa fa-moon-o"></i></div>
                </li>
                <li class="onhover-dropdown"><i data-feather="message-square"></i>
                    <ul class="chat-dropdown onhover-show-div">
                        <li><i data-feather="message-square"></i>
                            <h6 class="f-18 mb-0">Message Box </h6>
                        </li>
                        <li>
                            <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/1.jpg" alt="">
                                <div class="status-circle online"></div>
                                <div class="media-body"><span>Jaka Prayudha</span>
                                    <p>Lorem Ipsum is simply dummy...</p>
                                </div>
                                <p class="f-12 font-success">58 mins ago</p>
                            </div>
                        </li>
                        <li class="text-center"> <a class="btn btn-primary" href="javascript:;">View All </a></li>
                    </ul>
                </li>
                <li class="maximize"><a class="text-dark" href="javascript:;" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                <li class="profile-nav onhover-dropdown p-0 me-0">
                    <div class="media profile-media"><img class="b-r-10" src="../assets/images/dashboard/profile.jpg" alt="">
                        <div class="media-body"><span><?= $_SESSION['fullname'] ?></span>
                            <p class="mb-0 font-roboto"><?= $_SESSION['username'] ?> <i class="middle fa fa-angle-down"></i></p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li><a href="javascript:;"><i data-feather="user"></i><span>Account </span></a></li>
                        <li><a href="javascript:;"><i data-feather="mail"></i><span>Inbox</span></a></li>
                        <li><a href="javascript:;"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                        <li><a href="javascript:;"><i data-feather="settings"></i><span>Settings</span></a></li>
                        <li><a href="../controller/auth/logout"><i data-feather="log-out"> </i><span>Log Out</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
    </div>
</div>