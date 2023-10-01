
<x-layout :style='asset("css/mySpace/codeSpace.css")'>
    <div class="container-fluid p-0">
        <section class="w-auto  hero_section shadow-sm p-1 ">
            <nav class="container d-flex justify-content-between  fw-bold p-2">
                <div class="logo text-dark">Source Code</div>
                <div class="link  text-dark">wypa.dev</div>
            </nav>
            <header class="text-center mt-4">
                <h1 class="fs-4 fw-bolder  text-dark">All Of My Works</h1>
            </header>
            <livewire:projectsearch ></livewire:projectsearch>
            <div class="col-10 m-auto tags row text-center justify-content-center mt-4 mb-2 gap-lg-4 gap-2">
                <div class="shadow-sm  p-1 tag  px-3  ">
                    All
                </div>
                <div class="shadow-sm  p-1 tag  px-3  ">
                    Business App
                </div>
                <div class="shadow-sm  p-1 tag  px-3  ">
                    Static App
                </div>
                <div class="shadow-sm  p-1 tag  px-3  ">
                    Client App
                </div>
                <div class="shadow-sm  p-1 tag  px-3  ">
                    API App
                </div>
                <div class="shadow-sm  p-1 tag  px-3  ">
                    Package
                </div>
                <div class="shadow-sm  p-1 tag  px-3  ">
                    MVC
                </div>
            </div>
        </section>
        <section class="project_showcase pt-10">
            <div class="container-fluid px-md-3 px-lg-5">
                <livewire:project-cards>
            </div>
        </section>
    </div>
</x-layout>
