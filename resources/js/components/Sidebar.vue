<template>
    <div id="left-sidebar" class="sidebar">
        <div class="sidebar_icon">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link" href="page-search-results.html"><i class="fa fa-search"></i></a></li>
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Home-icon"><i class="fa fa-dashboard"></i></a></li>                
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
                            <li :class="{
                                'active': $router.currentRoute == sidebarItem.url,
                                'header': sidebarItem.type == 'header'
                                }" v-for="(sidebarItem,index) in sidebarItems" :key="index">
                                    <router-link :to="{path: sidebarItem.url}" v-if="!sidebarItem.type"><i :class="sidebarItem.icon"></i><span>{{$t(sidebarItem.name)}}</span></router-link>
                                    <span v-else>{{$t(sidebarItem.name)}}</span>
                            </li>
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
            </div>
        </div>
    </div>
</template>
<script>
import sidebarItems from "./sidebar-items.json"
export default {
    data: () => ({
        sidebarItems,
    })
}
</script>