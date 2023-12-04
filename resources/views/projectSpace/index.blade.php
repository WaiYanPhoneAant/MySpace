
<x-layout :style='asset("css/mySpace/codeSpace.css")' :js='asset("js/MySpace/space.js")'>
    <div class="container-fluid main-div p-0">
            <section class="w-auto  hero_section shadow-sm p-1  d-sm-block">
                <nav class="container-fluid px-md-3 px-lg-5   d-flex justify-content-between  fw-bold p-2">
                    <div class="logo">My Space</div>

                    <div class="d-flex align-items-center justify-content-end">
                        <a class="portfolio-link" target="_blank" href="./index.html">
                            <div class="portfolio-tag">
                                <span class="spanHeader">Portfolio</span>
                                <span class="porlink">wypa.dev</span>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="link  text-">wypa.dev</div> -->
                </nav>
            </section>
            <section class="project_showcase position-relative">
                <div class="container-fluid main-div px-md-3 px-lg-5 ">
                    <div class="search">
                        <div class=" float-search float-search-icon p-2 " id="fsIcon" style="cursor: pointer;">
                            <i class="fa-solid fa-magnifying-glass fa-rotate-90 pe-40"></i>
                        </div>
                        <div class="d-none  col-12 col-md-4 gap-1 p-1 border-1" id="fsContainer">
                            <livewire:projectsearch>
                        </div>
                        <div class="tags ms-md-3 ms-2">
                            <button class="tag px-3 py-1 btn btn-sm me-2">HCJ</button>
                            <button class="tag px-3 py-1 btn btn-sm me-2">MERN</button>
                            <button class="tag px-3 py-1 btn btn-sm me-2">TALL</button>
                            <button class="tag px-3 py-1 btn btn-sm me-2">Laravel</button>
                        </div>
                    </div>
                    <livewire:project-cards>
                </div>
            </section>
        </div>
</x-layout>
