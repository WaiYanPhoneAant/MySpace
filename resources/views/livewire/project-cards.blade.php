
<div class="row   justify-content-start ">
    @if ($loading==true)
        <x-cardloading></x-cardloading>
    @endif
    @if (count($projects)>0)
        @foreach ($projects as $project)
            <div wire:key="{{$project->id}}" class="col-lg-3 col-md-6 col-12 mb-3 p-2">
                <a href="./projectPreview.html" class="text-decoration-none">
                    <div class="project_card p-3 rounded-3">
                        <div class="d-flex gap-2 col-12 ">
                            <div class="project_img  bg-light">
                                <img src="https://preview.keenthemes.com/metronic8/demo38/assets/media/svg/brand-logos/xing-icon.svg"
                                    class="w-100 p-3" alt="">
                            </div>
                            <div class="d-flex justify-content-end ">
                                <div class="d-flex flex-column align-items-start ">
                                    <h2 class="project_title pt-1 text-dark fw-bold mb-1">{{$project->name}}</h2>
                                    <span class="project_description text-muted mt-0 ">{{$project->description}}</span>
                                </div>
                                <!-- <div class="align-self-start d-flex  pt-1 text-end">
                                                                    <span class="badge rounded-pill  bg-primary  bg-opacity-75 text-end">Hello</span>
                                                                </div> -->
                            </div>
                        </div>
                        <div class="project_detail mt-4 text-muted">
                            <h4 class="text mb-2">Start Date : <span>{{$project->created_at}}</span></h4>
                            <h4 class="text ">Tech Stack : <span>{{$project->tech_stack}}</span></h4>
                        </div>

                        <div class="project_detail mt-3 text-muted">
                            <a class="btn btn-sm shadow-sm" href="{{$project->url ?? '#'}}"><i class="fa-brands fa-github"></i>
                                GitHub</a>
                            <a class="btn btn-sm shadow-sm"><i class="fa-brands fa-nfc-symbol"></i>
                                Preview</a>
                           @if ($project->visibility=='private')
                               <button class="btn btn-sm shadow-sm bg-light-danger text-white"><i class="fa-solid fa-lock"></i>
                                    Private</button>
                           @endif
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    @else
            <div class="col-12 text-center">There is no project to show</div>
    @endif

</div>

